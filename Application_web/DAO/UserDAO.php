<?php
require_once(__DIR__ . "/../MODEL/User.php");
require_once(__DIR__ . "/commonDAO.php");
require_once(__DIR__ . "/../EXCEPTIONS/UserDAOException.php");


class UserDAO extends Connection
{
    public function login($MAIL): User
    {
        try {
            $db = $this->connectionDB();
            $stmt = $db->prepare("SELECT * FROM user WHERE MAIL = ?;");
            $stmt->bind_param('s', $MAIL);
            $stmt->execute();
            $result = $stmt->get_result();

            $data = $result->fetch_all(MYSQLI_ASSOC);
            $result->free();
            $db->close();
        } catch (mysqli_sql_exception $error) {
            $message = "La requête que vous tentez d'obtenir n'a pas pu aboutir. \"" . $error->getCode() . " La tentative de connexion a échoué\"";
            throw new UserDAOException($message);
        }

        foreach ($data as $value) {
            $user = (new User)
                ->setID($value['ID'])
                ->setMail($value['MAIL'])
                ->setName($value['NAME'])
                ->setPassword($value['PASSWORD']);
        }
        if (empty($user)) {
            return null;
        } else {
            return $user;
        }
    }

    function register($user): void
    {
        try {
            $db = $this->connectionDB();
            $stmt = $db->prepare("INSERT INTO user VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'User');");
            $stmt->bind_param(
                "ssssssiissssss",
                $user->getNAME(),
                $user->getLASTNAME(),
                $user->getNICKNAME(),
                $user->getPASSWORD(),
                $user->getADRESS(),
                $user->getCITY(),
                $user->getCP(),
                $user->getTEL(),
                $user->getMOVIE(),
                $user->getBOOK(),
                $user->getMUSIC(),
                $user->getSPORT(),
                $user->getVG(),
                $user->getBIO(),
                $user->getAVATAR()
            );
            $stmt->execute();
            $db->close();
        } catch (mysqli_sql_exception $error) {
            $message = "La requête que vous tentez d'obtenir n'a pas pu aboutir. \"" . $error->getCode() . " La tentative d'inscription a échoué\"";
            throw new UserDAOException($message);
        }
    }

    public function ifAlreadyExist()
    {
        try {
            $db = $this->connectionDB();
            $stmt = $db->prepare("SELECT MAIL, NAME FROM user;");
            $stmt->execute();
            $result = $stmt->get_result();

            $data = $result->fetch_all(MYSQLI_ASSOC);
            $result->free();
            $db->close();
        } catch (mysqli_sql_exception $error) {
            $message = "La requête que vous tentez d'obtenir n'a pas pu aboutir. \"" . $error->getCode() . " La tentative de vérification a échoué\"";
            throw new UserDAOException($message);
        }

        $users = [];
        foreach ($data as $value) {
            $user = (new User)
                ->setName($value['NAME'])
                ->setMail($value['MAIL']);
            $users[] = $user;
        }

        return $users;
    }
}

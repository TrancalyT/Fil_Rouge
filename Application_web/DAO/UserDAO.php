<?php
require_once(__DIR__ . "/commonDAO.php");
require_once(__DIR__ . "/../MODEL/User.php");
require_once(__DIR__ . "/../EXCEPTIONS/UserDAOException.php");


class UserDAO extends Connection
{
    public function login($mail): ?User
    {
        try {
            $db = parent::connectionDB();
            $stmt = $db->prepare("SELECT * FROM user WHERE MAIL = ?;");
            $stmt->bind_param('s', $mail);
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
                ->setPASSWORD($value['PASSWORD'])
                ->setNICKNAME($value['NICKNAME'])
                ->setNAME($value['NAME'])
                ->setLASTNAME($value['LASTNAME'])
                ->setMAIL($value['MAIL'])
                ->setADRESS($value['ADRESS'])
                ->setCITY($value['CITY'])
                ->setCP($value['CP'])
                ->setTEL(($value['TEL']))
                ->setSPORT($value['SPORT'])
                ->setVG($value['VG'])
                ->setBOOK($value['BOOK'])
                ->setMOVIE($value['MOVIE'])
                ->setMUSIC($value['MUSIC'])
                ->setBIO($value['BIO'])
                ->setAVATAR($value['AVATAR'])
                ->setROLE($value['ROLE']);
        }
        if (empty($user)) {
            return null;
        } else {
            return $user;
        }
    }

    function register($name, $lastname, $nickname, $mail, $password, $adress, $city, $cp, $tel, $movie, $book, $sport, $music, $vg, $bio, $avatar)
    {
        try {
            $db = parent::connectionDB();

            $query = "INSERT INTO user (ID, NAME, LASTNAME, NICKNAME, MAIL, PASSWORD, ADRESS, CITY, CP, TEL, MOVIE, BOOK, SPORT, MUSIC, VG, BIO, AVATAR, ROLE)
            VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'User');";

            $stmt = $db->prepare($query);
            $stmt->bind_param(
                "sssssssssssssssb",
                $name,
                $lastname,
                $nickname,
                $mail,
                $password,
                $adress,
                $city,
                $cp,
                $tel,
                $movie,
                $book,
                $sport,
                $music,
                $vg,
                $bio,
                $avatar
            );
            $stmt->execute();
            $db->close();
        } catch (mysqli_sql_exception $error) {
            $message = "La requête que vous tentez d'obtenir n'a pas pu aboutir. \"" . $error->getCode() . " La tentative d'inscription a échoué\"";
            throw new UserDAOException($message);
        }
    }

    public function ifAlreadyExist(): array
    {
        try {
            $db = parent::connectionDB();
            $stmt = $db->prepare("SELECT MAIL, NICKNAME FROM user;");
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
            $users[] = (new User())->setNICKNAME($value['NICKNAME'])
                ->setMAIL($value['MAIL']);
        }

        return $users;
    }


    public function displayUser($id): ?User
    {
        try {
            $db = parent::connectionDB();
            $stmt = $db->prepare("SELECT NICKNAME, NAME, LASTNAME, MAIL, ADRESS, CP, CITY, TEL, SPORT, MOVIE, BOOK, VG, MUSIC, BIO, AVATAR FROM user WHERE ID = ?;");
            $stmt->bind_param('i', $id);
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
                ->setNICKNAME($value['NICKNAME'])
                ->setNAME($value['NAME'])
                ->setLASTNAME($value['LASTNAME'])
                ->setMAIL($value['MAIL'])
                ->setADRESS($value['ADRESS'])
                ->setCITY($value['CITY'])
                ->setCP($value['CP'])
                ->setTEL(strval($value['TEL']))
                ->setSPORT($value['SPORT'])
                ->setVG($value['VG'])
                ->setBOOK($value['BOOK'])
                ->setMOVIE($value['MOVIE'])
                ->setMUSIC($value['MUSIC'])
                ->setBIO($value['BIO'])
                ->setAVATAR($value['AVATAR']);
        }

        if (empty($user)) {
            return null;
        } else {
            return $user;
        }
    }

    function updateUser($name, $lastname, $nickname, $mail, $adress, $city, $cp, $tel, $movie, $book, $sport, $music, $vg, $bio, $id)
    {
        try {
            $db = parent::connectionDB();

            $query = "UPDATE user SET NAME = ?,
                                      LASTNAME = ?,
                                      NICKNAME = ?,
                                      MAIL = ?,
                                      ADRESS = ?,
                                      CITY = ?, 
                                      CP = ?, 
                                      TEL = ?, 
                                      MOVIE = ?, 
                                      BOOK = ?, 
                                      SPORT = ?, 
                                      MUSIC = ?, 
                                      VG = ?, 
                                      BIO = ? 
                                WHERE ID = ?;";

            $stmt = $db->prepare($query);
            $stmt->bind_param(
                "ssssssssssssssi",
                $name,
                $lastname,
                $nickname,
                $mail,
                $adress,
                $city,
                $cp,
                $tel,
                $movie,
                $book,
                $sport,
                $music,
                $vg,
                $bio,
                $id);
            $stmt->execute();
            $db->close();
        } catch (mysqli_sql_exception $error) {
            $message = "La requête que vous tentez d'obtenir n'a pas pu aboutir. \"" . $error->getCode() . " La tentative d'inscription a échoué\"";
            throw new UserDAOException($message);
        }
    }

    public function updateAvatar($avatar, $id)
    {
        try {
            $db = parent::connectionDB();

            $query = "UPDATE user SET AVATAR = ? WHERE ID = ?;";

            $stmt = $db->prepare($query);
            $stmt->bind_param(
                "si",
                $avatar,
                $id);
            $stmt->execute();
            $db->close();
        } catch (mysqli_sql_exception $error) {
            $message = "La requête que vous tentez d'obtenir n'a pas pu aboutir. \"" . $error->getCode() . " La tentative d'inscription a échoué\"";
            throw new UserDAOException($message);
        }
    }

    public function displayAvatar($id) : User
    {
        try {
            $db = parent::connectionDB();
            $stmt = $db->prepare("SELECT AVATAR FROM user WHERE ID = ?;");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();

            $data = $result->fetch_all(MYSQLI_ASSOC);
            $result->free();
            $db->close();
        } catch (mysqli_sql_exception $error) {
            $message = "La requête que vous tentez d'obtenir n'a pas pu aboutir. \"" . $error->getCode() . " La tentative de vérification a échoué\"";
            throw new UserDAOException($message);
        }

        foreach ($data as $value) {
            $users = (new User())->setAVATAR($value['AVATAR']);
        }

        return $users;
    }
}

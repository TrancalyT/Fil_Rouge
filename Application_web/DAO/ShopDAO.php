<?php
require_once(__DIR__ . "/../MODEL/Shop.php");
require_once(__DIR__ . "/commonDAO.php");
require_once(__DIR__ . "/../EXCEPTIONS/ShopDAOException.php");


class ShopDAO extends Connection
{

    function displayArticle()
    {
        try {
            $db = $this->connectionDB();
            $stmt = $db->prepare("SELECT * FROM article ORDER BY ID desc LIMIT 9");
            $stmt->execute();
            $result = $stmt->get_result();
            $data = $result->fetch_all(MYSQLI_ASSOC);
            $result->free();
            $db->close();
        } catch (mysqli_sql_exception $error) {
            $message = "La requête que vous tentez d'obtenir n'a pas pu aboutir. \"" . $error->getCode() . " La tentative d'inscription a échoué\"";
            throw new ShopDAOException($message);
        }

        $articles = [];
        foreach ($data as $value) {
            $articles[] = (new Shop())
                ->setID($value["ID"])
                ->setNAME($value["NAME"])
                ->setPRICE($value["PRICE"])
                ->setQUANTITY($value["QUANTITY"])
                ->setDESCRIPTION($value["DESCRIPTION"])
                ->setPHOTO($value["PHOTO"]);
        }
        return $articles;
    }
}

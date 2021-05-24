<?php
require_once(__DIR__ . "/../MODEL/News.php");
require_once(__DIR__ . "/commonDAO.php");
require_once(__DIR__ . "/../EXCEPTIONS/NewsDAOException.php");


class NewsDAO extends Connection
{

    function displayNews()
    {
        try {
            $db = $this->connectionDB();
            $stmt = $db->prepare("SELECT * FROM news ORDER BY ID desc LIMIT 3");
            $stmt->execute();
            $result = $stmt->get_result();
            $data = $result->fetch_all(MYSQLI_ASSOC);
            $result->free();
            $db->close();
        } catch (mysqli_sql_exception $error) {
            $message = "La requête que vous tentez d'obtenir n'a pas pu aboutir. \"" . $error->getCode() . " La tentative d'inscription a échoué\"";
            throw new VehiculeDAOException($message);
        }

        $news = [];
        foreach ($data as $value) {
            $news[] = (new News())
                ->setID($value["ID"])
                ->setTITLE($value["TITLE"])
                ->setCONTENT($value["CONTENT"])
                ->setDATE($value["DATE"]);
        }
        return $news;
    }
}

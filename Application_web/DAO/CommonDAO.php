<?php

require_once(__DIR__ . "/../EXCEPTIONS/UserDAOException.php");

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

class Connection
{
    function connectionDB()
    {
        try {
            $db = new mysqli("localhost", "root", "", "pocket_museumv2");
        } catch (mysqli_sql_exception $error) {
            $message = "Un problème technique est survenu. Veuillez réessayer ultérieurement. Si le problème persiste, veuillez nous contacter en nous communiquant l'erreur suivante : \"ERROR CODE : " .$error->getCode(). " ON CONNECTTODB\"";
            throw new UserDAOException($message);
        }

        return $db;
    }
}

<?php

require_once(__DIR__ . "/commonDAO.php");
require_once(__DIR__ . "/../MODEL/Goldbook.php");
require_once(__DIR__ . "/../EXCEPTIONS/GoldbookDAOException.php");

class GoldbookDAO extends Connection
{
    function addToGoldbook($avis, $stars)
    {
        try{
            $query = "INSERT INTO GOLDBOOK (ID, TEXT, STARS, VALIDATION)
            VALUES (NULL, ?, ?, 'TOC');"; //TOC = To Check;
        
            $db = parent::connectionDB();
            $stmt = $db->prepare($query);
            $stmt->bind_param('si', $avis, $stars);
            $stmt->execute();
        
            $db->close();
        } catch (mysqli_sql_exception $error) {
            $message = "La requête que vous tentez d'obtenir n'a pas pu aboutir. \"" . $error->getCode() . " La tentative d'inscription a échoué\"";
            throw new GoldbookDAOException($message);
        }
    }
}
?>
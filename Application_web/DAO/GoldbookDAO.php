<?php

require_once(__DIR__ . "/commonDAO.php");
require_once(__DIR__ . "/../MODEL/Goldbook.php");
require_once(__DIR__ . "/../EXCEPTIONS/GoldbookDAOException.php");

class GoldbookDAO extends Connection
{
    function addToGoldbook($avis, $stars, $userID)
    {
        try{
            $query = "INSERT INTO GOLDBOOK (ID, TEXT, STARS, VALIDATION, USER_ID)
            VALUES (NULL, ?, ?, 'TOC', ?);"; //TOC = To Check;
        
            $db = parent::connectionDB();
            $stmt = $db->prepare($query);
            $stmt->bind_param('sii', $avis, $stars, $userID);
            $stmt->execute();
        
            $db->close();
        } catch (mysqli_sql_exception $error) {
            $message = "La requête que vous tentez d'obtenir n'a pas pu aboutir. \"" . $error->getCode() . " La tentative d'inscription a échoué\"";
            throw new GoldbookDAOException($message);
        }
    }

    function displayGoldbook()
    {
        try {
            $db = $this->connectionDB();
            $stmt = $db->prepare("SELECT G.TEXT AS TEXT, G.STARS AS STARS, U.NAME AS NAME, U.LASTNAME AS LASTNAME, U.AVATAR AS AVATAR 
                                FROM goldbook AS G INNER JOIN user AS U ON G.USER_ID = U.ID WHERE VALIDATION = 'YES' LIMIT 3");
            $stmt->execute();
            $result = $stmt->get_result();
            $data = $result->fetch_all(MYSQLI_ASSOC);
            $result->free();
            $db->close();
        } catch (mysqli_sql_exception $error) {
            $message = "La requête que vous tentez d'obtenir n'a pas pu aboutir. \"" . $error->getCode() . " La tentative d'inscription a échoué\"";
            throw new GoldbookDAOException($message);
        }

        foreach ($data as $value) {
            $user = (new User()) ->setNAME($value["NAME"])
                                 ->setLASTNAME($value["LASTNAME"])
                                 ->setAVATAR($value["AVATAR"]);
            $goldbook = (new Goldbook()) ->setTEXT($value["TEXT"])
                                         ->setSTARS($value["STARS"])
                                         ->setUSER_ID($user);
        }
        
        return $goldbook;
    }

    function alreadyRated($id)
    {
        try {
            $db = $this->connectionDB();
            $stmt = $db->prepare("SELECT USER_ID FROM goldbook WHERE USER_ID = ?;");
            $stmt->bind_param('i', $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $data = $result->fetch_all(MYSQLI_ASSOC);
            $result->free();
            $db->close();
        } catch (mysqli_sql_exception $error) {
            $message = "La requête que vous tentez d'obtenir n'a pas pu aboutir. \"" . $error->getCode() . " La tentative d'inscription a échoué\"";
            throw new GoldbookDAOException($message);
        }

        foreach ($data as $value){
            $goldbook = $value['USER_ID'];
        }
        
        if (empty($goldbook)){
            return null;
        } else {
            return $goldbook;
        }
    }
}
?>
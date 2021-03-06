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
            $message = "Un problème technique est survenu. Veuillez réessayer ultérieurement. Si le problème persiste, veuillez nous contacter en nous communiquant l'erreur suivante : \"ERROR CODE : " .$error->getCode(). " ON ADDGB\"";
            throw new GoldbookDAOException($message);
        }
    }

    function displayGoldbook()
    {
        try {
            $db = $this->connectionDB();
            $stmt = $db->prepare("SELECT G.TEXT AS TEXT, G.STARS AS STARS, U.NAME AS NAME, U.LASTNAME AS LASTNAME, U.AVATAR AS AVATAR 
                                FROM goldbook AS G INNER JOIN user AS U ON G.USER_ID = U.ID WHERE VALIDATION = 'YES' ORDER BY RAND() LIMIT 3");
            $stmt->execute();
            $result = $stmt->get_result();
            $data = $result->fetch_all(MYSQLI_ASSOC);
            $result->free();
            $db->close();
        } catch (mysqli_sql_exception $error) {
            $message = "Un problème technique est survenu. Veuillez réessayer ultérieurement. Si le problème persiste, veuillez nous contacter en nous communiquant l'erreur suivante : \"ERROR CODE : " .$error->getCode(). " ON DISPLAYGB\"";
            throw new GoldbookDAOException($message);
        }

        $goldbookRated = [];
        foreach ($data as $value) {
            $user = (new User()) ->setNAME($value["NAME"])
                                 ->setLASTNAME($value["LASTNAME"])
                                 ->setAVATAR($value["AVATAR"]);
            $goldbookRated[] = (new Goldbook()) ->setTEXT($value["TEXT"])
                                                ->setSTARS($value["STARS"])
                                                ->setUSER_ID($user);
        }
        
        return $goldbookRated;
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
            $message = "Un problème technique est survenu. Veuillez réessayer ultérieurement. Si le problème persiste, veuillez nous contacter en nous communiquant l'erreur suivante : \"ERROR CODE : " .$error->getCode(). " ON ALREADYRATED\"";
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

    function userRated($id)
    {
        try {
            $db = $this->connectionDB();
            $stmt = $db->prepare("SELECT TEXT, STARS FROM goldbook WHERE USER_ID = ?;");
            $stmt->bind_param('i', $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $data = $result->fetch_all(MYSQLI_ASSOC);
            $result->free();
            $db->close();
        } catch (mysqli_sql_exception $error) {
            $message = "Un problème technique est survenu. Veuillez réessayer ultérieurement. Si le problème persiste, veuillez nous contacter en nous communiquant l'erreur suivante : \"ERROR CODE : " .$error->getCode(). " ON USERRATED\"";
            throw new GoldbookDAOException($message);
        }

        $goldbookRated = [];
        foreach ($data as $value){
            $goldbookRated[] = (new Goldbook()) ->setTEXT($value["TEXT"])
                                                ->setSTARS($value["STARS"]);
        }
        
        if (empty($goldbookRated)){
            return null;
        } else {
            return $goldbookRated;
        }
    }

    function messageToCheck()
    {
        try {
            $db = $this->connectionDB();
            $stmt = $db->prepare("SELECT G.ID AS ID, G.TEXT AS TEXT, G.STARS AS STARS, U.NAME AS NAME, U.LASTNAME AS LASTNAME, U.NICKNAME AS NICKNAME 
                                FROM goldbook AS G INNER JOIN user AS U ON G.USER_ID = U.ID WHERE VALIDATION = 'TOC';");
            $stmt->execute();
            $result = $stmt->get_result();
            $data = $result->fetch_all(MYSQLI_ASSOC);
            $result->free();
            $db->close();
        } catch (mysqli_sql_exception $error) {
            $message = "Un problème technique est survenu. Veuillez réessayer ultérieurement. Si le problème persiste, veuillez nous contacter en nous communiquant l'erreur suivante : \"ERROR CODE : " .$error->getCode(). " ON MESSTOCHECK\"";
            throw new GoldbookDAOException($message);
        }

        $messageToCheck = [];
        foreach ($data as $value){
            $user = (new User()) ->setNAME($value['NAME'])
                                 ->setLASTNAME($value['LASTNAME'])
                                 ->setNICKNAME($value['NICKNAME']);
            $messageToCheck[] = (new Goldbook()) ->setTEXT($value["TEXT"])
                                                 ->setSTARS($value['STARS'])
                                                 ->setID($value['ID'])
                                                 ->setUSER_ID($user);
        }
        
        if (empty($messageToCheck)){
            return null;
        } else {
            return $messageToCheck;
        }
    }

    public function validation($validation, $id)
    {
        try {
            $db = parent::connectionDB();

            $query = "UPDATE goldbook SET VALIDATION = ? WHERE ID = ?;";

            $stmt = $db->prepare($query);
            $stmt->bind_param(
                "si",
                $validation, $id);
            $stmt->execute();
            $db->close();
        } catch (mysqli_sql_exception $error) {
            $message = "Un problème technique est survenu. Veuillez réessayer ultérieurement. Si le problème persiste, veuillez nous contacter en nous communiquant l'erreur suivante : \"ERROR CODE : " .$error->getCode(). " ON VALIDATIONGB\"";
            throw new GoldbookDAOException($message);
        }
    }

    function displayGoldbookNoLimit()
    {
        try {
            $db = $this->connectionDB();
            $stmt = $db->prepare("SELECT G.TEXT AS TEXT, G.STARS AS STARS, U.NAME AS NAME, U.LASTNAME AS LASTNAME 
                                FROM goldbook AS G INNER JOIN user AS U ON G.USER_ID = U.ID WHERE VALIDATION = 'YES' ORDER BY RAND () LIMIT 15;");
            $stmt->execute();
            $result = $stmt->get_result();
            $data = $result->fetch_all(MYSQLI_ASSOC);
            $result->free();
            $db->close();
        } catch (mysqli_sql_exception $error) {
            $message = "Un problème technique est survenu. Veuillez réessayer ultérieurement. Si le problème persiste, veuillez nous contacter en nous communiquant l'erreur suivante : \"ERROR CODE : " .$error->getCode(). " ON DISPLAYGB\"";
            throw new GoldbookDAOException($message);
        }

        $goldbookRated = [];
        foreach ($data as $value) {
            $user = (new User()) ->setNAME($value["NAME"])
                                 ->setLASTNAME($value["LASTNAME"]);
            $goldbookRated[] = (new Goldbook()) ->setTEXT($value["TEXT"])
                                                ->setSTARS($value["STARS"])
                                                ->setUSER_ID($user);
        }
        
        return $goldbookRated;
    }
}
?>
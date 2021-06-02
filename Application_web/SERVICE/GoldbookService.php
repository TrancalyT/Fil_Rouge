<?php

include_once(__DIR__ . "/../DAO/GoldbookDAO.php");
include_once(__DIR__ . "/../EXCEPTIONS/GoldbookServiceException.php");

class GoldbookService
{

    function addToGoldbook($avis, $stars, $userID)
    {
        $goldBookDAO = new GoldbookDAO();
        
        try {
            $goldBookDAO->addToGoldbook($avis, $stars, $userID);
        } catch (GoldbookDAOException $e) {
            throw new GoldbookServiceException($e->getMessage());
        }
    }

    function displayGoldbook()
    {
        $goldbookDAO = new GoldbookDAO();
        try {
            $goldbookService = $goldbookDAO->displayGoldbook();
        } catch (GoldbookDAOException $error) {
            throw new GoldbookServiceException($error->getMessage());
        }

        return $goldbookService;
    }

    function alreadyRated($id)
    {
        $goldbookDAO = new GoldbookDAO();
        try {
            $goldbookService = $goldbookDAO->alreadyRated($id);
        } catch (GoldbookDAOException $error) {
            throw new GoldbookServiceException($error->getMessage());
        }
        
        return $goldbookService;
    }

    function userRated($id)
    {
        $goldbookDAO = new GoldbookDAO();
        try {
            $goldbookService = $goldbookDAO->userRated($id);
        } catch (GoldbookDAOException $error) {
            throw new GoldbookServiceException($error->getMessage());
        }
        
        return $goldbookService;
    }

    function messageToCheck()
    {
        $goldbookDAO = new GoldbookDAO();
        try {
            $goldbookService = $goldbookDAO->messageToCheck();
        } catch (GoldbookDAOException $error) {
            throw new GoldbookServiceException($error->getMessage());
        }
        
        return $goldbookService;
    }

    function validation($validation, $id)
    {
        $goldbookDAO = new GoldbookDAO();
        try {
            $goldbookService = $goldbookDAO->validation($validation, $id);
        } catch (GoldbookDAOException $error) {
            throw new GoldbookServiceException($error->getMessage());
        }
        
        return $goldbookService;
    }
}

?>
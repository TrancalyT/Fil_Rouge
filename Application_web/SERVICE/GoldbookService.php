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

}

?>
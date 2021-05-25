<?php

include_once(__DIR__ . "/../DAO/GoldbookDAO.php");
include_once(__DIR__ . "/../EXCEPTIONS/GoldbookServiceException.php");

class GoldbookService
{

    function addToGoldbook($avis, $stars)
    {
        $goldBookDAO = new GoldbookDAO;
        
        try {
            $goldBookDAO->addToGoldbook($avis, $stars);
        } catch (GoldbookDAOException $e) {
            throw new GoldbookServiceException($e->getMessage(), $e->getCode());
        }
    }

}

?>
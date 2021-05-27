<?php
include_once(__DIR__ . "/../DAO/ShopDAO.php");
include_once(__DIR__ . "/../EXCEPTIONS/ShopDAOException.php");
include_once(__DIR__ . "/../EXCEPTIONS/ShopServiceException.php");

class ShopService
{
    public function displayArticle()
    {
        $ShopDAO = new ShopDAO();
        try {
            $ShopService = $ShopDAO->displayArticle();
        } catch (ShopDAOException $error) {
            throw new ShopServiceException($error->getMessage());
        }

        return $ShopService;
    }
}

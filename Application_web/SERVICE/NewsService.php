<?php
include_once(__DIR__ . "/../DAO/NewsDAO.php");
include_once(__DIR__ . "/../EXCEPTIONS/NewsDAOException.php");
include_once(__DIR__ . "/../EXCEPTIONS/NewsServiceException.php");

class NewsService
{
    public function displayNews()
    {
        $newsDAO = new newsDAO();
        try {
            $newsService = $newsDAO->displayNews();
        } catch (NewsDAOException $error) {
            throw new NewsServiceException($error->getMessage());
        }

        return $newsService;
    }
}

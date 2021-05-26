<?php
include_once(__DIR__ . "/../DAO/MoviesDAO.php");
include_once(__DIR__ . "/../EXCEPTIONS/MoviesDAOException.php");
include_once(__DIR__ . "/../EXCEPTIONS/MoviesServiceException.php");

class MoviesService
{
    public function displayMovies()
    {
        $MoviesDAO = new MoviesDAO();
        try {
            $MoviesService = $MoviesDAO->displayMovies();
        } catch (MoviesDAOException $error) {
            throw new MoviesServiceException($error->getMessage());
        }

        return $MoviesService;
    }
}

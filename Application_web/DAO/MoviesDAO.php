<?php
require_once(__DIR__ . "/../MODEL/Movies.php");
require_once(__DIR__ . "/commonDAO.php");
require_once(__DIR__ . "/../EXCEPTIONS/MoviesDAOException.php");


class MoviesDAO extends Connection
{

    function displayMovies()
    {
        try {
            $db = $this->connectionDB();
            $stmt = $db->prepare("SELECT * FROM movies ORDER BY ID desc LIMIT 2");
            $stmt->execute();
            $result = $stmt->get_result();
            $data = $result->fetch_all(MYSQLI_ASSOC);
            $result->free();
            $db->close();
        } catch (mysqli_sql_exception $error) {
            $message = "La requête que vous tentez d'obtenir n'a pas pu aboutir. \"" . $error->getCode() . " La tentative d'inscription a échoué\"";
            throw new VehiculeDAOException($message);
        }

        $movies = [];
        foreach ($data as $value) {
            $movies[] = (new Movies())
                ->setID($value["ID"])
                ->setTITLE($value["TITLE"])
                ->setIMAGE($value["IMAGE"])
                ->setDATE($value["DATE"])
                ->setTIME($value["TIME"])
                ->setLOCALISATION($value["LOCALISATION"])
                ->setPG($value["PG"])
                ->setDURATION($value["DURATION"])
                ->setDIRECTION($value["DIRECTION"])
                ->setRELEASED($value["RELEASED"])
                ->setDESCRIPTION($value["DESCRIPTION"]);
        }
        return $movies;
    }
}

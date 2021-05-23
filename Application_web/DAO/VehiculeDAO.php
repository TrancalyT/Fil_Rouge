<?php
require_once(__DIR__ . "/../MODEL/Vehicule.php");
require_once(__DIR__ . "/commonDAO.php");
require_once(__DIR__ . "/../EXCEPTIONS/VehiculeDAOException.php");

class VehiculeDAO extends Connection
{

    function addNewVehicule($vehicule)
    {
        try {
            $db = $this->connectionDB();
            $stmt = $db->prepare("INSERT INTO popvehicules (`NAME`, `DESCRIPTION`, `IMAGE`, `CONTENT`, `TYPE`)
                            VALUES (?,?,?,?,?);");
            $stmt->bind_param(
                "isssss",
                $vehicule->getNAME(),
                $vehicule->getDESCRIPTION(),
                $vehicule->getIMAGE(),
                $vehicule->getCONTENT(),
                $vehicule->TYPE()
            );
            $stmt->execute();
            $db->close();
        } catch (mysqli_sql_exception $error) {
            $message = "La requête que vous tentez d'obtenir n'a pas pu aboutir. \"" . $error->getCode() . " La tentative d'inscription a échoué\"";
            throw new VehiculeDAOException($message);
        }
    }

    function displayVehicule()
    {
        try {
            $db = $this->connectionDB();
            $stmt = $db->prepare("SELECT * FROM popvehicules WHERE TYPE = ?;");
            $stmt->execute();
            $result = $stmt->get_result();
            $data = $result->fetch_all(MYSQLI_ASSOC);
            $result->free();
            $db->close();
        } catch (mysqli_sql_exception $error) {
            $message = "La requête que vous tentez d'obtenir n'a pas pu aboutir. \"" . $error->getCode() . " La tentative d'inscription a échoué\"";
            throw new VehiculeDAOException($message);
        }

        $vehicules = [];
        foreach ($data as $value) {
            $vehicules[] = (new Vehicule())->setNAME($value["NAME"])
                ->setDESCRIPTION($value["DESCRIPTION"])
                ->setIMAGE($value["IMAGE"])
                ->setCONTENT($value["CONTENT"])
                ->setTYPE($value["TYPE"]);
        }
        return $vehicules;
    }
}

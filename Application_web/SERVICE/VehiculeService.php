<?php
include_once(__DIR__ . "/../DAO/VehiculeDAO.php");
include_once(__DIR__ . "/../EXCEPTIONS/VehiculeDAOException.php");
include_once(__DIR__ . "/../EXCEPTIONS/VehiculeServiceException.php");

class VehiculeService
{
    public function displayVehicule(string $TYPE)
    {
        $vehiculeDAO = new VehiculeDAO();
        try {
            $vehiculeService = $vehiculeDAO->displayVehicule($TYPE);
        } catch (VehiculeDAOException $error) {
            throw new VehiculeServiceException($error->getMessage());
        }

        return $vehiculeService;
    }

    // OLD ADD
    // public function addNewVehicule2($name, $description, $image, $content, $type)
    // {
    //     $name = strtoupper($name);
    //     $description = strtoupper($description);
    //     $image = strtoupper($image);
    //     $content = strtoupper($content);
    //     $type = strtoupper($type);

    //     $vehiculeDAO = new VehiculeDAO();
    //     try {
    //         $vehiculeDAO->addNewVehicule($name, $description, $image, $content, $type);
    //     } catch (VehiculeDAOException $error) {
    //         throw new VehiculeServiceException($error->getMessage());
    //     }
    // }

    public function addNewVehicule($vehicule)
    {
        try {
            $vehiculeDAO = new VehiculeDAO();
            $vehiculeDAO->addNewVehicule($vehicule);
        } catch (VehiculeDAOException $error) {
            throw new VehiculeServiceException($error->getMessage());
        }
    }
}

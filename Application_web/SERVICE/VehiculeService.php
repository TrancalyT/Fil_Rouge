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


    public function displayAllVehicule()
    {
        $vehiculeDAO = new VehiculeDAO();
        try {
            $vehiculeService = $vehiculeDAO->displayAllVehicule();
        } catch (VehiculeDAOException $error) {
            throw new VehiculeServiceException($error->getMessage());
        }

        return $vehiculeService;
    }

    public function addNewVehicule($vehicule)
    {
        try {
            $vehiculeDAO = new VehiculeDAO();
            $vehiculeDAO->addNewVehicule($vehicule);
        } catch (VehiculeDAOException $error) {
            throw new VehiculeServiceException($error->getMessage());
        }
    }

    public function deleteVehicule($id): void
    {
        try {
            $vehiculeDAO = new VehiculeDAO();
            $vehiculeDAO->deleteVehicule($id);
        } catch (VehiculeDAOException $error) {
            throw new VehiculeServiceException($error->getMessage());
        }
    }

    public function modifyVehicule($vehicule): void
    {
        try {
            $vehiculeDAO = new VehiculeDAO();
            $vehiculeDAO->modifyVehicule($vehicule);
        } catch (VehiculeDAOException $error) {
            throw new VehiculeServiceException($error->getMessage());
        }
    }
}

<?php
session_start();
require_once("../../SERVICE/VehiculeService.php");

$vehicule = new VehiculeService;
$vehicule->deleteVehicule($_GET["id"]);

header("Location: ../Expo_vehicules.php");

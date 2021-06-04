<?php

include_once(__DIR__ . "/../SERVICE/GoldbookService.php");

session_start();
$goldBookService = new GoldbookService();

try {
    $goldBookService->addToGoldbook($_GET['avis'], $_GET['stars'], $_SESSION['user_id']);
    $messageSuccess = "Votre message a bien était envoyé, merci pour votre soutien !";
    $success = "alert-success";
    header("Location: ../livreor.php?messageSuccess=$messageSuccess&success=$success");
} catch (UserServiceException $error) {
    $messageError = $error->getMessage();
    $error = "alert-error";
    header("Location: ../livreor.php?messageError=$messageError&error=$error");
}

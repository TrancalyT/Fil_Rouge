<?php
include_once(__DIR__ . "/SERVICE/UserService.php");

$newUser = new UserService();

try {
    $returnNick = $newUser->register($_GET['NICKNAME'], $_GET['MAIL'], $_GET['PASSWORD']);
    header("Location:accueil.php?login_process=true&pseudo=$returnNick");
} catch (UserServiceException $error) {
    $messageError = $error->getMessage();
    header("Location:accueil.php?messageError=$messageError");
}

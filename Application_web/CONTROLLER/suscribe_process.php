<?php

include_once(__DIR__ . "/../SERVICE/UserService.php");

$name = $_GET['name'];
$lastname = $_GET['lastname'];
$nickname = $_GET['nickname'];
$mail = $_GET['mail'];
$password = $_GET['password'];
$adress = $_GET['adress'];
$city = $_GET['city'];
$cp = $_GET['cp'];
$tel = $_GET['tel'];
$movie = $_GET['movie'];
$book = $_GET['book'];
$music = $_GET['music'];
$sport = $_GET['sport'];
$vg = $_GET['vg'];
$bio = null;
$avatar = null;

$suscribeUser = new UserService();

try {
    $suscribeUser->register($name, $lastname, $nickname, $mail, $password, $adress, $city, $cp, $tel, $movie, $book, $music, $sport, $vg, $bio, $avatar);
    header("Location:/../connexion.php?successInscri=true&nickname=$nickname");
} catch (UserServiceException $error) {
    $messageError = $error->getMessage();
    header("Location: ../connexion.php?messageError=$messageError");
}

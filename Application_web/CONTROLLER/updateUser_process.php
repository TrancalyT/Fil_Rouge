<?php

include_once(__DIR__ . "/../SERVICE/UserService.php");
session_start();

$name = $_GET['name'];
$lastname = $_GET['lastname'];
$nickname = $_GET['nickname'];
$mail = $_GET['mail'];
$adress = $_GET['adress'];
$city = $_GET['city'];
$cp = $_GET['cp'];
$tel = $_GET['tel'];
$movie = $_GET['movie'];
$book = $_GET['book'];
$music = $_GET['music'];
$sport = $_GET['sport'];
$vg = $_GET['vg'];
$bio = $_GET['bio'];
$avatar = $_GET['avatar'];

$updateUser = new UserService();

try {
    $updateUser->updateUser($name, $lastname, $nickname, $mail, $adress, $city, $cp, $tel, $movie, $book, $sport, $music, $vg, $bio, $avatar, $_SESSION['user_id']);
    header("Location:../profil.php?id={$_SESSION['user_id']}&successUpdate=true&nickname=$nickname");
} catch (UserServiceException $error) {
    $messageError = $error->getMessage();
    header("Location:../profil.php?id={$_SESSION['user_id']}&messageError=$messageError");
}

<?php
include_once(__DIR__ . "/../Service/UserService.php");

$userService = new UserService;
$sql = $userService->login($_POST['MAIL']);
if (!empty($sql) && isset($sql) && password_verify($_POST['PASSWORD'], $sql['PASSWORD'])) {
    session_start();
    $_SESSION['MAIL'] = "$_POST[MAIL]";
    $_SESSION['pass'] = "$sql[ROLE]";
    header("location: ???.php");
} else {
    header("location: ???.php");
}

<?php

session_start();
require_once("../../SERVICE/GoldbookService.php");

$goldBookService = new GoldbookService();

try {
    $goldBookService->validation($_GET['validation'], $_GET['id']);
    $messageSuccess = "DONE";
    header("Location: ../goldbook_admin.php?messageSuccess=$messageSuccess");
    } catch (UserServiceException $error) {
        $messageError = $error->getMessage();
        header("Location: ../goldbook_admin.php?messageError=$messageError");
    }

?>
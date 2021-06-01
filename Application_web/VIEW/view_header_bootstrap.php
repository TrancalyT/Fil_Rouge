<?php
session_start();

function callHeader(string $title, string $css)
{
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title><?= $title ?></title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <link rel="shortcut icon" href="images/icon-index.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" href="commondocs/commons.css">
        <link rel="stylesheet" href=<?= $css ?>>

    </head>

    <body>

        <!-- MENU BURGER -->

    <?php
    require_once(__DIR__ . '/../includes/Nav.php');
}
    ?>

    <?php
    function callMainTitle(string $title)
    {
    ?>

        <div class="bg"></div>
        <header>
            <div class="content">
                <h1><span><?= $title ?></span></h1>
            </div>
        </header>
    <?php
    }

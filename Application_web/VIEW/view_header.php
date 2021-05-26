<?php

function callHeader(string $title, string $css)
{
    session_start();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title><?= $title ?></title>
        <link rel="shortcut icon" href="images/icon-index.png">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" > -->
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link rel="stylesheet" href="commondocs/commons.css">
        <link rel="stylesheet" href=<?= $css ?>>

    </head>

    <body>

    <?php
}
function callNav()
{
    ?>

        <!-- MENU BURGER -->
        <nav role="navigation">
            <div id="menuToggle">
                <input class="input" type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
                <ul id="menu">

<?php
    if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
?>
            <div class="recherche">
            <a href="profil.php" id="connexion">
                <li>Mon Compte</li>
            </a>
            <a href="CONTROLLER/unlog_process.php" id="connexion">
                <button title="Déconnexion" id="srcbutton2"><i class="fas fa-sign-out-alt"></i></button> 
            </a>
            </div>

<?php
    } else {
?>
            <a href="connexion.php" id="connexion">
                <li>Connexion</li>
            </a>

<?php
    }
?>

                    <hr>
                    <a href="accueil.php">
                        <li>Accueil</li>
                    </a>
                    <a href="musee.php">
                        <li>Musée</li>
                    </a>
                    <a href="vehiculespopbefore.php">
                        <li>Expositions</li>
                    </a>
                    <a href="evenements.php">
                        <li>Evènements</li>
                    </a>
                    <a href="forum.php">
                        <li>Forum</li>
                    </a>
                    <a href="shop.php">
                        <li>Boutique</li>
                    </a>
                    <hr>
                    <form action="recherche.php" method="post">
                        <div class="recherche">
                            <input id="search" type="search" placeholder="Va chercher Lycos !" name="search">
                            <a href=""><button id="srcbutton" title="GO !" type="submit"><i class="fas fa-search"></i></button></a>
                        </div>
                    </form>
                </ul>
            </div>
        </nav>

        <!-- Bouton scroll to top -->
        <button onclick="topFunction()" id="myBtn" title="Retour en Haut"></button>


    <?php
}
function callNavExpoVehicule()
{
    ?>

        <!-- MENU EXPO -->

        <div class="nav">
            <a href="accueil.php">
                <div class="salle">
                    <p>Retour au musée</p>
                </div>
            </a>
            <ul>
                <hr>
            </ul>
            <a href="vehiculespopbefore.php">
                <div class="salle">
                    <p>Avant la visite</p>
                </div>
            </a>
            <span class="vertical"></span>
            <a href="vehiculespop.php">
                <div class="salle">
                    <p>Salle des véhicules terrestres</p>
                </div>
            </a>
            <span class="vertical"></span>
            <a href="#">
                <div class="salle">
                    <p>Salle des véhicules volants</p>
                </div>
            </a>
            <span class="vertical"></span>
            <a href="#">
                <div class="salle">
                    <p>Les machins bizarres</p>
                </div>
            </a>
        </div>
        <!-- Bouton scroll to top -->
        <!-- <button onclick="topFunction()" id="myBtn" title="Retour en Haut"></button> -->


    <?php
}
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

    ?>
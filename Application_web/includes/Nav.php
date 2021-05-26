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
            <form action="accueil.php" method="post">
                <button type="submit" name="deco" value="deco" title="Déconnexion" id="srcbutton2"><i class="fas fa-sign-out-alt"></i></button> 
            </form>
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
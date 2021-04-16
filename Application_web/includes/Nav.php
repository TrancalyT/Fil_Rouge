<nav role="navigation">
    <div id="menuToggle">
        <input class="input" type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
        <ul id="menu">
            <a href="connexion.php" id="connexion">
                <li>Connexion</li>
            </a>
            <hr>
            <a href="acceuil.php">
                <li>Accueil</li>
            </a>
            <a href="musee.html">
                <li>Musée</li>
            </a>
            <a href="vehiculespopbefore.html">
                <li>Expositions</li>
            </a>
            <a href="evenements.html">
                <li>Evènements</li>
            </a>
            <a href="forum.html">
                <li>Forum</li>
            </a>
            <a href="shop.html">
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
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Expo</title>
    <link rel="shortcut icon" href="images/icon-index.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" > -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="commondocs/commons.css">
    <link rel="stylesheet" href="css/vehiculespop.css"> 
    
</head>
  <body>
    <!-- <nav role="navigation">
    <div id="menuToggle">
      <input class="input" type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
        <ul id="menu">
          <a href="inscription.html" id="connexion"><li>Connexion</li></a>
          <hr>
          <a href="index.html"><li>Accueil</li></a>
          <a href="musee.html" ><li>Musée</li></a>
          <a href="vehiculespop.html"><li>Expositions</li></a>
          <a href="evenements.html"><li>Evènements</li></a>
          <a href="forum.html"><li>Forum</li></a>
          <a href="shop.html"><li>Boutique</li></a>
          <hr>
          <input id="search" type="search" placeholder="Vas chercher Lycos !" name="search" class="form-control">
        </ul> 
    </div>
  </nav> -->

  <!-- Menu désactivé en expo ! -->

    <!-- MENU EXPO -->
    <div class="nav">
      <a href="accueil.php"><div class="salle"><p>Retour au musée</p></div></a>
          <ul><hr></ul>
        <a href="vehiculespopbefore.php"><div class="salle"><p>Avant la visite</p></div></a>
            <span class="vertical"></span>
        <a href="vehiculespop.php"><div class="salle"><p>Salle des véhicules terrestres</p></div></a>
            <span class="vertical"></span>
        <a href="#"><div class="salle"><p>Salle des véhicules volants</p></div></a>
            <span class="vertical"></span>
        <a href="#"><div class="salle"><p>Les machins bizarres</p></div></a>
    </div>

  <!-- HEADER -->
  <div class="bg"></div>
  <header>
    <div class="content">
      <h1><span>Véhicules de la pop culture</span></h1>
    </div>
  </header>

  <!-- CORPS -->
  <main class="grid-container">
    <button onclick="topFunction()" id="myBtn" title="Retour en Haut"></button>
    <section class="expo">
        <div class="vignette">
            <div class="image">
                <img src="images/delorean.png" alt="delorean">
            </div>
            <div class="corps">
                <h3>Retour vers le Futur</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa est minus, quas reiciendis iste eaque quod unde doloribus. Qui, alias. Impedit odit quisquam fuga deserunt fugit minima facere voluptates beatae.</p>
            </div>
        </div>

        <div class="vignette">
            <div class="corps">
                <h3>Starsky & Hutch</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa est minus, quas reiciendis iste eaque quod unde doloribus. Qui, alias. Impedit odit quisquam fuga deserunt fugit minima facere voluptates beatae.</p>
            </div>
            <div class="image">
                <img src="images/ST.png" alt="starsky&hutch">
            </div>
        </div>

        <div class="vignette">
            <div class="image">
                <img src="images/ecto1.png" alt="ecto1">
            </div>
            <div class="corps">
                <h3>Ghostbusters</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa est minus, quas reiciendis iste eaque quod unde doloribus. Qui, alias. Impedit odit quisquam fuga deserunt fugit minima facere voluptates beatae.</p>
            </div>
        </div>
    </section>
</main>

  <!-- FOOTER -->
  <?php include('includes/Footer.php') ?>
  </main>
  <!-- SCRIPT -->
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
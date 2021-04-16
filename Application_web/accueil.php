<!DOCTYPE html>
<html lang="en">

<head>
  <title>Accueil</title>
  <link rel="shortcut icon" href="images/icon-index.png">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" > -->
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="commondocs/commons.css">
  <link rel="stylesheet" href="css/index.css">

</head>

<body>

  <!-- MENU BURGER -->

  <?php include('includes/Nav.php'); ?>

  <!-- HEADER -->

  <div class="bg"></div>
  <header>
    <div class="content">
      <h1><span>Pocket museum of pop culture</span></h1>
    </div>
  </header>

  <!-- CORPS -->

  <main class="grid-container">
    <section class="About">
      <section class="titleAbout">
        <h2>C'est quoi ce musée ?!</h2>
      </section>
      <section class="bodyAbout">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas fugiat mollitia quidem, officiis autem temporibus, vitae repellendus ullam ipsum quasi laboriosam, corporis dolor neque eius itaque pariatur assumenda. Aspernatur, culpa.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas fugiat mollitia quidem, officiis autem temporibus, vitae repellendus ullam ipsum quasi laboriosam, corporis dolor neque eius itaque pariatur assumenda. Aspernatur, culpa.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas fugiat mollitia quidem, officiis autem temporibus, vitae repellendus ullam ipsum quasi laboriosam, corporis dolor neque eius itaque pariatur assumenda. Aspernatur, culpa.
        </p>
      </section>
    </section>

    <section class="Evenements">
      <a href="evenements.html" class="button2">évenements à venir</a>


    </section>

    <section class="Expos">
      <section class="titleExpos">
        <h2>Retrouvez nos expos en cours</h2>
      </section>
      <!-- Les photos doivent être redim au même format, idéalement 1300*1200 -->
      <section class="bodyExpos">
        <div class="gallery">
          <a href="vehiculespop.html"><img src="images/vehiculesBG2.jpg">Les véhicules à travers la Pop Culture</a>
          <a href="#"><img src="https://source.unsplash.com/1300x1200/?lebanon"></a>
          <a href="#"><img src="https://source.unsplash.com/1300x1200/?qatar"></a>
        </div>
      </section>
    </section>

    <section class="News">
      <section class="titleNews">
        <h2>Quoi de neuf doc ?</h2>
      </section>
      <section class="Events">
        <div class="postit">
          <h3>La Mazette !</h3>
          <p>Click here to sign up for updates!</p>
        </div>
        <div class="postit">
          <h3>La Mazette contre-attaque !</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas fugiat mollitia quidem, officiis autem temporibus, vitae repellendus ullam ipsum quasi laboriosam, corporis dolor neque eius itaque pariatur assumenda. Aspernatur, culpa.</p>
        </div>
        <div class="postit">
          <h3>Le retour de Mazette !</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas fugiat mollitia quidem, officiis autem temporibus, vitae repellendus ullam ipsum quasi laboriosam, corporis dolor neque eius itaque pariatur assumenda. Aspernatur, culpa.</p>
        </div>
      </section>
      <section class="support">
        <img src="images/unclegandalf2.png" alt="we-need-you" />
        <a href="donation.html" class="button1">Soutenez le musée</a>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur dolorum praesentium itaque provident fuga, tempore illo incidunt laboriosam quis labore repellat unde at officia hic, minima recusandae. Modi, placeat fugit?</p>
      </section>
    </section>

    <section class="goldenbook">
      <section class="titleGoldenbook">
        <h2>DANS NOTRE LIVRE D'OR</h2>
      </section>
      <div class="carrousel">
        <input type="radio" name="slides" id="radio-1" checked>
        <input type="radio" name="slides" id="radio-2">
        <input type="radio" name="slides" id="radio-3">
        <input type="radio" name="slides" id="radio-4">
        <ul class="slides">
          <li class="slide">
            <p>
              <q>Laissez moi vous dire qu'à coté, la Terre du Milieu c'est de la chiasse !</q>
              <span class="author">
                <img src="https://th.thgim.com/news/international/m1m01s/article26984481.ece/alternates/FREE_300/30TH-TOLKIEN">
                JR Tolkien
              </span>
            </p>
          </li>
          <li class="slide">
            <p>
              <q>Un lieu exceptionnel, la preuve, il m'a fait revivre.</q>
              <span class="author">
                <img src="https://i.pinimg.com/736x/3f/c5/87/3fc587af121759209c53132a71c03c97--record-player-swing.jpg">
                Sinatra
              </span>
            </p>
          </li>
          <li class="slide">
            <p>
              <q>Dommage, qu'il n'y ai pas encore d'exposition dédié à un public plus âgé si vous voyez ce que je veux dire ;)</q>
              <span class="author">
                <img src="https://pbs.twimg.com/profile_images/1832861297/GordonShumway12.jpg">
                Alf
              </span>
            </p>
          </li>
          <li class="slide">
            <p>
              <q>Les zorglogs apprécient ce site. Gloire aux zorglogs !</q>
              <span class="author">
                <img src="http://www.claudiobernasconi.ch/wp-content/uploads/2014/03/github_octocat-300x300.jpg">
                The octocat
              </span>
            </p>
          </li>
        </ul>
        <div class="slidesNavigation">
          <label for="radio-1" id="dotForRadio-1"></label>
          <label for="radio-2" id="dotForRadio-2"></label>
          <label for="radio-3" id="dotForRadio-3"></label>
          <label for="radio-4" id="dotForRadio-4"></label>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <?php include('includes/Footer.php') ?>
  </main>
  <!-- SCRIPT -->
  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>
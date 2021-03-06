<?php require_once('VIEW/view_header.php'); ?>
<?php require_once('VIEW/view_footer.php'); ?>
<?php require_once('VIEW/view_accueil.php'); ?>
<?php require_once('Service/NewsService.php'); ?>
<?php require_once('Service/VehiculeService.php'); ?>
<?php require_once('Service/GoldbookService.php'); ?>

<?php callHeader("Accueil", "css/index.css"); ?>
<?php callNav() ?>

<!-- HEADER -->

<?php callMainTitle("Pocket Museum of Pop Culture"); ?>


<!-- CORPS -->

<main class="grid-container">
  <section class="About">
    <section class="titleAbout">
      <h2 class="effect-shine">C'est quoi ce musée ?!</h2>
    </section>
    <section class="bodyAbout">
      <p>Le Pocket Museum of POP Culture est avant tout un projet d'école collaboratif, visant à créer une application web responsive à partir de rien ou presque (on a quand même choisi le thème !).
        Cette application est un hommage à, vous vous en doutez, la POP Culture sous toutes ses formes. </br>
        Vous retrouverez ici diverses expos accessibles à tout moment, puisque le Pocket Museum se trouve... dans votre poche !</br></br>
        Musique, cinéma, items cultes, acteurs, références mais aussi espaces de discussion, boutique et évènements LIVE seront au rendez-vous. Alors n'attendez-plus et partez à la poursuite d'Octobre Rouge !
      </p>
    </section>
  </section>

  <section class="Evenements">
    <a href="evenements.php" class="button2" data-aos="fade-up">évenements à venir</a>


  </section>

  <section class="Expos">
    <section class="titleExpos">
      <h2 class="effect-shine">Retrouvez nos expos en cours</h2>
    </section>
    <!-- Les photos doivent être redim au même format, idéalement 1300*1200 -->

    <section class="bodyExpos">
      <?php
      $vehicules = (new VehiculeService())->displayVehicule("expo");
      foreach ($vehicules as $value) {
        $title = $value->getNAME();
        $image = $value->getIMAGE();
      ?>
        <div class="gallery">
          <a href="vehiculespop.php"><img src="<?= "data:image;base64," . base64_encode($image) ?>"></br><?= $title ?></a>
          <!-- <a href="vehiculespop.php"><img src="images/vehiculesBG2.jpg">Les véhicules à travers la Pop Culture</a> -->
          <a href="#"><img src="https://source.unsplash.com/1300x1200/?lebanon"></a>
          <a href="#"><img src="https://source.unsplash.com/1300x1200/?qatar"></a>
        </div>
      <?php } ?>
    </section>
  </section>

  <section class="News">
    <section class="titleNews">
      <h2 class="effect-shine">Quoi de neuf doc ?</h2>
    </section>
    <section class="Events">

      <span class="button1" id="newsbutton">Dernières News</span>
      <div id="displayNews">
        <?php

        $news = (new NewsService())->displayNews();
        foreach ($news as $value) {
          $id = $value->getID();
          $title = $value->getTITLE();
          $content = $value->getCONTENT();
          $date = $value->getDATE();

        ?>

          <div class="postit">
            <h3><?= $title ?></h3>
            <p><?= $content ?></p>
            <span class="date"><?= $date ?></span>
          </div>


        <?php } ?>
      </div>

    </section>
    <section class="support">
      <img src="images/unclegandalf2.png" alt="we-need-you" />
      <a href="donation.php" class="button1">Soutenez le musée</a>
      <p>Le Pocket Museum of POP Culture est ouvert 23h59/24, 7j/7 ! Il est totalement GRATUIT : pas de tickets d'entrée, pas de file d'attente, pas de jours feriés...
        Mais si toutefois l'envie vous venait de soutenir l'initiative, alors suivez le magicien. Cette fois, vous PASSEREZ !</p>
    </section>

  </section>

  <?php
  // CONTROLLER GOLDBOOK
  $goldbook = (new GoldbookService())->displayGoldbook();
  $gbDisplay = [];

  $iteration = 1;

  foreach ($goldbook as $value) {

    $gbDisplay["TEXT".$iteration] = $value->getTEXT();
    $gbDisplay["STARS".$iteration] = $value->getSTARS();
    $gbDisplay["NAME".$iteration] = $value->getUSER_ID()->getNAME();
    $gbDisplay["LASTNAME".$iteration] = $value->getUSER_ID()->getLASTNAME();
    $gbDisplay["AVATAR".$iteration] = $value->getUSER_ID()->getAVATAR();

    if ($gbDisplay["STARS".$iteration] == 1){
      $gbDisplay["STARS".$iteration] = "★";
    } else if ($gbDisplay["STARS".$iteration] == 2){
      $gbDisplay["STARS".$iteration] = "★★";
    } else if ($gbDisplay["STARS".$iteration] == 3){
      $gbDisplay["STARS".$iteration] = "★★★";
    } else if ($gbDisplay["STARS".$iteration] == 4){
      $gbDisplay["STARS".$iteration] = "★★★★";
    } else if ($gbDisplay["STARS".$iteration] == 5){
      $gbDisplay["STARS".$iteration] = "★★★★★";
    }

    if ($gbDisplay["AVATAR".$iteration] == NULL){
      $gbDisplay["AVATAR".$iteration] = "images/default_avatar.jpg";
    } else {
      $gbDisplay["AVATAR".$iteration] = "data:image;base64," . base64_encode($gbDisplay["AVATAR".$iteration]);
    }
    
    $iteration++;
  }

  //GOLDBOOK
  callGoldbook($gbDisplay);

  //FOOTER
  callFooter();
  ?>
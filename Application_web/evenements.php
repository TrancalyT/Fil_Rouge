<?php require_once('VIEW/view_header.php'); ?>
<?php require_once('VIEW/view_footer.php'); ?>
<?php callHeader("Evènements", "css/evenements.css"); ?>
<?php require_once('Service/MoviesService.php'); ?>

<!-- MENU HAMBURGER -->

<?php callNav() ?>

<!-- HEADER -->

<?php callMainTitle("Evenements") ?>

<!-- EVENT -->

<section class="container">

  <section class="cinema">
    <div class="title">
      <h2 class="effect-shine">MOVIES AT THE MUSEUM</h2>
    </div>
    <hr>
    <div class="imageMovie">
      <img src="images/so_bad_its_good.jpg">
    </div>
    <div class="movie">
      <h3>Movies you love to hate: everybody’s got ‘em.</h3>
      <p>C’est la malbouffe cinématographique qui nourrit nos âmes, chatouille nos entrailles et nous fait rouler les yeux. C’est pourquoi ils sont au centre de notre prochaine série de films: <span class="orange">So Bad It’s Good</span>.
        </br>
        Organisée par le <span class="orange">Pocket Museum of POP Culture</span>, cette série entièrement virtuelle aura lieu tous les deux samedis à 18 h. Chaque projection mettra en vedette un invité spécial qui se battra pour la légitimité de son flop préféré. La participation du public est fortement encouragée - les participants peuvent intervenir dans le chat et chahuter (ou féliciter!) Le film en cours.
        Alors prenez du pop-corn, lancez le vieil Internet et préparez-vous à grincer des dents.
        </br></br>
        <span class="italic">* Pour participer, inscrivez-vous à l'avance et le jour de l'événement, vous recevrez un e-mail avec un lien pour rejoindre l'événement virtuel. Assurez-vous d'avoir une copie du film disponible à regarder de votre côté, et nous allons tous jouer ensemble en même temps!</span>
      </p>
    </div>
    <hr>
    <article class="cassette">
      <?php
      $movies = (new MoviesService())->displayMovies();
      foreach ($movies as $value) {
        $id = $value->getID();
        $title = $value->getTITLE();
        $image = $value->getIMAGE();
        $date = $value->getDATE();
        $time = $value->getTIME();
        $localisation = $value->getLOCALISATION();
        $pG = $value->getPG();
        $duration = $value->getDURATION();
        $direction = $value->getDIRECTION();
        $released = $value->getRELEASED();
        $description = $value->getDESCRIPTION();

      ?>


        <div class="cassetteDisplay">
          <div class="imageCassette">
            <img src="<?= "data:image;base64," . base64_encode($image) ?>" alt="image">
          </div>
          <div class="cassetteContainer">
            <div class="specificities">
              <div class="icon far fa-calendar-alt"> - <?= $date ?></div>
              <div class="icon fas fa-clock"> - <?= $time ?></div>
              <div class="icon fas fa-map-marker-alt"> - <?= $localisation ?></div>
            </div>
            <div class="technique">
              <p>Rated <?= $pG ?></p>
              <p><?= $duration ?> mins</p>
              <p>Réalisé par <?= $direction ?></p>
              <p><?= $released ?></p>
            </div>
            <div class="description">
              <p><?= $description ?></p>
            </div>
          </div>
        </div>


      <?php } ?>
    </article>
  </section>
</section>

<!-- FOOTER -->

<?php callFooter(); ?>
<?php session_start(); ?>
<?php require_once('VIEW/view_header.php'); ?>
<?php require_once('VIEW/view_footer.php'); ?>
<?php callHeader("Expo - vehicules of Pop Culture", "css/vehiculespop.css"); ?>

<?php callNavExpoVehicule() ?>
<?php callMainTitle("Vehicules de la POP CULTURE") ?>

<!-- CORPS -->

<main class="grid-container">
  <button onclick="topFunction()" id="myBtn" title="Retour en Haut"></button>
  <section class="expo">

    <?php

    $db = new mysqli("localhost", "root", "", "museum");
    $query = ("SELECT `NAME`, `IMAGE`, `CONTENT` FROM `popvehicules` WHERE TYPE = 'terrestre'");
    $vehicules = mysqli_query($db, $query);
    ?>

    <div class="vignette">
      <div class="image">
        <img src="" alt="">
      </div>
      <div class="corps">
        <?php
        while ($row = mysqli_fetch_array($vehicules)) {
          $title = $row['NAME'];
          $content = $row['CONTENT'];
        ?>
          <h3><?= $title ?></h3>
          <p><?= $content ?></p>
        <?php
        }
        ?>
      </div>
    </div>

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
<?php callFooter(); ?>
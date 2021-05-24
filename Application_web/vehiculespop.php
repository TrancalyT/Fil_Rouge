<?php session_start(); ?>
<?php require_once('VIEW/view_header.php'); ?>
<?php require_once('VIEW/view_footer.php'); ?>
<?php require_once('Service/VehiculeService.php'); ?>

<?php callHeader("Expo - vehicules of Pop Culture", "css/vehiculespop.css"); ?>

<?php callNavExpoVehicule() ?>
<?php callMainTitle("Vehicules de la POP CULTURE") ?>

<!-- CORPS -->

<main class="grid-container">


  <?php

  if (isset($_POST["submit"])) {

    $expo_title = $_POST["expo_title"];
    // $expo_image = $_POST["expo_image"];
    $expo_image = ($_FILES["expo_image"]["name"]);
    $expo_description = $_POST["expo_description"];
    $expo_type = $_POST["expo_type"];
  }
  if (!empty($expo_title) && !empty($expo_image) && !empty($expo_description) && !empty($expo_type)) {



    $db = new mysqli("localhost", "root", "", "museum");
    $query = ("INSERT INTO popvehicules (`NAME`, `IMAGE`, `CONTENT`, `TYPE`)
                            VALUES ('$expo_title','$expo_image','$expo_description','$expo_type');");
    $create_vehicule = mysqli_query($db, $query);

    if (!$create_vehicule) {
      die('QUERY FAILED' . mysqli_error($db));
    }
    header("Location: vehiculespop.php");
  }



  ?>

  <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <input type="text" class="form-control" name="expo_title" placeholder="name">
    </div>
    <div class="form-group">
      <input type="file" class="form-control" name="expo_image" accept="image/png, image/jpeg" placeholder="image">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="expo_description" placeholder="description">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="expo_type" placeholder="type (terrestre volant autre)">
    </div>
    <button class="btn btn-primary" type="submit" name="submit">Add Vehicule</button>

  </form>




  <?php
  $vehicules = (new VehiculeService())->displayVehicule("terrestre");
  foreach ($vehicules as $value) {
    $id = $value->getID();
    $title = $value->getNAME();
    $content = $value->getCONTENT();
    $image = $value->getIMAGE();

  ?>
    <section class="expo">
      <div class="vignette">
        <div class="image">
          <img src="<?= "data:image;base64," . base64_encode($image) ?>" alt="image">
        </div>
        <div class="corps">
          <h3><?= $title ?></h3>
          <p><?= $content ?></p>

        </div>
      </div>
    <?php

  }

    ?>


    <!-- <div class="vignette">
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
    </div> -->
    </section>
</main>


<!-- FOOTER -->
<?php callFooter(); ?>

<?php require_once('VIEW/view_header.php'); ?>
<?php require_once('VIEW/view_footer.php'); ?>
<?php require_once('Service/VehiculeService.php'); ?>

<?php callHeader("Expo - vehicules of Pop Culture", "css/vehiculespop.css"); ?>

<?php callNavExpoVehicule() ?>
<?php callMainTitle("Vehicules de la POP CULTURE") ?>

<!-- CORPS -->

<main class="grid-container">
  <div class="presentation">
    <h3>Bienvenue dans cette exposition !</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quod tempore at facere soluta quasi alias numquam et quisquam? Qui maxime consectetur hic architecto fugit in magni, expedita quos repellat!</p>
    <p>Description de l'expo. On présente ici le menu de gauche et la disparition du menu burger. On navigue de salle en salle, et on revient au musée grâce au lien du haut dans le menu.</p>
  </div>
</main>

<!-- FOOTER -->
<?php callFooter(); ?>
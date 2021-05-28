<?php require_once('VIEW/view_header.php'); ?>
<?php require_once('VIEW/view_footer.php'); ?>
<?php callHeader("Forum", "css/forum.css"); ?>

<?php callNav()?>
<!-- HEADER -->
<?php callMainTitle("Forum") ?>
<!-------------------------------------CORP--------------------------------------------->
<div class="contenant">
  <?php
  // Connexion à la base de données
  try {
    $bdd = new PDO('mysql:host=localhost;dbname=pocket_museumv2', 'root', '');
  } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }

  // récupère les 5 derniers billets
  $req = $bdd->query('SELECT f1.ID, MESSAGE, DATE_FORMAT(f1.DATE_CREATION, \'%d/%m/%Y\') AS date_creation_fr,f2.SUJET,f3.ID_USER  FROM forum_message as f1 inner join forum_topic as f2 INNER JOIN creation_topic as f3 on
                      f1.ID_TOPIC=f2.ID');

  while ($donnees = $req->fetch()) {
  ?>
    <div class="news">
      <h3>
        <?php echo htmlspecialchars($donnees['SUJET']) . "<br>"; ?>
        <em>le <?php echo $donnees['date_creation_fr']; ?></em>
      </h3>

      <p>
        <?php
        //  affiche le contenu du billet
        echo "Message de " . nl2br(htmlspecialchars($donnees['ID_USER'])) . "<br><br>";
        echo nl2br(htmlspecialchars($donnees['MESSAGE'])) . "<br>";
        ?>
        <br />
        <em><a href="commentaires_forum.php?billet=<?php echo $donnees['ID']; ?>">Commentaires</a></em>
      </p>
    </div>
  <?php
  } // Fin de la boucle des billets
  $req->closeCursor();
  ?>
</div>
<!---------------------------------------- FOOTER -------------------------------------->

<?php callFooter(); ?>

<!---------------------------------------- SCRIPT -------------------------------------->
<script type="text/javascript" src="js/script.js"></script>
</body>

</html>
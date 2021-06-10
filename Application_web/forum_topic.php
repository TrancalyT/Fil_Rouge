<?php require_once('VIEW/view_header_bootstrap.php'); ?>
<?php require_once('VIEW/view_footer.php'); ?>
<?php callHeader("Forum", "css/forum.css"); ?>

<!-- HEADER -->
<?php callMainTitle("Forum");
// Connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=pocket_museumv2', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// récupère LES TOPICS
$req = $bdd->query('SELECT f1.id,
                            f1.sujet,
                            DATE_FORMAT(f2.date_creation, \'%d/%m/%Y à %Hh%i\') AS date_creation_fr,
                            f3.NICKNAME
                            FROM forum_topic as f1
                            INNER JOIN creation_topic as f2
                            INNER JOIN user as f3
                            ON f2.id_user=f3.ID
                            AND
                            f1.id=f2.id_topic');

?>

<!-------------------------------------CORP--------------------------------------------->
<div class="contenant">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
        <div class="container-fluid">
            <a class="navbar-brand" href="accueil.php">Retour au musée</a>
            <div class="collapse navbar-collapse" id="navbarsExample03">
                <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="profil.php">Mon profil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Topic</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown03">
                            <li><a class="dropdown-item" href="#">Mes topic</a></li>
                            <li><a class="dropdown-item" href="forum_topic.php">Tous les topics</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control form-control-dark" placeholder="Créer un topic..." aria-label="Search">
                </form>

                <div class="text-end">
                    <button type="button" class="btn btn-outline-light me-2">Valider</button>
                </div>
            </div>
        </div>
    </nav>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>TOPIC</th>
                <th>CREER PAR</th>
                <th>LE</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($donnees = $req->fetch()) {
            ?>
                <div class="row">
                    <div class="col-lg-offset-3 col-lg-6">
                        <tr>
                            <td><strong><?php echo htmlspecialchars($donnees['sujet']); ?></strong></td>
                            <td>créer par:<em> <?php echo nl2br(htmlspecialchars($donnees['NICKNAME'])); ?></em></td>
                            <td>le <?php echo $donnees['date_creation_fr']; ?></td>
                            <td><a href='forum_message.php?billet=<?php echo $donnees['id']; ?>'><button type="submit" class="buttonmain4" name="afficheTopic" value="afficheTopic">Afficher</button></a></td>
                        </tr>
                    </div>
                </div>
            <?php
            } // Fin de la boucle des topics
            $req->closeCursor();
            ?>
        </tbody>
    </table>
</div>
<!---------------------------------------- FOOTER -------------------------------------->
<?php callFooter(); ?>
<!---------------------------------------- SCRIPT -------------------------------------->
<script type="text/javascript" src="js/script.js"></script>
</body>

</html>
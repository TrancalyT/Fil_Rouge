<?php require_once('VIEW/view_header_bootstrap.php'); ?>
<?php require_once('VIEW/view_footer.php'); ?>
<?php require_once(__DIR__ . "/DAO/UserDAO.php"); ?>
<?php callHeader("Forum", "css/forum.css"); ?>

<!-- HEADER -->
<?php callMainTitle("Forum");

// Connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=pocket_museumv2', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// Récupération du billet
$req = $bdd->prepare('SELECT f1.id,
                             f1.message,
                             DATE_FORMAT(f1.date_creation, \'%d/%m/%Y à %Hh%i\') AS date_commentaire_fr,
                             f2.NICKNAME,
                             f2.ROLE,
                             f2.CITY,
                             f2.AVATAR,
                             DATE_FORMAT(f3.date_creation, \'%d/%m/%Y à %Hh%i\') AS date_creation_fr,
                             f4.sujet
                             FROM
                             forum_message as f1
                             INNER JOIN
                             user as f2
                             INNER JOIN
                             creation_topic as f3
                             INNER JOIN
                             forum_topic as f4
                             ON f1.id=f4.id AND f1.id_user=f2.ID AND f1.id_topic=f3.id_topic
                             WHERE f1.id=?');
$req->execute(array($_GET['billet']));
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
    <?php
    while ($donnees = $req->fetch()) {
    ?>
        <div class="news">
            <h3>
                <?php echo htmlspecialchars($donnees['sujet']); ?><br /><br />
                <em><?php echo $donnees['date_creation_fr']; ?></em>
            </h3>
            <p>
                créer par :<em> <?php echo nl2br(htmlspecialchars($donnees['NICKNAME'])); ?></em><br />
                Le :<em><?php echo $donnees['date_commentaire_fr']; ?></em><br /><br />

                <?php echo htmlspecialchars($donnees['message']); ?><br /><br /><br /><br />
                <a href='forum_message.php?billet=<?php echo $donnees['id']; ?>'><button type="submit" class="buttonmain4" name="repondre" value="repondre">repondre</button></a></td>
            </p>
        <?php
    } // Fin de la boucle des topic
        ?>
        </div>
        <!---------------------------------------- FOOTER -------------------------------------->
        <?php callFooter(); ?>
        <!---------------------------------------- SCRIPT -------------------------------------->
        <script type="text/javascript" src="js/script.js"></script>
        </body>

        </html>
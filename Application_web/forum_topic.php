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
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
            </svg>
            <span class="fs-4"></span>
        </a>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="forum_topic.php" class="nav-link" aria-current="page">
                    <svg class="bi me-2" width="16" height="16">
                    </svg>
                    Acceuil forum
                </a>
            </li>
            <li>
                <a href="profil.php" class="nav-link">
                    <svg class="bi me-2" width="16" height="16">
                    </svg>
                    Mon profil
                </a>
            </li>
            <li>
                <a href="#" class="nav-link">
                    <svg class="bi me-2" width="16" height="16">
                    </svg>
                    Mes topic
                </a>
            </li>
            <li>
                <a href="accueil.php" class="nav-link">
                    <svg class="bi me-2" width="16" height="16">
                    </svg>
                    Retour au musée
                </a>
            </li>
            <li>
                <a href="profil.php" class="nav-link">
                    <svg class="bi me-2" width="16" height="16">
                    </svg>
                    Espace Admin
                </a>
            </li>
            <br><br>
            <form class="input" action="">
                <input id="creationTopic" maxlength="20" type="text" placeholder="Créer un topic?" name="creationTopic" class="form-control" required>
                <button type="submit" class="buttonmain3" name="creationTopic" value="creationTopic">je créer un topic</button></a>
            </form>
        </ul>
        <div class="topic">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>TOPIC</th>
                        <th>CREER PAR</th>
                        <th>LE</th>
                        <th>OPTION</th>
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
    </div>

</div>
<!---------------------------------------- FOOTER -------------------------------------->
<?php callFooter(); ?>
<!---------------------------------------- SCRIPT -------------------------------------->
<script type="text/javascript" src="js/script.js"></script>
</body>

</html>
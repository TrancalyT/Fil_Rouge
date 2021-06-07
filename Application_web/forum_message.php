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
            <?php
            while ($donnees = $req->fetch()) {
            ?>
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>TOPIC =><?php echo htmlspecialchars($donnees['sujet']); ?></th>
                            <th>le <?php echo $donnees['date_creation_fr']; ?></th>   
                            <td>créer par :<em> <?php echo nl2br(htmlspecialchars($donnees['NICKNAME'])); ?></em></td>  
                            <td>Le :<em><?php echo $donnees['date_commentaire_fr']; ?></em></td><br/><br/>
                        </tr>
                    </thead>
                    <tbody>
                        <div class="row">
                            <div class="col-lg-offset-3 col-lg-6">
                                <tr>
                                    
                                </tr>
                                <tr>
                                    
                                </tr>
                                <tr>
                                    <td><?php echo htmlspecialchars($donnees['message']); ?></td><br/><br/><br/><br/>
                                </tr>
                                <tr>
                                <td><a href='forum_message.php?billet=<?php echo $donnees['id']; ?>'><button type="submit" class="buttonmain4" name="repondre" value="repondre">repondre</button></a></td>
                                </tr>
                            </div>
                        </div>
                    <?php
                } // Fin de la boucle des topic

                    ?>
                    </tbody>
                </table>
        </div>


    </div>
    <!---------------------------------------- FOOTER -------------------------------------->
    <?php callFooter(); ?>
    <!---------------------------------------- SCRIPT -------------------------------------->
    <script type="text/javascript" src="js/script.js"></script>
    </body>

    </html>
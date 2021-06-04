<?php require_once('VIEW/view_header_bootstrap.php'); ?>
<?php require_once('VIEW/view_footer.php'); ?>
<?php callHeader("Forum", "css/forum.css"); ?>

<!-- HEADER -->
<?php callMainTitle("Forum") ?>
<!-------------------------------------CORP--------------------------------------------->
<div class="contenant">

    <div class="grid-container">
        <div class="nav">
            <a href="creation_topic.php"><button type="button" class="btn btn-secondary">créer un topic</button></a>
            <a href="#"><button type="button" class="btn btn-secondary">mes topic</button></a>
        </div>
        <div class="topic">
            <?php
            // Connexion à la base de données
            try {
                $bdd = new PDO('mysql:host=localhost;dbname=pocket_museumv2', 'root', '');
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }

            // Récupération du billet
            $req = $bdd->prepare('SELECT f1.sujet,
                                         f2.message,
                                         DATE_FORMAT(f2.date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr,
                                         f3.NICKNAME
                                         FROM forum_topic as f1
                                         INNER JOIN forum_message as f2
                                         INNER JOIN user as f3
                                         ON
                                         f2.id_user=f3.ID
                                         AND
                                         f1.id=f2.id_topic');
            
            while ($donnees = $req->fetch()) {
            ?>
                <div class="news">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td><?php echo htmlspecialchars($donnees['sujet']); ?></td>
                                <td><em>le <?php echo $donnees['date_creation_fr']; ?></em></td>
                                <td><?php echo htmlspecialchars($donnees['message']); ?></td>
                                <td>créer par:<em> <?php echo nl2br(htmlspecialchars($donnees['NICKNAME'])); ?></em></td>
                                <td><a href='forum_message.php?id=$donnees[id]'><button name='buttonMod'class='btn btn-secondary'>Repondre</button></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <?php
            } // Fin de la boucle des topic
            $req->closeCursor();
            ?>
        </div>
    </div>
</div>
<!---------------------------------------- FOOTER -------------------------------------->
<?php callFooter(); ?>
<!---------------------------------------- SCRIPT -------------------------------------->
<script type="text/javascript" src="js/script.js"></script>
</body>

</html>
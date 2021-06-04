<?php require_once('VIEW/view_header_bootstrap.php'); ?>
<?php require_once('VIEW/view_footer.php'); ?>
<?php callHeader("Forum", "css/forum.css"); ?>

<!-- HEADER -->
<?php callMainTitle("Forum") ?>
<!-------------------------------------CORP--------------------------------------------->
<div class="contenant">

    <div class="grid-container">
        <div class="nav">
            <div class="mb-3">
                <input id="creationTopic" maxlength="20" type="text" placeholder="ex: Renseignement" name="creationTopic" class="form-control" required>
                <button type="submit" class="buttonmain3" name="creationTopic" value="creationTopic">je valide mon topic</button></a>
                <a href="#"><button type="submit" class="buttonmain3" name="mesTopic" value="mesTopic">acceder à mes topic</button></a>
            </div>
            
        </div>
        <div class="topic">
            <?php
            // Connexion à la base de données
            try {
                $bdd = new PDO('mysql:host=localhost;dbname=pocket_museumv2', 'root', '');
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }

            // récupère LES TOPICS
            $req = $bdd->query('SELECT f1.sujet,
                                       DATE_FORMAT(f2.date_creation, \'%d/%m/%Y à %Hh%imin\') AS date_creation_fr,
                                       f3.NICKNAME
                                       FROM forum_topic as f1
                                       INNER JOIN creation_topic as f2
                                       INNER JOIN user as f3
                                       ON f2.id_user=f3.ID
                                       AND
                                       f1.id=f2.id_topic');

            ?>
            <h1>LISTE DES TOPICS</h1>

            <?php
            while ($donnees = $req->fetch()) {
            ?>
                <div class="news">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td><strong><?php echo htmlspecialchars($donnees['sujet']); ?></strong></td>
                                <td>le <?php echo $donnees['date_creation_fr']; ?></td>
                                <td>créer par:<em> <?php echo nl2br(htmlspecialchars($donnees['NICKNAME'])); ?></em></td>
                                <td><a href='forum_message.php'><button type="submit" class="buttonmain4" name="afficheTopic" value="afficheTopic">Afficher</button></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <?php
            } // Fin de la boucle des topics
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
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mon profil</title>
    <link rel="shortcut icon" href="images/icon-index.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="commondocs/commons.css">
    <link rel="stylesheet" href="css/profil.css">
</head>

<body>
    <!--------------- MENU BURGER ------------------------------------->
    <?php include('includes/Nav.php'); ?>

    <!-- -------------------------HEADER--------------------------------- -->

    <div class="bg"></div>
    <header>
        <div class="content">
            <h1><span>PROFIL</span></h1>
        </div>
    </header>
    <!-------------------------------------CORP--------------------------------------------->
    <div class="contenant">
    <p><a href="">Profil de Liyahhhhhh</a></p> 
        <div class="grid-container">
        
            <div class="infos">
                <form class="formulaire" method="POST" action="">
                    <div>
                        <h6 style="text-align: center;font-family:'lato','sans-serif';">Modifier mes infos</h6>
                        <input type="text" name="newpseudo" placeholder=" pseudo" /><br /><br />
                        <input type="email" name="newmail" placeholder=" mail" /><br /><br />
                        <input type="password" name="newmdp1" placeholder=" Mot de passe" /><br /><br />
                        <input type="password" name="newmdp2" placeholder=" Confirmer le mot de passe" /><br /><br />
                        <input style="font-family:'lato','sans-serif';" type="button" class="button4" value="Mettre à jour mon profil !" ; />
                    </div>
                </form>
            </div>
            <div class="photo">
            </div>
            <div class="coordonnees">
                <form class="formulaire" method="POST" action="">
                    <div>
                        <h6 style="text-align: center;font-family:'lato','sans-serif';">Modifier mes coordonnées</h6>
                        <input type="text" size="35" maxlength="100" name="newAdresse" placeholder=" Adresse" /><br /><br />
                        <input type="text" name="newville" placeholder=" Ville" /><br /><br />
                        <input type="number" name="newCP" placeholder=" Code Postal" /><br /><br />
                        <input type="phone" name="newTelephone" placeholder=" Téléphone" /><br /><br />
                        <input style="font-family:'lato','sans-serif';" type="button" class="button4" value="Mettre à jour mes coordonnées !" ; />
                    </div>
                </form>
            </div>
            <div class="divers">
                <form class="formulaire" method="POST" action="">
                    <div>
                        <h6 style="text-align: center;font-family:'lato','sans-serif';">Mes favoris</h6>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!---------------------------------------- FOOTER -------------------------------------->
    <?php include('includes/Footer.php') ?>

    <!---------------------------------------- SCRIPT -------------------------------------->
    <script type="text/javascript" src="js/script.js"></script>

</body>

</html>
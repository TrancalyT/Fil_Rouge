<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="images/icon-index.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="commondocs/commons.css">
    <link rel="stylesheet" href="css/connexion.css">
    <title>Connexion / Inscription</title>
</head>

<body>

    <!-- MENU HAMBURGER -->

    <?php include('includes/Nav.php'); ?>

    <!-- HEADER -->

    <div class="bg"></div>
    <header>
        <div class="content">
            <h1><span>Connexion</span></h1>
        </div>
    </header>

    <!-- INSCRIPTION ET CONNEXION -->
    <!-- CONNEXION -->

    <div class="form_connexion">
        <form action="" method="get" class="col g-3 justify-content form-info">
            <div class="container-lg">
                <div class="mb-3">
                    <div class="row justify-content-end">
                        <label for="E-Mail-Connexion" class="col-sm col-form-label">E-Mail : </label>
                        <div class="col-sm-8">
                            <input id="E-Mail-Connexion" size="50" maxlength="100" type="mail" placeholder="" name="mailconnexion" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row justify-content-end">
                        <label for="MDPco" class="col-sm col-form-label">Mot de passe : </label>
                        <div class="col-sm-8">
                            <input id="MDPco" size="50" maxlength="100" type="password" placeholder="" name="mdpco" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="mb-3 text-center">
                    <button type="submit" class="buttonmain">Connexion</button>
                </div>
                <div class="mb-3 text-center">
                    <button type="button" class="buttonmain2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Besoin d'un compte ?</button>
                </div>
            </div>
        </form>
    </div>

    <!-- INSCRIPTION -->

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="form_inscription">
                        <h2 class="text-center">INSCRIPTION</h2>
                        <form action="" method="post" class="col g-3 justify-content form-info">
                            <div class="container-lg">
                                <div class="information">
                                    <h5>Informations :</h5>
                                    <div class="mb-3">
                                        <div class="row justify-content-end">
                                            <label for="Nom-Inscription" class="col-sm col-form-label">*Nom : </label>
                                            <div class="col-sm-8">
                                                <input id="Nom-Inscription" size="50" maxlength="100" type="text" placeholder="Veuillez entrer votre nom ici" name="nominscription" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <label for="Prenom-Inscription" class="col-sm col-form-label">*Prénom : </label>
                                            <div class="col-sm-8">
                                                <input id="Prenom-Inscription" size="50" maxlength="100" type="text" placeholder="Veuillez entrer votre prénom ici" name="prenominscription" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <label for="Pseudonyme-Inscription" class="col-sm col-form-label">*Pseudonyme : </label>
                                            <div class="col-sm-8">
                                                <input id="Pseudonyme-Inscription" size="50" maxlength="100" type="text" placeholder="Veuillez entrer votre pseudonyme ici" name="pseudoinscription" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <label for="E-Mail-Inscription" class="col-sm col-form-label">*E-Mail : </label>
                                            <div class="col-sm-8">
                                                <input id="E-Mail-Inscription" size="50" maxlength="100" type="mail" placeholder="Veuillez entrer votre adresse e-mail ici" name="mailinscription" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </br>
                                <div class="motdepasse">
                                    <div class="mb-3">
                                        <div class="row justify-content-end">
                                            <label for="MDP" class="col-sm col-form-label">*Mot de passe : </label>
                                            <div class="col-sm-8">
                                                <input id="MDP" size="50" maxlength="100" type="password" placeholder="Veuillez saisir votre mot de passe ici" name="mdpinscription" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <label for="MDP2" class="col-sm col-form-label">*Confirmer votre mot de passe : </label>
                                            <div class="col-sm-8">
                                                <input id="MDP2" size="50" maxlength="100" type="password" placeholder="Veuillez confirmer votre mot de passe ici" name="mdp2inscription" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </br>
                                <div class="coordonnees">
                                    <h5>Coordonnées :</h5>
                                    <div class="mb-3">
                                        <div class="row justify-content-end">
                                            <label for="Adresse-Inscription" class="col-sm col-form-label">*Adresse : </label>
                                            <div class="col-sm-8">
                                                <input id="Adresse-Inscription" size="50" maxlength="100" type="text" placeholder="Veuillez entrer votre adresse ici" name="adresseinscription" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <label for="Ville-Inscription" class="col-sm col-form-label">*Ville : </label>
                                            <div class="col-sm-8">
                                                <input id="Ville-Inscription" size="50" maxlength="100" type="text" placeholder="Veuillez entrer votre ville ici" name="villeinscription" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <label for="CP-Inscription" class="col-sm col-form-label">*Code Postal : </label>
                                            <div class="col-sm-8">
                                                <input id="CP-Inscription" size="50" maxlength="5" type="tel" placeholder="Veuillez entrer votre code postal ici" name="cpinscription" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <label for="Tel-Inscription" class="col-sm col-form-label">*Téléphone : </label>
                                            <div class="col-sm-8">
                                                <input id="Tel-Inscription" size="50" maxlength="10" type="tel" placeholder="Veuillez entrer votre code postal ici" name="telinscription" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </br>
                                <div class="divers">
                                    <h5>Divers :</h5>
                                    <div class="mb-3">
                                        <div class="row justify-content-end">
                                            <label for="Film-Inscription" class="col-sm col-form-label">Film favori : </label>
                                            <div class="col-sm-8">
                                                <input id="Film-Inscription" size="50" maxlength="100" type="text" placeholder="Veuillez entrer votre film favori ici" name="filminscription" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <label for="Livre-Inscription" class="col-sm col-form-label">Livre favori : </label>
                                            <div class="col-sm-8">
                                                <input id="Livre-Inscription" size="50" maxlength="100" type="text" placeholder="Veuillez entrer votre livre favori ici" name="livreinscription" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <label for="Musique-Inscription" class="col-sm col-form-label">Musique favorite : </label>
                                            <div class="col-sm-8">
                                                <input id="Musique-Inscription" size="50" maxlength="100" type="text" placeholder="Veuillez entrer votre musique favorite ici" name="musiqueinscription" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <label for="Sport-Inscription" class="col-sm col-form-label">Sport favori : </label>
                                            <div class="col-sm-8">
                                                <input id="Sport-Inscription" size="50" maxlength="100" type="text" placeholder="Veuillez entrer votre sport favori ici" name="sportinscription" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <label for="JV-Inscription" class="col-sm col-form-label">Jeu-vidéo favori : </label>
                                            <div class="col-sm-8">
                                                <input id="JV-Inscription" size="50" maxlength="100" type="text" placeholder="Veuillez entrer votre jeu-vidéo favori ici" name="jvinscription" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="notif">
                                    <p class="text">(*) Champs obligatoires</p>
                                </div>
                                <div class="mb-3">
                                    <div class="g-recaptcha row justify-content-center" data-sitekey="your_site_key"></div>
                                </div>
                                <div class="mb-3 text-center">
                                    <button type="submit" class="buttonmain">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="buttonmain2" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->

    <?php include('includes/Footer.php') ?>

    <!-- SCRIPT -->

    <script type="text/javascript" src="js/script.js"></script>

</body>

</html>
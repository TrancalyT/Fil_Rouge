<!DOCTYPE html>
<html lang="en">

<head>
    <title>Donation</title>
    <link rel="shortcut icon" href="images/icon-index.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/donation.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">


</head>

<body>
    <!--------------- MENU BURGER ------------------------------------->
    <?php include('includes/Nav.php'); ?>

    <!-- -------------------------HEADER--------------------------------- -->

    <div class="bg"></div>
    <header>
        <div class="content">
            <h1><span>donation</span></h1>
        </div>
    </header>
    <!-------------------------------------CORP--------------------------------------------->
    <main class="contenant">
        <button onclick="topFunction()" id="myBtn" title="Retour en Haut"></button>
        <div id="produit">
            <div class="box">
                <div class="text">1.mon soutien</div>
                <div id="choix1">
                    <a>
                        <h5><strong>Je donne une fois</strong></h5>
                    </a>
                    <div class="formulaire">
                        <input type="button" class="button2" value="90€">
                        <input type="button" class="button2" value="130€">
                        <input type="button" class="button2" value="150€">
                    </div>
                </div>
                <div id="choix2">
                    <a>
                        <h5><strong> donne tous les mois</strong></h5>
                    </a>
                    <div class="formulaire">
                        <input type="button" class="button2" value="20€">
                        <input type="button" class="button2" value="40€">
                        <input type="button" class="button2" value="60€">
                    </div>
                </div>
                <div id="choix3">
                    <a>
                        <h5><strong>Montant libre</strong></h5>
                    </a>
                    <div class="formulaire2">
                        <input type="number" class="form-control" name="montant" placeholder="ex: 15€">
                        <input type="button" class="button2" value="Je valide">
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="text" style="margin-bottom:30px;">2. Mes coordonnées</div>
                <form class="formulaire2" action="traitement.php" method="POST">
                    <input type="email" class="form-control" name="email" placeholder="E-Mail*"><br><br>
                    <select name="civilite">
                        <option value="civilite">Civilité*</option>
                        <option value="madame">Madame</option>
                        <option value="monsieur">Monsieur</option>
                    </select><br><br>
                    <input type="text" class="form-control" name="nom" placeholder="Nom*">
                    <input type="text" class="form-control" name="prenom" placeholder="Prenom*"><br>
                    <input type="text" class="form-control" name="adresse" placeholder="Adresse*">
                    <input type="text" class="form-control" name="complement_adresse"
                        placeholder="Complément d'adresse*"><br>
                    <input type="text" class="form-control" name="code_postal" placeholder="Code postal*">
                    <input type="text" class="form-control" name="ville" placeholder="Ville*"><br>
                    <select name="pays">
                        <option value="france">France</option>
                        <option value="belgique">Belgique</option>
                    </select><br><br>
                    <input type="text" class="form-control" name="telephone" placeholder="Téléphone*"><br><br>
                    <label for="date_de_naissance" style="font-size:1em;"><strong>Date de naissance</strong></label><br>
                    <input type="date" class="form-control" name="date_de_naissance" placeholder="jj/mm/aaaa*"><br><br>
                    <label style="font-size:1em;"><strong>Je souhaite mon reçu fiscal par :*</strong></label><br />
                    <input type="checkbox" name="email" value="email" checked>
                    <label for="email">Par email</label><br />
                    <input type="checkbox" name="courrier" value="courrier">
                    <label for="courrier">Par courrier</label><br />

                    <p style="font-size:0.6em;">
                        <strong> *</strong> : Champs obligatoire(ces informations sont indispensables
                        pour bénéficier de votre réduction fiscale)
                    </p>
                </form>
            </div>
            <div class="box">
                <div class="text">3. Mon règlement</div>
                <div class="formulaire">
                    <img src="images/verrou.png" style="width: 1em;">
                    <span style="font-size:0.7em;"><strong>Plateforme de paiement 100% sécurisée</strong></span>
                </div>
                <!-- Menu accordeon -->
                <main id="accordeon">
                    <section id="carte">
                        <a href="#carte">
                            <h5><strong>Je paie en carte bancaire</strong></h5>
                        </a>
                        <form class="formulaire3" method="POST" action="https://secure.payzen.eu/vads-payment/">
                            <input type="text" class="form-control" name="numeroCarte"
                                placeholder="Saisissez vos numéro de carte bancaire">
                            <input type="date" class="form-control" name="dateExpiration"
                                placeholder="Date d'expiration">
                            <input type="text" class="form-control" name="crypto" placeholder="Cryptogramme"><br>
                            <input type="button" style="margin-bottom: 10px;"class="button3" value="Je valide">
                        </form>
                    </section>
                    <section id="paypal" class="paypal">
                        <a href="#paypal">
                            <h5><strong>payer avec paypal</strong></h5>
                        </a>
                        <a class="formulaire" href="https://www.paypal.com/fr/home">
                            <input type="button" class="button3" value="Je valide">
                        </a>
                    </section>
                    <section id="iban">
                        <a href="#iban">
                            <h5><strong>Je fais un virement grâce a mon IBAN/BIC</strong></h5>
                        </a>
                        <div class="formulaire3">
                            <label for="iban"><strong>Votre numéro IBAN</strong></label><br>
                            <input type="text" class="form-control" name="iban"><br>
                            <label for="iban"><strong>Votre code BIC</strong></label><br>
                            <input type="text" class="form-control" name="bic"><br>
                            <input type="submit" name="submit"class="button3" style="margin-bottom: 20px;" placeholder="je valide">
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </main>

    <!---------------------------------------- FOOTER -------------------------------------->
    <?php include('includes/Footer.php') ?>

    <!---------------------------------------- SCRIPT -------------------------------------->
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>
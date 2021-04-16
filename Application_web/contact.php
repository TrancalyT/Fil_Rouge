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
    <link rel="shortcut icon" href="images/icon-index.png">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="commondocs/commons.css">
    <link rel="stylesheet" href="css/contact.css">
    <title>Contact</title>
</head>
<body>

<!-- MENU HAMBURGER -->

  <?php include('includes/Nav.php'); ?>

<!-- HEADER -->

  <div class="bg"></div>
  <header>
    <div class="content">
      <h1><span>contact</span></h1>
    </div>
  </header>

<!-- FORMULAIRE CONTACT -->

  <div class="form_contact">
    <button onclick="topFunction()" id="myBtn" title="Retour en Haut"></button>
    <form action="" method="post" class="col g-3 justify-content form-info">
      <div class="container-lg">
        <div class="mb-3">
          <div class="row justify-content-end">
            <label for="E-Mail-Contact" class="col-sm col-form-label">E-Mail : </label>
              <div class="col-sm-8">
                <input id="E-Mail-Contact" size="50" maxlength="100" type="mail" placeholder="Veuillez entrer votre adresse e-mail ici ..." name="mailcontact" class="form-control" required>
              </div>
          </div>
        </div>
        <div class="mb-3">
          <div class="row justify-content-end">
            <label for="Sujet" class="col-sm col-form-label">Sujet : </label>
              <div class="col-sm-8">
                <input id="Sujet" size="50" maxlength="100" type="text" placeholder="De quoi souhaitez vous nous parler ?" name="sujet" class="form-control" required>
              </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="Message" class="form-label">Message : </label>
            <div class="input-group">
              <textarea class="form-control" id="Message" rows="8"></textarea>
            </div>
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

<!-- FOOTER -->

  <?php include('includes/Footer.php') ?>

<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
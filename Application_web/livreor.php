<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icon-index.png">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="commondocs/commons.css">
    <link rel="stylesheet" href="css/livreor.css">
    <title>Livre d'or</title>
</head>
<body>

<!-- MENU HAMBURGER -->

  <?php include('includes/Nav.php'); ?>

<!-- HEADER -->

  <div class="bg"></div>
  <header>
    <div class="content">
      <h1><span>Livre d'Or</span></h1>
    </div>
  </header>

<!-- FORMULAIRE LIVRE D'OR -->

  <div class="form_livreor">
    <form action="" method="post" class="col g-3 justify-content form-info">
      <div class="container-lg">
        <div class="mb-3">
          <label for="Message" class="form-label">LAISSEZ NOUS VOTRE AVIS : </label>
          <div class="input-group">
            <textarea class="form-control" id="Message" rows="8"></textarea>
          </div>
          <div class="notif">
            <p class="text">(*) Votre commentaire est soumis à modération avant diffusion</p>
          </div>
          <div class="rating">
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <div class="row justify-content-end">
            <label for="Signature" class="col-sm col-form-label">SIGNATURE : </label>
              <div class="col-sm-8">
                <input id="Signature" size="50" maxlength="100" type="mail" placeholder="Veuillez signer ici ..." name="signature" class="form-control" required>
              </div>
          </div>
        </div>
        <div class="mb-3 text-center">
          <button type="submit" class="buttonmain">Envoyer</button>
        </div>
      </div>
    </form>
  </div>

<!-- FOOTER -->

  <?php include('includes/Footer.php') ?>
      
<!-- SCRIPT -->

  <script type="text/javascript" src="js/script.js"></script>

</body>
</html>
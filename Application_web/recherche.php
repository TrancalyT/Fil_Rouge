<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="images/icon-index.png">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="commondocs/commons.css">
    <link rel="stylesheet" href="css/recherche.css">
    <title>Recherche</title>
</head>
<body>

<!-- MENU HAMBURGER -->

  <?php include('includes/Nav.php'); ?>

<!--HEADER -->

<div class="bg"></div>
<header>
  <div class="content">
    <h1><span>Recherche</span></h1>
  </div>
</header>

<!-- RECHERCHE -->

<div class="page_recherche">
  <nav class="navbar navbar-light">
    <form class="form_recherche container-lg justify-content-around form-info" action="" method="get">
      <div class="container-fluid justify-content-around">
        <div class="row align-items-center">
          <div class="col-2">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle buttonmain2" data-bs-toggle="dropdown" href="#" role="button">Filtres</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Par date</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Par genre</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Par support</a></li>                                            
              </ul>
            </li>
          </div>
          <div class="col-8">
            <input id="Recherche" size="50" maxlength="100" type="text" placeholder="" name="recherche" class="form-control">
          </div>
          <div class="col-2">
            <button type="submit" class="buttonmain">GO</button>
          </div>
        </div>  
      </div>
    </form>
  </nav>
  <div class="container-xl">
    <div class="row align-items-center text-justify">
      <section class="">
        <div class="rechercheback">
          <p class="fs-3">Resultat 1</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas fugiat mollitia quidem, officiis autem temporibus, vitae repellendus ullam ipsum quasi laboriosam, corporis dolor neque eius itaque pariatur assumenda. Aspernatur, culpa.</p>
        </div>
        <div class="rechercheback">
          <p class="fs-3">Resultat 2</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas fugiat mollitia quidem, officiis autem temporibus, vitae repellendus ullam ipsum quasi laboriosam, corporis dolor neque eius itaque pariatur assumenda. Aspernatur, culpa.</p>
        </div>
        <div class="rechercheback">
          <p class="fs-3">Resultat 3</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas fugiat mollitia quidem, officiis autem temporibus, vitae repellendus ullam ipsum quasi laboriosam, corporis dolor neque eius itaque pariatur assumenda. Aspernatur, culpa.</p>
        </div>
        <div class="rechercheback">
          <p class="fs-3">Resultat 4</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas fugiat mollitia quidem, officiis autem temporibus, vitae repellendus ullam ipsum quasi laboriosam, corporis dolor neque eius itaque pariatur assumenda. Aspernatur, culpa.</p>
        </div>
        <div class="rechercheback">
          <p class="fs-3">Resultat 5</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas fugiat mollitia quidem, officiis autem temporibus, vitae repellendus ullam ipsum quasi laboriosam, corporis dolor neque eius itaque pariatur assumenda. Aspernatur, culpa.</p>
        </div>
      </section>
    </div>
    <div class="pagine row align-items-end">
      <nav>
        <ul class="pagination justify-content-center">
          <li class="page-item"><a class="buttonmain4" href="#">Précédent</a></li>
          <li class="page-item"><a class="page-link buttonmain3" href="#">1</a></li>
          <li class="page-item"><a class="page-link buttonmain3" href="#">2</a></li>
          <li class="page-item"><a class="page-link buttonmain3" href="#">3</a></li>
          <li class="page-item"><a class="page-link buttonmain3" href="#">4</a></li>
          <li class="page-item"><a class="page-link buttonmain3" href="#">5</a></li>
          <li class="page-item"><a class=" buttonmain4" href="#">Suivant</a></li>
        </ul>
      </nav>       
    </div>
  </div>
</div>

<!-- FOOTER -->

  <?php include('includes/Footer.php') ?>
          
<!-- SCRIPT -->

  <script type="text/javascript" src="js/script.js"></script>

</body>
</html>
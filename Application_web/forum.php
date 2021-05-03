<!DOCTYPE html>
<html lang="en">

<head>
  <title>Forum</title>
  <link rel="shortcut icon" href="images/icon-index.png">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="commondocs/commons.css">
  <link rel="stylesheet" href="css/forum.css">
</head>

<body>
  <!--------------- MENU BURGER ------------------------------------->
  <?php include('includes/Nav.php'); ?>

  <!-- -------------------------HEADER--------------------------------- -->

  <div class="bg"></div>
  <header>
    <div class="content">
      <h1><span>FORUM</span></h1>
    </div>
  </header>
  <!-------------------------------------CORP--------------------------------------------->
  <div class="contenant">
    <p>Welcome to the forum</p>
    <div class="grid-container">
      <ul>
        <li><a href="forum.php">Acceuil</a></li>
        <li><a href="profil.php">Mon profil</a></li>
        <li><a href="#message1">Mes messages</a></li>
        <li><a href="#forum">Messages du forum</a></li>
      </ul>
      <ul>
        <li><a href="administration.html">Administration du site</a></li>
      </ul>
      <div id="message">
        <div class="overlay2">
          <p class="text2">Messages de Liyah</p>
        </div>

        <div>Where does it come from?<br><br>
          Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
          Latin literature from 45 BC,
          making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
          looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through
          the cites of the word in classical literature,
          discovered the undoubtable source.</div>
        <!-- LikeBtn.com BEGIN -->
        <span class="likebtn-wrapper" data-lang="fr" data-i18n_like="j'aime" data-identifier="item_1" data-i18n_dislike="j'aime pas"></span>
        <script>
          (function(d, e, s) {
            if (d.getElementById("likebtn_wjs")) return;
            a = d.createElement(e);
            m = d.getElementsByTagName(e)[0];
            a.async = 1;
            a.id = "likebtn_wjs";
            a.src = s;
            m.parentNode.insertBefore(a, m)
          })(document, "script", "//w.likebtn.com/js/w/widget.js");
        </script>
        <!-- LikeBtn.com END -->
      </div>
      <div id="message">
        <div class="overlay2">
          <p class="text2">Messages de Piro59</p>
        </div>

        <div>Where does it come from?<br><br>
          Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
          Latin literature from 45 BC,
          making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
          looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through
          the cites of the word in classical literature,
          discovered the undoubtable source.</div>
        <div class="buttonLike">
          <img src="images/JAMEPAS.jpg">
          <img src="images/JAIME.jpg">
        </div>
        <div class="boutons_sujet_right">
          <a class="new_sujett" href="{U_POST_REPLY_TOPIC}" rel="nofollow"><span class="text-rep">Répondre au sujet</span><span class="text-ver">Vérouillé</span></a>
        </div>
      </div>
    </div>
  </div>
  <!---------------------------------------- FOOTER -------------------------------------->
  <?php include('includes/Footer.php') ?>

  <!---------------------------------------- SCRIPT -------------------------------------->
  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>
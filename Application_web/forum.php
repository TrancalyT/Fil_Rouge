<?php require_once('VIEW/view_header.php'); ?>
<?php require_once('VIEW/view_footer.php'); ?>
<?php callHeader("Forum", "css/forum.css"); ?>

<!-- HEADER -->
<?php callMainTitle("Forum") ?>
<!-------------------------------------CORP--------------------------------------------->
<div class="contenant">
  <p>Welcome to the forum</p>
  <select id="sujet-select" style="margin-left: 5px;">
    <option value="">--Les sujets--</option>

  </select>
  <div class="grid-container">
    <ul>
      <!-- <li><a href="forum.php">Acceuil</a></li> -->
      <li><a href="profil.php">Mon profil</a></li>
      <li><a href="#">Mes messages</a></li>

    </ul>
    <ul>
      <!-- <li><a href="administration.html">Administration du site</a></li> -->
    </ul>
    <div id="message">
      <div class="overlay2">
        <p class="text2"></p>
      </div>

      <div>

      </div>

    </div>
    <div id="message">
      <div class="overlay2">
        <p class="text2"></p>
      </div>

      <div>

      </div>

    </div>
  </div>
</div>
<!---------------------------------------- FOOTER -------------------------------------->

<?php callFooter(); ?>

<!---------------------------------------- SCRIPT -------------------------------------->
<script type="text/javascript" src="js/script.js"></script>
</body>

</html>
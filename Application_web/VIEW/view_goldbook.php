<?php

function callGoldBookConnected($name, $lastname, $avis, $messageGb, $error, $errorGet)
{
?>

<div class="form_livreor">
    <form action="livreor.php" method="post" class="col g-3 justify-content form-info">
      <div class="container-lg">
        <div class="<?=$error?><?=$errorGet?>">
          <p>
            <?php echo @$_GET['messageError'] ?>
            <?php echo $messageGb["messageError"] ?>
          </p>
          </div>
      <span class="fs-6 fst-italic text-danger"></span>
      <span class="fs-6 fst-italic text-danger"></span>
      <span class="fs-6 fst-italic text-success"></span>
        <div class="mb-3">
          <label for="Message" class="form-label">LAISSEZ NOUS VOTRE AVIS : </label>
          <div class="input-group">
            <textarea class="form-control" id="Message" name="avis" rows="8" required><?php echo $avis ?></textarea>
          </div>
          <div class="notif">
            <p class="text">(*) Votre commentaire est soumis à modération avant diffusion</p>
          </div>
          <div class="rating">
            <div class="stars">
                <input name="5stars" id="5star" class = "star" type="radio"></a><label for="5star">★</label>
                <input name="4stars" id="4star" class = "star" type="radio"></a><label for="4star">★</label>
                <input name="3stars" id="3star" class = "star" type="radio"></a><label for="3star">★</label>
                <input name="2stars" id="2star" class = "star" type="radio"></a><label for="2star">★</label>
                <input name="1stars" id="1star" class = "star" type="radio"></a><label for="1star">★</label>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <div class="row justify-content-start">
              <div class="col-sm-8">
                <p class="signature"> Signé, <?php echo $lastname. " " .$name ?> </p>
              </div>
          </div>
        </div>
        <div class="mb-3 text-center">
          <button type="submit" class="buttonmain" name="valider" value="valider">Envoyer</button>
        </div>
      </div>
    </form>
  </div>

<?php
}

function callGoldBookUnconnected()
{
?>

<div class="form_livreor">
    <p class="text-center login">Vous souhaitez nous laisser un message ?</p> 
    <p class ="text-center"><i style="font-size: 1em; color: tomato;"class="fas fa-smile"></i> </p>
    <div class="mb-3 text-center">
      <a href="connexion.php"><button type="button" class="buttonmain">Inscrivez-vous</button></a>
    </div>
</div>

<?php
}

function callGoldBookRated($success)
{
?>

<div class="form_livreor">
    <div class="<?=$success?>">
      <p>
        <?php echo @$_GET['messageSuccess'] ?>          
      </p>
    </div>
    <p class="text-center login">Merci pour votre message <?php echo $_SESSION['user_nickname'] ?>, nous éspérons vous satisfaire au maximum ! Si vous souhaitez nous faire part d'autres choses n'hésitez pas à nous contacter. Pour ce faire, rien de plus simple, cliquez sur le petit bouton juste sous ce petit bonhomme souriant !</p> 
    <p class ="text-center"><i style="font-size: 1em; color: tomato;"class="fas fa-smile"></i> </p>
    <div class="mb-3 text-center">
      <a href="contact.php"><button type="button" class="buttonmain">Oui, ici !</button></a>
    </div>
</div>

<?php
}

?>
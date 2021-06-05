<?php

function callGoldBookConnected($name, $lastname, $avis, $messageGb, $error, $errorGet)
{
?>

<div class="form_livreor">
    <form action="livreor.php?#Event" method="post" class="col g-3 justify-content form-info">
      <div class="container-lg">
        <div class="<?=$error?><?=$errorGet?>" id="Event">
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
                <input type="radio" id="star5" name="rated" value="5" /><label for="star5" title="Rocks!">★</label>
                <input type="radio" id="star4" name="rated" value="4" /><label for="star4" title="Pretty good">★</label>
                <input type="radio" id="star3" name="rated" value="3" /><label for="star3" title="Meh">★</label>
                <input type="radio" id="star2" name="rated" value="2" /><label for="star2" title="Kinda bad">★</label>
                <input type="radio" id="star1" name="rated" value="1" /><label for="star1" title="Sucks big time">★</label>
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

function callGoldBookRated($success, $list)
{
?>

<div class="form_livreor">
    <div class="<?=$success?>" id="Event">
      <p>
        <?php echo @$_GET['messageSuccess'] ?>          
      </p>
    </div>
    <p class="text-center login">Merci pour votre message <?php echo $_SESSION['user_nickname'] ?>, nous espérons vous satisfaire au maximum ! Si vous souhaitez nous faire part d'autres choses n'hésitez pas à nous contacter. Pour ce faire, rien de plus simple, cliquez sur le petit bouton juste sous ce petit bonhomme souriant !</p> 
    <p class ="text-center"><i style="font-size: 1em; color: tomato;"class="fas fa-smile"></i> </p>
    <div class="mb-3 text-center">
      <a href="contact.php"><button type="button" class="buttonmain">Oui, ici !</button></a>
   </div>
      <h2 class ="text-center fst-italic messages animation-text ">Eux aussi se sont exprimés ... </h2>
      <p class ="text-center messages"><i style="font-size: 5em; color: tomato;" class="fas fa-hand-point-down"></i></p>
    <div class="d-flex justify-content-center">
        <table class="table table-hover table-stripped table-borderless" style="text-transform :none">
      
        <?php
        foreach ($list as $value)
        {
          $list["TEXT"] = $value->getTEXT();
          $list["STARS"] = $value->getSTARS();
          $list["NAME"] = $value->getUSER_ID()->getNAME();
          $list["LASTNAME"] = $value->getUSER_ID()->getLASTNAME();
      
          if ($list["STARS"] == 1){
            $list["STARS"] = "★";
          } else if ($list["STARS"] == 2){
            $list["STARS"] = "★★";
          } else if ($list["STARS"] == 3){
            $list["STARS"] = "★★★";
          } else if ($list["STARS"] == 4){
            $list["STARS"] = "★★★★";
          } else if ($list["STARS"] == 5){
            $list["STARS"] = "★★★★★";
          }
        ?>
          <tr>
          <td><?= $list["LASTNAME"]. " " .$list["NAME"] ?></td>
          <td class="fst-italic">"<?= $list["TEXT"] ?>"</td>
          <td style="color: tomato; text-align: center;"><?= $list["STARS"] ?></td>
          </tr>
        <?php
          }
        ?>
      </table>
    </div>
</div>

<?php
}

?>

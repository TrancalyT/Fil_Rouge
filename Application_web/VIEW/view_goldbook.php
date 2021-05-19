<?php

function callGoldBookConnected($id)
{
?>

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
                <input id="Signature" size="50" maxlength="100" type="text" placeholder="Veuillez signer ici ..." name="signature" class="form-control" value="<?php echo $id ?>" required>
              </div>
          </div>
        </div>
        <div class="mb-3 text-center">
          <button type="submit" class="buttonmain">Envoyer</button>
        </div>
      </div>
    </form>
  </div>

<?php
}

function callGoldBookUnonnected()
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

?>
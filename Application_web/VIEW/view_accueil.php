<?php

function callGoldbook($gbDisplay)
{
?>

<section class="goldenbook">
    <section class="titleGoldenbook">
      <h2 class="effect-shine">Dans notre livre d'Or</h2>
    </section>
    <div class="carrousel">
      <p class="item-1"> <?php echo $gbDisplay["TEXT1"]?>
        <span class="author">
          <img src="<?php echo $gbDisplay["AVATAR1"]?>">
          <?php echo $gbDisplay["LASTNAME1"]. " " .$gbDisplay["NAME1"] ?> </br> <?php echo $gbDisplay["STARS1"]?>
        </span>
      </p>
      <p class="item-2"><?php echo $gbDisplay["TEXT2"] ?>
        <span class="author">
          <img src="<?php echo $gbDisplay["AVATAR2"]?>">
          <?php echo $gbDisplay["LASTNAME2"]. " " .$gbDisplay["NAME2"] ?> </br> <?php echo $gbDisplay["STARS2"]?>
        </span>
      </p>
      <p class="item-3"><?php echo $gbDisplay["TEXT3"] ?>
        <span class="author">
          <img src="<?php echo $gbDisplay["AVATAR3"]?>">
          <?php echo $gbDisplay["LASTNAME3"]. " " .$gbDisplay["NAME3"] ?> </br> <?php echo $gbDisplay["STARS3"]?>
        </span>
      </p>
    </div>
  </section>

<?php
}



?>
<?php

function callProfil($goldbook)
{
?>

<div class="contenant">
        <section class="info border bg-light">
        <h4>Infos</h4>
        <div class="col-12">
            <div class="clearfix row align-items-center justify-content-center">
                <div class="col-3">
                    <img class="img-thumbnail border-radius" src="<?= ($_SESSION['user_avatar']) ?>">
                </div>
                <div class="col-9">
                    <p class="fw-bold fst-italic">Pseudonyme : <span class="fw-normal fst-normal"><?= ($_SESSION['user_nickname']) ?></span></p>
                    <p class="fw-bold fst-italic">Nom : <span class="fw-normal fst-normal"><?= ($_SESSION['user_name']) ?></span></p>
                    <p class="fw-bold fst-italic">Prénom : <span class="fw-normal fst-normal"><?= ($_SESSION['user_lastname']) ?></span></p>
                    <p class="fw-bold fst-italic">E-Mail : <span class="fw-normal fst-normal"><?= ($_SESSION['user_mail']) ?></span></p>      
                </div>
                <span class="badge bg-dark text-wrap text-uppercase w-50">Changer mon mot de passe</span>
            </div>
        </div>
        </section>
        <section class="bio border bg-light">
        <h4>Bio</h4>
        <div class="col-12">
            <div class="clearfix row align-items-center justify-content-center">
                <p class="fw-bold fst-italic">A propos de moi ...</p>
                <span class="fst-italic">" <?= ($_SESSION['user_bio']) ?> "</span>
                <?php
                if ($goldbook == NULL){
                ?>
                    <p class="fw-bold fst-italic">Mon commentaire dans le livre d'or ...</p>
                    <span>N'hésitez pas à nous faire part de <a href="livreor.php" class="text-decoration-none" style="color:tomato"> votre avis</a> sur le Pocket Museum of Pop Culture !</span>
                <?php    
                } else {
                ?>
                    <p class="fw-bold fst-italic">Mon commentaire dans le livre d'or ...</p>
                    <span class="fst-italic">" <?php echo $goldbook ?> "</span>
                <?php
                }
                ?>
            </div>
        </div>
        </section>
        <section class="adress border bg-light">
        <h4>Coordonnées</h4>
        <div class="col-12">
            <div class="clearfix">
                <p class="fw-bold fst-italic">Adresse : <span class="fw-normal fst-normal"><?= ($_SESSION['user_adress']) ?></span></p>
                <p class="fw-bold fst-italic">Ville : <span class="fw-normal fst-normal"><?= ($_SESSION['user_city']) ?></span></p>
                <p class="fw-bold fst-italic">Code postale : <span class="fw-normal fst-normal"><?= ($_SESSION['user_cp']) ?></span></p>
                <p class="fw-bold fst-italic">Téléphone : <span class="fw-normal fst-normal"><?= ($_SESSION['user_tel']) ?></span></p>
            </div>
            </br>
            <p class="fs-6 fw-light fst-italic">Tes informations sont en sécurité ici, aucune d'entre elles ne sera partagées à des fins commerciales ou scrupuleuses. Personne d'autres que toi peut y avoir accès. Elles sont ici pour faciliter la navigation dans l'espace <a href="boutique.php" class="text-decoration-none" style="color:tomato">boutique</a> et <a href="donation.php" class="text-decoration-none" style="color:tomato">donation</a>, ni plus ni moins.</p>
        </div>
        </section>
        <section class="hobbies border bg-light">
        <h4>Hobbies</h4>
        <div class="col-12">
            <div class="clearfix">
                <p class="fw-bold fst-italic">Mon film favori : <span class="fw-normal fst-normal"><?= ($_SESSION['user_movie']) ?> </span></p> 
                <p class="fw-bold fst-italic">Mon livre favori : <span class="fw-normal fst-normal"><?= ($_SESSION['user_book']) ?> </span></p> 
                <p class="fw-bold fst-italic">Mon groupe/artiste favori : <span class="fw-normal fst-normal"><?= ($_SESSION['user_music']) ?> </span></p> 
                <p class="fw-bold fst-italic">Mon sport favori : <span class="fw-normal fst-normal"><?= ($_SESSION['user_sport']) ?> </span></p> 
                <p class="fw-bold fst-italic">Mon JV favori : <span class="fw-normal fst-normal"><?= ($_SESSION['user_vg']) ?> </span></p> 
            </div>
        </div>
        </section>
    </div>

<?php
}

?>
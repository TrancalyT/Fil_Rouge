<?php
require_once(__DIR__ . '/VIEW/view_header_bootstrap.php');
require_once(__DIR__ . '/VIEW/view_footer.php');


// HEADER
callHeader($_SESSION['user_nickname'], "css/profil.css");
callMainTitle($_SESSION['user_nickname']) ?>

<div class="contenant">
    <section class="info">
        <h4>Infos</h4>
        <div class="col-12">
            <div class="clearfix border bg-light">
                <img class="img-thumbnail rounded float-start w-25 h-25" src="<?= ($_SESSION['user_avatar']) ?>">
                <p>Pseudonyme : <?= ($_SESSION['user_nickname']) ?></p>
                <p>Nom : <?= ($_SESSION['user_name']) ?></p>
                <p>Prénom : <?= ($_SESSION['user_lastname']) ?></p>
                <p>E-Mail : <?= ($_SESSION['user_mail']) ?></p>
                Changer mon mot de passe ...
            </div>
        </div>
    </section>
    <section class="bio">
        <h4>Bio</h4>
        <div class="col-12">
            <div class="clearfix border bg-light">
                <p>A propose de moi : <?= ($_SESSION['user_bio']) ?></p>
                <p>Mon commentaire dans le livre d'or : </p>
            </div>
        </div>
    </section>
    <section class="adress">
        <h4>Coordoonées</h4>
        <div class="col-12">
            <div class="clearfix border bg-light">
                <p>Adresse : <?= ($_SESSION['user_adress']) ?> </p>
                <p>Ville : <?= ($_SESSION['user_city']) ?> </p>
                <p>Code Postale : <?= ($_SESSION['user_cp']) ?> </p>
                <p>Téléphone : <?= ($_SESSION['user_tel']) ?> </p>
            </div>
        </div>
    </section>
    <section class="hobbies">
        <h4>Hobbies</h4>
        <div class="col-12">
            <div class="clearfix border bg-light">
                <p>Mon sport favori : <?= ($_SESSION['user_sport']) ?> </p>
                <p>Mon film favori : <?= ($_SESSION['user_movie']) ?> </p>
                <p>Mon JV favori : <?= ($_SESSION['user_vg']) ?> </p>
                <p>Mon groupe/artiste favori : <?= ($_SESSION['user_music']) ?> </p>
                <p>Mon livre favori : <?= ($_SESSION['user_book']) ?> </p>
            </div>
        </div>
    </section>
</div>

<!-- FOOTER -->
<?php callFooter(); ?>
<?php

function callProfil($goldbook)
{
?>
<form action="profil.php" method="get">
    <div class="contenant">
            <section class="info border bg-light">
            <h4>Infos</h4>
            <div class="col-12">
                <div class="clearfix row align-items-center justify-content-center">
                    <div class="col-3">
                        <img class="img-thumbnail" src="<?= ($_SESSION['user_avatar']) ?>">
                    </div>
                    <div class="col-9">
                        <p class="fw-bold fst-italic">Pseudonyme : <span class="fw-normal fst-normal nickname"><?= ($_SESSION['user_nickname']) ?></span></p>
                        <p class="fw-bold fst-italic">Nom : <span class="fw-normal fst-normal name"><?= ($_SESSION['user_name']) ?></span></p>
                        <p class="fw-bold fst-italic">Prénom : <span class="fw-normal fst-normal lastname"><?= ($_SESSION['user_lastname']) ?></span></p>
                        <p class="fw-bold fst-italic">E-Mail : <span class="fw-normal fst-normal mail"><?= ($_SESSION['user_mail']) ?></span></p>      
                    </div>
                    <span class="badge bg-dark text-wrap text-uppercase w-50 password"><a href="contact.php" class="text-decoration-none" style="color:white">Un problème avec votre mot de passe ?</a></span>
                </div>
            </div>
            </section>
            <section class="bio border bg-light">
            <h4>Bio</h4>
            <div class="col-12">
                <div class="clearfix row align-items-center justify-content-center">
                    <p class="fw-bold fst-italic">A propos de moi ...</p>
                    <span class="fst-italic bio">" <?= ($_SESSION['user_bio']) ?> "</span>
                    <?php
                    if ($goldbook == NULL){
                    ?>
                        <p class="fw-bold fst-italic">Mon commentaire dans le livre d'or ...</p>
                        <span>N'hésitez pas à nous faire part de <a href="livreor.php" class="text-decoration-none" style="color:tomato"> votre avis</a> sur le Pocket Museum of Pop Culture !</span>
                    <?php    
                    } else {
                    ?>
                        <p class="fw-bold fst-italic">Mon commentaire dans le livre d'or ...</p>
                        <span class="fst-italic gb">" <?php echo $goldbook ?> "</span>
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
                    <p class="fw-bold fst-italic">Adresse : <span class="fw-normal fst-normal adress"><?= ($_SESSION['user_adress']) ?></span></p>
                    <p class="fw-bold fst-italic">Ville : <span class="fw-normal fst-normal city"><?= ($_SESSION['user_city']) ?></span></p>
                    <p class="fw-bold fst-italic">Code postale : <span class="fw-normal fst-normal cp"><?= ($_SESSION['user_cp']) ?></span></p>
                    <p class="fw-bold fst-italic">Téléphone : <span class="fw-normal fst-normal tel"><?= ($_SESSION['user_tel']) ?></span></p>
                </div>
                </br>
                <p class="fs-6 fw-light fst-italic notif">Tes informations sont en sécurité ici, aucune d'entre elles ne sera partagées à des fins commerciales ou scrupuleuses. Personne d'autres que toi peut y avoir accès. Elles sont ici pour faciliter la navigation dans l'espace <a href="boutique.php" class="text-decoration-none" style="color:tomato">boutique</a> et <a href="donation.php" class="text-decoration-none" style="color:tomato">donation</a>, ni plus ni moins.</p>
            </div>
            </section>
            <section class="hobbies border bg-light">
            <h4>Hobbies</h4>
            <div class="col-12">
                <div class="clearfix">
                    <p class="fw-bold fst-italic">Mon film favori : <span class="fw-normal fst-normal movie"><?= ($_SESSION['user_movie']) ?> </span></p> 
                    <p class="fw-bold fst-italic">Mon livre favori : <span class="fw-normal fst-normal book"><?= ($_SESSION['user_book']) ?> </span></p> 
                    <p class="fw-bold fst-italic">Mon groupe/artiste favori : <span class="fw-normal fst-normal music"><?= ($_SESSION['user_music']) ?> </span></p> 
                    <p class="fw-bold fst-italic">Mon sport favori : <span class="fw-normal fst-normal sport"><?= ($_SESSION['user_sport']) ?> </span></p> 
                    <p class="fw-bold fst-italic">Mon JV favori : <span class="fw-normal fst-normal vg"><?= ($_SESSION['user_vg']) ?> </span></p> 
                </div>
            </div>
            </section>
            <section class="modif">
                <button type="submit" class="buttonmain" name="modifprofil" value="modifprofil">Modifier mon profil</button>
            </section>  
    </div>
</form> 
<?php
}

function callProfilModif($goldbook)
{
?>
<form action="connexion.php" method="get" enctype="multipart/form-data">
    <div class="contenant">
        <section class="info border bg-light">
            <h4>Infos</h4>
            <div class="col-12">
                <div class="clearfix row align-items-center justify-content-center">
                    <div class="col-3">
                        <img class="img-thumbnail" id="preview" src="<?= ($_SESSION['user_avatar']) ?>">
                        <label for="file" class="label-file badge bg-dark text-wrap text-uppercase">Changer votre avatar</label>
                        <input type="file" class="input-file" name="avatar" id="file" accept=".png, .jpg, .jpeg">
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <p class="fw-bold fst-italic">Pseudonyme : </p>
                        </div>
                        <div class="col-6">
                            <input size="30" maxlength="100" type="text" name="nickname" value="<?php echo $_SESSION['user_nickname'] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <p class="fw-bold fst-italic">Nom : </p>
                        </div>
                        <div class="col-6">
                            <input size="30" maxlength="100" type="text" name="name" value="<?php echo $_SESSION['user_name'] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <p class="fw-bold fst-italic">Prénom : </p>
                        </div>
                        <div class="col-6">
                            <input size="30" maxlength="100" type="text" name="lastname" value="<?php echo $_SESSION['user_lastname'] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <p class="fw-bold fst-italic">E-Mail : </p>
                        </div>
                        <div class="col-6">
                            <input size="30" maxlength="100" type="mail" name="mail" value="<?php echo $_SESSION['user_mail'] ?>">
                        </div>
                    </div>         
                </div>
            </div>
            </section>
            <section class="bio border bg-light">
            <h4>Bio</h4>
            <div class="col-12">
                <div class="clearfix row align-items-center justify-content-center">
                    <p class="fw-bold fst-italic">A propos de moi ...</p>
                    <textarea name="bio" rows="10"><?= ($_SESSION['user_bio']) ?></textarea>
                </div>
            </div>
            </section>
            <section class="adress border bg-light">
            <h4>Coordonnées</h4>
            <div class="col-12">
                <div class="clearfix row align-items-center justify-content-center">
                    <div class="row">
                        <div class="col-4">
                            <p class="fw-bold fst-italic">Adresse : </p>
                        </div>
                        <div class="col-6">
                            <input size="40" maxlength="100" type="text" name="adress" value="<?php echo $_SESSION['user_adress'] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p class="fw-bold fst-italic">Ville : </p>
                        </div>
                        <div class="col-6">
                            <input size="40" maxlength="100" type="text" name="city" value="<?php echo $_SESSION['user_city']?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p class="fw-bold fst-italic">Code postale : </p>
                        </div>
                        <div class="col-6">
                            <input size="40" maxlength="100" type="text" name="cp" value="<?php echo $_SESSION['user_cp'] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p class="fw-bold fst-italic">Téléphone : </p>
                        </div>
                        <div class="col-6">
                            <input size="40" maxlength="100" type="mail" name="tel" value="<?php echo $_SESSION['user_tel'] ?>">
                        </div>
                    </div>
                </div>
                </br>
                <p class="fs-6 fw-light fst-italic notif">Tes informations sont en sécurité ici, aucune d'entre elles ne sera partagées à des fins commerciales ou scrupuleuses. Personne d'autres que toi peut y avoir accès. Elles sont ici pour faciliter la navigation dans l'espace <a href="boutique.php" class="text-decoration-none" style="color:tomato">boutique</a> et <a href="donation.php" class="text-decoration-none" style="color:tomato">donation</a>, ni plus ni moins.</p>
            </div>
            </section>
            <section class="hobbies border bg-light">
            <h4>Hobbies</h4>
            <div class="col-12">
                <div class="clearfix row align-items-center justify-content-center">
                    <div class="row">
                        <div class="col-4">
                            <p class="fw-bold fst-italic">Mon film favori : </p> 
                        </div>
                        <div class="col-6">
                            <input size="40" maxlength="100" type="text" name="movie" value="<?php echo $_SESSION['user_movie'] ?>">
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-4">
                            <p class="fw-bold fst-italic">Mon livre favori : </p> 
                        </div>
                        <div class="col-6">
                            <input size="40" maxlength="100" type="text" name="book" value="<?php echo $_SESSION['user_book']?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p class="fw-bold fst-italic">Mon groupe/artiste favori : </p> 
                        </div>
                        <div class="col-6">
                            <input size="40" maxlength="100" type="text" name="music" value="<?php echo $_SESSION['user_music'] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p class="fw-bold fst-italic">Mon sport favori : </p> 
                        </div>
                        <div class="col-6">
                            <input size="40" maxlength="100" type="mail" name="sport" value="<?php echo $_SESSION['user_sport'] ?>"> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p class="fw-bold fst-italic">Mon JV favori : </p> 
                        </div>
                        <div class="col-6">
                            <input size="40" maxlength="100" type="mail" name="vg" value="<?php echo $_SESSION['user_vg'] ?>">
                        </div>
                    </div>
                </div>
            </div>
            </section>
                <section class="modif">
                    <button type="submit" class="buttonmain" name="sendmodif" value="sendmodif">Envoyer</button>
                    <button type="submit" class="buttonmain2" name="backprofil" value="backprofil">Retour</button>
                </section> 
    </div>
</form>
<?php
}

?>
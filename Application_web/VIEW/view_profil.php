<?php

function callProfil($goldbook, $nickname, $name, $lastname, $mail, $adress, $city, $cp, $tel, $bio, $avatar, $movie, $book, $music, $sport, $vg)
{
?>
<form action="profil.php" method="get">
    <div class="contenant">
            <section class="info border bg-light">
            <h4>Infos</h4>
            <div class="col-12">
                <div class="clearfix row align-items-center justify-content-center">
                    <div class="col-3">
                        <img class="img-thumbnail" src="<?= $avatar ?>">
                    </div>
                    <div class="col-9">
                        <p class="fw-bold fst-italic">Pseudonyme : <span class="fw-normal fst-normal nickname"><?= $nickname ?></span></p>
                        <p class="fw-bold fst-italic">Nom : <span class="fw-normal fst-normal name"><?= $name ?></span></p>
                        <p class="fw-bold fst-italic">Prénom : <span class="fw-normal fst-normal lastname"><?= $lastname ?></span></p>
                        <p class="fw-bold fst-italic">E-Mail : <span class="fw-normal fst-normal mail"><?= $mail ?></span></p>      
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
                    <span class="fst-italic bio">" <?= $bio ?> "</span>
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
                    <p class="fw-bold fst-italic">Adresse : <span class="fw-normal fst-normal adress"><?= $adress ?></span></p>
                    <p class="fw-bold fst-italic">Ville : <span class="fw-normal fst-normal city"><?= $city ?></span></p>
                    <p class="fw-bold fst-italic">Code postale : <span class="fw-normal fst-normal cp"><?= $cp ?></span></p>
                    <p class="fw-bold fst-italic">Téléphone : <span class="fw-normal fst-normal tel"><?= $tel ?></span></p>
                </div>
                </br>
                <p class="fs-6 fw-light fst-italic notif">Tes informations sont en sécurité ici, aucune d'entre elles ne sera partagées à des fins commerciales ou scrupuleuses. Personne d'autres que toi peut y avoir accès. Elles sont ici pour faciliter la navigation dans l'espace <a href="boutique.php" class="text-decoration-none" style="color:tomato">boutique</a> et <a href="donation.php" class="text-decoration-none" style="color:tomato">donation</a>, ni plus ni moins.</p>
            </div>
            </section>
            <section class="hobbies border bg-light">
            <h4>Hobbies</h4>
            <div class="col-12">
                <div class="clearfix">
                    <p class="fw-bold fst-italic">Mon film favori : <span class="fw-normal fst-normal movie"><?= $movie ?> </span></p> 
                    <p class="fw-bold fst-italic">Mon livre favori : <span class="fw-normal fst-normal book"><?= $book ?> </span></p> 
                    <p class="fw-bold fst-italic">Mon groupe/artiste favori : <span class="fw-normal fst-normal music"><?= $music ?> </span></p> 
                    <p class="fw-bold fst-italic">Mon sport favori : <span class="fw-normal fst-normal sport"><?= $sport ?> </span></p> 
                    <p class="fw-bold fst-italic">Mon JV favori : <span class="fw-normal fst-normal vg"><?= $vg ?> </span></p> 
                </div>
            </div>
            </section>
            <section class="modif">
                <button type="submit" class="buttonmain" name="modifprofil" value="modifprofil" id="Modif">Modifier mon profil</button>
            </section>  
    </div>
</form> 
<?php
}

function callProfilModif($nickname, $name, $lastname, $mail, $adress, $city, $cp, $tel, $bio, $avatar, $movie, $book, $music, $sport, $vg)
{
?>
<form action="profil.php" method="post" enctype="multipart/form-data">
    <div class="contenant">
        <section class="info border bg-light" id="Focus">
            <h4>Infos</h4>
            <div class="col-12">
                <div class="clearfix row align-items-center justify-content-center">
                    <div class="col-3">
                        <img class="img-thumbnail" id="preview" src="<?= $avatar ?>">
                        <label for="file" class="label-file badge bg-dark text-wrap text-uppercase">Changer votre avatar</label>
                        <input type="file" class="input-file" name="avatar" id="file" accept=".png, .jpg, .jpeg">
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <p class="fw-bold fst-italic">Pseudonyme : </p>
                        </div>
                        <div class="col-6">
                            <input size="30" maxlength="100" type="text" name="nickname" value="<?php echo $nickname ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <p class="fw-bold fst-italic">Nom : </p>
                        </div>
                        <div class="col-6">
                            <input size="30" maxlength="100" type="text" name="name" value="<?php echo $name ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <p class="fw-bold fst-italic">Prénom : </p>
                        </div>
                        <div class="col-6">
                            <input size="30" maxlength="100" type="text" name="lastname" value="<?php echo $lastname ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <p class="fw-bold fst-italic">E-Mail : </p>
                        </div>
                        <div class="col-6">
                            <input size="30" maxlength="100" type="mail" name="mail" value="<?php echo $mail ?>">
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
                    <textarea name="bio" rows="10"><?= $bio ?></textarea>
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
                            <input size="40" maxlength="100" type="text" name="adress" value="<?php echo $adress?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p class="fw-bold fst-italic">Ville : </p>
                        </div>
                        <div class="col-6">
                            <input size="40" maxlength="100" type="text" name="city" value="<?php echo $city?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p class="fw-bold fst-italic">Code postale : </p>
                        </div>
                        <div class="col-6">
                            <input size="40" maxlength="100" type="text" name="cp" value="<?php echo $cp ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p class="fw-bold fst-italic">Téléphone : </p>
                        </div>
                        <div class="col-6">
                            <input size="40" maxlength="100" type="mail" name="tel" value="<?php echo $tel ?>">
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
                            <input size="40" maxlength="100" type="text" name="movie" value="<?php echo $movie ?>">
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-4">
                            <p class="fw-bold fst-italic">Mon livre favori : </p> 
                        </div>
                        <div class="col-6">
                            <input size="40" maxlength="100" type="text" name="book" value="<?php echo $book ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p class="fw-bold fst-italic">Mon groupe/artiste favori : </p> 
                        </div>
                        <div class="col-6">
                            <input size="40" maxlength="100" type="text" name="music" value="<?php echo $music ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p class="fw-bold fst-italic">Mon sport favori : </p> 
                        </div>
                        <div class="col-6">
                            <input size="40" maxlength="100" type="mail" name="sport" value="<?php echo $sport ?>"> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p class="fw-bold fst-italic">Mon JV favori : </p> 
                        </div>
                        <div class="col-6">
                            <input size="40" maxlength="100" type="mail" name="vg" value="<?php echo $vg ?>">
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
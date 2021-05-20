<?php require_once('VIEW/view_header_bootstrap.php'); ?>
<?php require_once('VIEW/view_footer.php'); ?>
<?php callHeader("Accueil", "css/contact.css"); ?>

<!-- MENU HAMBURGER -->

<?php include('includes/Nav.php'); ?>
<?php include('functions/secure.php'); ?>

<!-- HEADER -->

<?php callMainTitle("Contact") ?>

<!-- FORMULAIRE CONTACT -->

<div class="form_contact">
  <form action="controller/contact_process.php" method="POST" class="col g-3 justify-content form-info">
    <div class="container-lg">
      <div class="mb-3">
        <div class="row justify-content-end">
          <label for="E-Mail-Contact" class="col-sm col-form-label">E-Mail : </label>
          <div class="col-sm-8">
            <input id="E-Mail-Contact" size="50" maxlength="100" type="mail" placeholder="Veuillez entrer votre adresse e-mail ici ..." name="mailcontact" class="form-control" required>
          </div>
        </div>
      </div>
      <div class="mb-3">
        <div class="row justify-content-end">
          <label for="Sujet" class="col-sm col-form-label">Sujet : </label>
          <div class="col-sm-8">
            <input id="Sujet" size="50" maxlength="100" type="text" placeholder="De quoi souhaitez vous nous parler ?" name="sujet" class="form-control" required>
          </div>
        </div>
      </div>
      <div class="mb-3">
        <label for="Message" class="form-label">Message : </label>
        <div class="input-group">
          <textarea class="form-control" id="Message" name="message" rows="8"></textarea>
        </div>
      </div>
      <div class="mb-3">
        <div class="g-recaptcha row justify-content-center" data-sitekey="your_site_key"></div>
      </div>
      <div class="mb-3 text-center">
        <button type="submit" name="envoyer" class="buttonmain">Envoyer</button>
      </div>
    </div>
    <?php if (@$success) : ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert"><button type=" button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button><?= $success ?>
      </div>
    <?php endif ?>
    <?php if (@$error) : ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert"><button type=" button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button><?= $error ?>
      </div>
    <?php endif ?>
  </form>

</div>

<!-- FOOTER -->
<?php callFooter(); ?>
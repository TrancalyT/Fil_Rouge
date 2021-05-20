<?php session_start(); ?>

<?php require_once('VIEW/view_header.php'); ?>
<?php require_once('VIEW/view_footer.php'); ?>
<?php callHeader("Accueil", "css/index.css"); ?>

<!-- HEADER -->

<?php callMainTitle("Pocket Museum of Pop Culture") ?>

<!-- CORPS -->

<main class="grid-container">
  <section class="About">
    <section class="titleAbout">
      <h2>C'est quoi ce musée ?!</h2>
    </section>
    <section class="bodyAbout">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas fugiat mollitia quidem, officiis autem temporibus, vitae repellendus ullam ipsum quasi laboriosam, corporis dolor neque eius itaque pariatur assumenda. Aspernatur, culpa.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas fugiat mollitia quidem, officiis autem temporibus, vitae repellendus ullam ipsum quasi laboriosam, corporis dolor neque eius itaque pariatur assumenda. Aspernatur, culpa.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas fugiat mollitia quidem, officiis autem temporibus, vitae repellendus ullam ipsum quasi laboriosam, corporis dolor neque eius itaque pariatur assumenda. Aspernatur, culpa.
      </p>
    </section>
  </section>

  <section class="Evenements">
    <a href="evenements.php" class="button2">évenements à venir</a>


  </section>

  <section class="Expos">
    <section class="titleExpos">
      <h2>Retrouvez nos expos en cours</h2>
    </section>
    <!-- Les photos doivent être redim au même format, idéalement 1300*1200 -->
    <section class="bodyExpos">
      <div class="gallery">
        <a href="vehiculespop.php"><img src="images/vehiculesBG2.jpg">Les véhicules à travers la Pop Culture</a>
        <a href="#"><img src="https://source.unsplash.com/1300x1200/?lebanon"></a>
        <a href="#"><img src="https://source.unsplash.com/1300x1200/?qatar"></a>
      </div>
    </section>
  </section>

  <section class="News">
    <section class="titleNews">
      <h2>Quoi de neuf doc ?</h2>
    </section>
    <section class="Events">
      <div class="postit">
        <h3>La Mazette !</h3>
        <p>Click here to sign up for updates!</p>
      </div>
      <div class="postit">
        <h3>La Mazette contre-attaque !</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas fugiat mollitia quidem, officiis autem temporibus, vitae repellendus ullam ipsum quasi laboriosam, corporis dolor neque eius itaque pariatur assumenda. Aspernatur, culpa.</p>
      </div>
      <div class="postit">
        <h3>Le retour de Mazette !</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas fugiat mollitia quidem, officiis autem temporibus, vitae repellendus ullam ipsum quasi laboriosam, corporis dolor neque eius itaque pariatur assumenda. Aspernatur, culpa.</p>
      </div>
    </section>
    <section class="support">
      <img src="images/unclegandalf2.png" alt="we-need-you" />
      <a href="donation.php" class="button1">Soutenez le musée</a>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur dolorum praesentium itaque provident fuga, tempore illo incidunt laboriosam quis labore repellat unde at officia hic, minima recusandae. Modi, placeat fugit?</p>
    </section>
  </section>

  <section class="goldenbook">
    <section class="titleGoldenbook">
      <h2>DANS NOTRE LIVRE D'OR</h2>
    </section>
    <div class="carrousel">
      <p class="item-1">This is your last chance. After this, there is no turning back.
        <span class="author">
          <img src="http://www.claudiobernasconi.ch/wp-content/uploads/2014/03/github_octocat-300x300.jpg">
          The octocat
        </span>
      </p>
      <p class="item-2">You take the blue pill - the story ends, you wake up in your bed and believe whatever you want to believe.
        <span class="author">
          <img src="http://www.claudiobernasconi.ch/wp-content/uploads/2014/03/github_octocat-300x300.jpg">
          The octocat
        </span>
      </p>
      <p class="item-3">You take the red pill - you stay in Wonderland and I show you how deep the rabbit-hole goes.
        <span class="author">
          <img src="http://www.claudiobernasconi.ch/wp-content/uploads/2014/03/github_octocat-300x300.jpg">
          The octocat
        </span>
      </p>
    </div>
  </section>

  <!-- FOOTER -->
  <?php callFooter(); ?>
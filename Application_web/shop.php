<?php require_once('VIEW/view_header.php'); ?>
<?php require_once('VIEW/view_footer.php'); ?>
<?php require_once('Service/ShopService.php'); ?>

<?php callHeader("Shop", "css/shop.css"); ?>
<?php callNav() ?>

<!-- HEADER -->

<?php callMainTitle("Boutique"); ?>

<!-- SHOP -->

<section class="gallery">
  <div class="container">
    <div class="toolbar">
      <div class="search-wrapper">
        <!-- <input type="search" placeholder="Search for photos">
        <div class="counter">
          Total photos: <span>12</span></div> -->
        <h2 class="effect-shine">Nos artéfacts à la une</h2>
      </div>
      <ul class="view-options">
        <li class="zoom">
          <input type="range" min="180" max="380" value="280">
        </li>
        <li class="show-grid active">
          <button disabled>
            <i class="fas fa-th fa-2x"></i>
          </button>
        </li>
        <li class="show-list">
          <button>
            <i class="fas fa-list-ul fa-2x"></i>
          </button>
        </li>
      </ul>
    </div>
    <ol class="image-list grid-view">



      <?php
      $articles = (new ShopService())->displayArticle();
      foreach ($articles as $value) {
        $id = $value->getID();
        $title = $value->getNAME();
        $content = $value->getDESCRIPTION();
        $price = $value->getPRICE();
        $image = $value->getPHOTO();

      ?>
        <li>
          <figure>
            <img class="image" src="<?= "data:image;base64," . base64_encode($image) ?>" alt="image">
            <figcaption>
              <p><?= $title ?></p></br>
              <p><?= $price ?> €</p>
              <p><?= $content ?></p></br>
              <a href=""><i class="fas fa-shopping-cart"></i></a>
            </figcaption>
          </figure>
        </li>

      <?php } ?>
    </ol>
  </div>
</section>

<!-- FOOTER -->
<?php callFooter(); ?>
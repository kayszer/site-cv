<?php require_once('inc/init.inc.php'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Kayes Kassas CV</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- mobile specific metas
   ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- CSS
   ================================================== -->
  <link rel="stylesheet" href="view/visiteur/css/base.css">
  <link rel="stylesheet" href="view/visiteur/css/main.css">
  <link rel="stylesheet" href="view/visiteur/css/vendor.css">
  <!-- script
   ================================================== -->
  <script src="view/visiteur/js/modernizr.js"></script>
  <script src="view/visiteur/js/pace.min.js"></script>

  <!-- favicons
	================================================== -->
  <link rel="icon" type="image/png" href="view/visiteur/images/2K-favicon.png">

</head>

<body id="top">

  <!-- header
   ================================================== -->
  <header>
    <div class="row">

      <div class="top-bar">
        <a class="menu-toggle" href="#"><span>Menu</span></a>

        <div class="logo">
          <a href="index.html"></a>
        </div>

        <nav id="main-nav-wrap">
          <ul class="main-navigation">
            <li class="current"><a class="" href="<?php echo URL; ?>index.php" title="">Accueil</a></li>
            <li><a class="smoothscroll" href="#about" title="">A propos de moi</a></li>
            <li><a class="smoothscroll" href="#formation" title="">Formation</a></li>
            <li><a class="smoothscroll" href="#experience" title="">Exprerience</a></li>
            <li><a class="smoothscroll" href="#contact" title="">Contact</a></li>
            <?php if (userConnect()) : ?>
              <li><a class="" href="<?php echo URL; ?>connexion.php" title="">Admin</a></li>
              <li><a class="" href="<?= URL ?>connexion.php?action=deconnexion" title="">Deconnexion</a></li>
            <?php else : ?>
              <li><a class="" href="<?php echo URL; ?>connexion.php" title="">Admin</a></li>
            <?php endif; ?>

          </ul>
        </nav>
      </div> <!-- /top-bar -->

    </div> <!-- /row -->
  </header> <!-- /header -->

  <!-- intro section
           ================================================== -->
  <section id="intro">

    <div class="intro-overlay"></div>

    <div class="intro-content">
      <div class="row">

        <div class="col-twelve">

          <h1>Kayes Kassas</h1>

          <p class="intro-position">
            <span>Developpeur Web Junior</span>
            <span>HTML / CSS / JS / PHP</span>
          </p>

          <a class="button stroke smoothscroll" href="#about" title="">A propos de moi</a>

        </div>

      </div>
    </div> <!-- /intro-content -->

  </section> <!-- /intro -->

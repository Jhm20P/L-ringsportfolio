<!doctype html>
<html lang="da">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Jonas Hawthorn Mikkelsen">
    <meta name="generator" content="Jekyll v4.1.1">
    <link rel="icon" href="favicon.ico">
    <title>Responsiv design</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- Javascript for iconer fra fontawesome -->
    <script src="https://kit.fontawesome.com/c43d39253a.js" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- EGEN CSS -->
<link rel="stylesheet" href="underside.css">
<link rel="stylesheet" href="bodyfix.css">
<link rel="stylesheet" href="billede.css">
  <!-- INTERN CSS -->
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
    <!-- MENU BAR -->
  <?php include("Menu.inc"); ?>

<main role="main">
<!-- SEKTION MED OVERSKRIFT OG UNDEROVERSKRIFT -->
  <section class="jumbotron text-center">
    <div class="container">
      <h1>Responsiv design</h1>
      <p class="lead text-muted">Her kan man finde informationer omkring hvad jeg har lært angående responsiv design</p>
    </div>
  </section>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">
      <!-- INDLEDNING -->
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Indledning</h2>
        <p class="lead">Når man skal lave sin hjemmeside, skal man tænke "Mobile first" det vil sige du designer til mobilen som det første, så tablet og til sidst laptop/desktop. Den måde man kan gøre det på, er at bruge det der hedder "@media qurries" og det kan f.eks. se sådan her ud: "@media screen and (min-width: 375px) and (max-width: 414px)". Dette var et eksempel på hvordan det ville se ud hvis du skulle lave efter en iphone. Dine "@media qurries" laves i din CSS. I Google Chrome kan man trykke ctrl+shift+i for at åbne "Chrome developer tools". Det man kan gøre med det, er at se ens hjemmeside på de forskellige platforme, som mbil, tablet og pc, samt størrelserne på de forskellige platforme.</p>
      </div>
    </div>
    <!-- INDLEDNING SLUT -->
    <hr class="featurette-divider">
      <!-- MOBIL EKSEMPEL -->
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Mobil.</h2>
        <p class="lead">Til venstre ser man et eksempel på hvor media quirries kan blive sat op for mobilen.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="mobilresp.png" class="mobil" height="auto" width="450" alt="">
      </div>
    </div>
    <!-- MOBIL EKSEMPEL SLUT -->
    <hr class="featurette-divider">
    <!-- TABLET/IPAD EKSEMPEL -->
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Tablet/Ipad.</h2>
        <p class="lead">Til højre ser man et eksempel på hvor media quirries kan blive sat op for tablet/ipad.</p>
      </div>
      <div class="col-md-5">
        <img src="tabletresp.png" height="auto" width="450" alt="">
      </div>
    </div>
    <!-- TABLET/IPAD EKSEMPEL SLUT -->
    <hr class="featurette-divider">
    <!-- DESKTOP EKSEMPEL -->
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Desktop/Laptop.</h2>
        <p class="lead">Til venstre ser man et eksempel på hvor media quirries kan blive sat op for desktop.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="desktopresp.png" height="auto" width="450" alt="">
      </div>
    </div>
    <!-- DESKTOP EKSEMPEL SLUT -->
    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="white-section" id="footer">
  <div class="container-fluid">
      <i class="fab fa-twitter footer-icon"></i>
      <i class="fab fa-facebook-f footer-icon"></i>
      <i class="fab fa-instagram footer-icon"></i>
      <i class="fas fa-envelope footer-icon"></i>

    <p class="copyright">© Copyright 2020 Jonas Hawthorn Mikkelsen</p>
  </div>
  </footer>
</main>
<!-- JAVASCRIPT BRUGT TIL ALLE UNDERSIDER -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</html>

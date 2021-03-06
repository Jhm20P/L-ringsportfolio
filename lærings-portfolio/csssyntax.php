<!doctype html>
<html lang="da">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Jonas Hawthorn Mikkelsen">
    <meta name="generator" content="Jekyll v4.1.1">
    <link rel="icon" href="favicon.ico">
    <title>CSS Syntax</title>

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
      <h1>CSS Syntax</h1>
      <p class="lead text-muted">Her kan se hvad jeg har lært inden for CSS Syntax</p>
    </div>
  </section>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">
    <!-- CSS SYNTAX -->
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">CSS syntax. <span class="text-muted">Hvordan ser Syntaxen ud?</span></h2>
        <p class="lead">CSS syntaxen består af "regler/rules". Disse regler kan man f.eks. se på billedet her under teksten, men en "regel" dækker fra start tuborgklamme til slut tuborgklamme. Det første del af sådan en "regel" er en selector, det kan være et html tag, "class" eller en "id" som man vælger at bruge. Inde i den her regel har vi så en "declaration", og denne "declaration" består af en propety, som har en værdi. "Declaration" bliver afsluttet med et enkelt semikolon. Hvis man vil bruge et almindeligt html tag f.eks. "h1" så behøver man ikke at sætte et tegn før "h1". Hvis man gerne vil bruge en "class" som selector skal man bruge et punktum før man skrive ens "class". Hvis man har tænkt sig at bruge et "id" som ens selector skal man bruge et hashtag før ens "id".</p>
      </div>
      <div class="col-md-5">

      </div>
      <!-- CSS SYNTAX BILLEDE -->
      <img class="css-billede" src="csskode.png" height="auto" width="450" alt="">
    </div>
    <!-- CSS SYNTAX SLUT -->
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

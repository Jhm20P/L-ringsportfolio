<!doctype html>
<html lang="da">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Jonas Hawthorn Mikkelsen">
    <meta name="generator" content="Jekyll v4.1.1">
    <link rel="icon" href="favicon.ico">
    <title>PHP</title>

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
      <h1>PHP</h1>
      <p class="lead text-muted">Her kan man finde informationer omkring hvad PHP og Serverside er.</p>
    </div>
  </section>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">
    <!-- PHP OG SERVERSIDE -->
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">PHP og Serverside. <span class="text-muted">Forskellen.</span></h2>
        <ul>
          <li>
            client-side er det der referere til web-browseren.
          </li>
          <li>
            Server-side er det der referere til hvor dataen og source koden er gemt/lokaliseret
          </li>
          <li>
            PHP er serverside scripting
          </li>
          <li>
            Et client-side script er et program der bliver hentet når en bruger spørger efter de informationer.
          </li>
          <li>
            Disse små scripts er programmer der bliver downloadet og lagt sammen, derefter bliver de brugt på browseren.
          </li>
          <li>
            Javascript er en meget vigtig  del af client-side scripting, som bliver brugt tit til dynamisk design.
          </li>
          <li>
            Scriptet kan placeres ind i selve html’en eller i en fil for den selv.
          </li>
        </ul>
        <p class="lead"><cite>-Jonas, Moodle/<a class="google" href="https://docs.google.com/document/d/1w9nXY61YiEnbpRTnU7FvQ9WnGJZfXfueLgoGokz4FVU/edit?usp=sharing" target="_blank">Google docs</a>, <time datetime="2020-10-20">20 oktober, 2020</time></cite></p>
      </div>
      <div class="col-md-5">
        <img src="phpbillede.png" height="auto" width="450" alt="">
      </div>
    </div>
    <!-- PHP OG SERVERSIDE SLUT -->
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

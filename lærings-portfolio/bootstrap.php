<!doctype html>
<html lang="da">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Jonas Hawthorn Mikkelsen">
    <meta name="generator" content="Jekyll v4.1.1">
    <link rel="icon" href="favicon.ico">
    <title>Bootstrap</title>

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
      <h1>Bootstrap</h1>
      <p class="lead text-muted">Her kan se hvad jeg har lært inden for Bootstrap</p>
    </div>
  </section>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">
      <!-- BOOTSTRAP -->
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Bootstrap.</h2>
        <p class="lead">Bootstrap er en åben licens som alle kan bruge til deres kode, uanset formål.
Men man er selv ansvarlig hvis der skulle ske skader eller noget af det på ens hjemmeside ikke virker. Ved bootstrap bestemmer du selv hvor meget du vil bruge der inde fra, og hvad du vil bruge. Bootstrap responsive design fungere ved brug af 12 kolonner. For at kunne bruge de forskellige størrelser af responsive, så skal man bruge “lg” for “large” og det vil sige desktop/laptop version. “md” er “medium” og det størrelsen for tablets/ipad og den sidste størrelse er mobil/smartphone størrelsen, og den defineres som “sm”. Man kan se på billedet her under teksten, at man skal have en div med en “class” der har en værdi “row”. Under den her div skal der så være en div mere, med f.eks. værdien “col-md-4”. “col” er kolonner, og tallet man skriver til sidst, er hvor mange kolonner det indholde man putter ind under “div’en”
 </p>
      </div>
      <!-- BOOTSTRAP BILLEDE -->
      <img src="bootstrapeksempel.png" height="auto" width="450" alt="">
    </div>
    <!-- BOOTSTRAP SLUT -->
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

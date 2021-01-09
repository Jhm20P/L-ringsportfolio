<!DOCTYPE html>
<html lang="da" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="favicon.ico">

  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- EGEN CSS -->
  <link rel="stylesheet" href="style1.css">


  <!-- Javascript for iconer fra fontawesome -->
  <script src="https://kit.fontawesome.com/c43d39253a.js" crossorigin="anonymous"></script>


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;900&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
  <title>Læringsportfolio</title>
</head>

<body>

  <!-- Navbar/Menu -->
  <?php include("Menu.inc"); ?>

    <!-- Karusel/billede slider -->

<section id="carousel">




<div class="karusel">
  <div id="carouselExampleControls" class="carousel slide" data-ride="false">
    <div class="carousel-inner">
      <div class="carousel-item active ">
        <div class="container">
        <img src="html.jpg" class="carousel-img" alt="...">
      </div>
      </div>
      <div class="carousel-item">
        <div class="container">
        <img src="social.png" class="carousel-img social" alt="...">
      </div>
      </div>
      <div class="carousel-item">
        <div class="container">
        <img src="design2.png" class="carousel-img" alt="...">
      </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</section>
<!--
  Indhold -->
  <section class="white-section" id="emner">
    <!-- HEADING -->
    <h2 class="section-heading" style="padding-top: 2%;">Emner</h2>
    <p>Her kan du se hvad de forskellige emner indeholder.</p>



    <div class="row" style="padding-bottom: 1%;">
      <!-- DESIGN KORT -->
  <div class="pricing-clumn col-lg-3 col-md-6">
    <div class="card">
      <div class=" card-header">
        <h3>Design</h3>
      </div>
      <div class=" card-body">
        <h2 class="price-text">Dette indeholder</h2>
        <p>Photoshop/Illustrator</p>
        <p>Farveteori</p>
        <p>Gestaltlovene</p>
        <p>Typografi</p>
        <p>Quck n' dirty video</p>
        <a href="design.php"><button type="button" class="btn btn-outline-dark btn-lg btn-block">Se mere</button></a>
      </div>
    </div>
  </div>
  <!-- KODNING KORT -->
  <div class="pricing-clumn col-lg-3 col-md-6">
    <div class="card">
      <div class=" card-header">
        <h3>Kodning</h3>
      </div>
      <div class=" card-body">
        <h2 class="price-text">Dette indeholder</h2>
        <p>HTML, CSS og Bootstrap</p>
        <p>HTML og CSS workshop</p>
        <p>Responsiv design</p>
        <p>Versionsstyring</p>
        <p>PHP og serverside</p>
        <a href="kodning.php"><button type="button" class="btn btn-dark btn-lg btn-block">Se mere</button></a>
      </div>
    </div>
  </div>
  <!-- KOMMUNIKATION KORT -->
  <div class="pricing-clumn col-lg-3 col-md-6">
    <div class="card">
      <div class=" card-header">
        <h3>Kommunikation</h3>
      </div>
      <div class=" card-body">
        <h2 class="price-text">Dette indeholder</h2>
        <p>Præsentationsteknik</p>
        <p>Test metoder</p>
        <p>Paradigmer</p>
        <p>Ophavsret og licens</p>
        <p>BMC</p>
        <a href="kommunikation.php"><button type="button" class="btn btn-dark btn-lg btn-block">Se mere</button></a>
      </div>
    </div>
    </div>
    <!-- PROJEKTER KORT -->
    <div class="pricing-clumn col-lg-3 col-md-6">
      <div class="card" style="height: 400px;">
        <div class=" card-header">
          <h3>Projekter</h3>
        </div>
        <div class=" card-body">
          <h2 class="price-text">Dette indeholder</h2>
          <p>Hackathon</p>
          <p>Design thinking</p>
          <p>Onepage</p>
          <p>Portfolio</p>
          <a href="projekter.php"><button type="button" id="knap" class="btn btn-dark btn-lg btn-block">Se mere</button></a>
        </div>
      </div>
      </div>
  </div>

  </section>



  <!-- Footer -->
  <footer class="white-section" id="footer">
  <div class="container-fluid">
      <i class="fab fa-twitter footer-icon"></i>
      <i class="fab fa-facebook-f footer-icon"></i>
      <i class="fab fa-instagram footer-icon"></i>
      <i class="fas fa-envelope footer-icon"></i>

    <p class="copyright">© Copyright 2020 Jonas Hawthorn Mikkelsen</p>
  </div>
  </footer>


  <!-- Bootstrap script -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>

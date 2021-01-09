<!doctype html>
<html lang="da">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Jonas Hawthorn Mikkelsen">
    <meta name="generator" content="Jekyll v4.1.1">
    <link rel="icon" href="favicon.ico">
    <title>Versionsstyring</title>

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
      <h1>Versionsstyring</h1>
      <p class="lead text-muted">Her kan man finde informationer omkring hvad jeg har lært versionsstyring</p>
    </div>
  </section>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">
    <!-- SELVE OPGAVEN -->
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Opgaven.</h2>
        <ul class="lead">
          <p>Beskriv hvad Versionsstyring er, og Hvorfor det er relevant at bruge</p>
          <li>
            Versionsstyring er måde hvorpå man kan lave forslag til ændringer i kode, uden at de nødvendigvis ændrer på koden. På den måde kan man også få kommentarer på sine forslag, og man kan undgå at lave eventuelle fejl i selve koden.
          </li>
          <li>
            Versionsstyring er hvor man kan kigge alle sine ændringer igennem, og ud fra det vælge hvad der er mest relevant at have med i det færdige “produkt”.
          </li>
          <li>
            Versionsstyring kan være en god idé, da der er mange personer der kan komme med rettelser og idéer til ens kode. Folk kan beskrive deres ændringer de har lavet til din kode, hvor der herefter kan diskuteres af hvad du vil tage med.
          </li>
          <li>
            Man kan tagge forskellige folk, for at få en mening/budskab/holdning
          </li>
        </ul>
        <p class="lead"><cite>- Terkel og Jonas, Moodle,<a href="https://docs.google.com/document/d/1BhdMv-U8Ryb2LYv3RwuKMV4wjcl-V-xwZIdancqh-CI/edit?usp=sharing" target="_blank">Google docs</a>, <time datetime="2020-09-21">21 sep, 2020</time></cite></p>
      </div>
    </div>
    <!-- SELVE OPGAVEN SLUT -->
    <hr class="featurette-divider">
    <!-- WINDOWS 1. SEKTION -->
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Windows. <span class="text-muted">GitHub.</span></h2>
        <p class="lead">Man trykker på “new repository” for at oprette et nyt repository til sin kode. Man kan også trykke “Add local repository” for at vælge en mappe af ens hjemmeside, man har på computeren.</p>
        <p class="lead"><cite>- Terkel og Jonas, Moodle,<a href="https://docs.google.com/document/d/1BhdMv-U8Ryb2LYv3RwuKMV4wjcl-V-xwZIdancqh-CI/edit?usp=sharing" target="_blank">Google docs</a>, <time datetime="2020-09-21">21 sep, 2020</time></cite></p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="win1.png" alt="" height="auto" width="90%">
        <div class="win2">
          <img src="win2.png" alt="">
        </div>
      </div>
    </div>
    <!-- WINDOWS 1. SEKTION SLUT -->
    <hr class="featurette-divider">
    <!-- WINDOWS 2. SEKTION -->
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Windows. <span class="text-muted">GitHub.</span></h2>
        <p class="lead">Til venstre ser vi sektionen hvor ens repository er. I ens repository er der en historik og hvilke filer der blevet ændret i og hvornår. I changes kan man se hvilke ændringer man har foretaget, og derefter kan “commit” sine ændringer til master, hvor disse ændringer som beskrevet før vil blive vist i ens “history”.</p>
        <p class="lead"><cite>- Terkel og Jonas, Moodle,<a href="https://docs.google.com/document/d/1BhdMv-U8Ryb2LYv3RwuKMV4wjcl-V-xwZIdancqh-CI/edit?usp=sharing" target="_blank">Google docs</a>, <time datetime="2020-09-21">21 sep, 2020</time></cite></p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="win3.png" alt="">
      </div>
    </div>
    <div class="win4">
      <img src="win4.png" alt="">
    </div>
    <!-- WINDOWS 2. SEKTION SLUT -->

    <hr class="featurette-divider">
    <!-- WINDOWS 3. SEKTION -->
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Windows. <span class="text-muted">GitHub.</span></h2>
        <p class="lead">I Branches kan du tilføje nye branches at arbejde i, samt du kan merge din andre branches med din master branch.</p>
        <p class="lead"><cite>- Terkel og Jonas, Moodle,<a href="https://docs.google.com/document/d/1BhdMv-U8Ryb2LYv3RwuKMV4wjcl-V-xwZIdancqh-CI/edit?usp=sharing" target="_blank">Google docs</a>, <time datetime="2020-09-21">21 sep, 2020</time></cite></p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="win5.png" alt="">
      </div>
    </div>
    <!-- WINDOWS 3. SEKTION SLUT -->
    <hr class="featurette-divider">
    WINDOWS 4. SEKTION
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Windows. <span class="text-muted">GitHub.</span></h2>
        <p class="lead">Når du er inde under history kan du højreklikke på den fil du gerne åbne og derefter klikke  “open in external editor” for at få den editor sådan at du kan redigere i den.</p>
        <p class="lead"><cite>- Terkel og Jonas, Moodle,<a href="https://docs.google.com/document/d/1BhdMv-U8Ryb2LYv3RwuKMV4wjcl-V-xwZIdancqh-CI/edit?usp=sharing" target="_blank">Google docs</a>, <time datetime="2020-09-21">21 sep, 2020</time></cite></p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="win6.png" alt="">
      </div>
    </div>
    <!-- WINDOWS 4. SEKTION SLUT -->
    <hr class="featurette-divider">
    <!-- WINDOWS 5. SEKTION -->
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Windows. <span class="text-muted">GitHub.</span></h2>
        <p class="lead">Oppe til højre kan du klikke på “publish repository”.</p>
        <p class="lead"><cite>- Terkel og Jonas, Moodle,<a href="https://docs.google.com/document/d/1BhdMv-U8Ryb2LYv3RwuKMV4wjcl-V-xwZIdancqh-CI/edit?usp=sharing" target="_blank">Google docs</a>, <time datetime="2020-09-21">21 sep, 2020</time></cite></p>
      </div>
    </div>
    <div class="col-md-5 order-md-1">
     <img src="win7.png" alt="">
    </div>
    <!-- WINDOWS 5. SEKTION SLUT -->

    <hr class="featurette-divider">
    <!-- WINDOWS 6. SEKTION -->
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Windows. <span class="text-muted">GitHub.</span></h2>
        <p class="lead">Dette giver denne her boks.  Her kan du så give den et navn, en beskrivelse og vælge om denne kode skal være privat eller ej. Når du har valgt disse ting trykker du på “publish repository”. Dette gør at ens master bliver opdateret med den ændring som du vælger at pushe igennem.Når man gør det i anden branch end master branch, bliver det send som en pull request som ejeren af repository får.</p>
        <p class="lead"><cite>- Terkel og Jonas, Moodle,<a href="https://docs.google.com/document/d/1BhdMv-U8Ryb2LYv3RwuKMV4wjcl-V-xwZIdancqh-CI/edit?usp=sharing" target="_blank">Google docs</a>, <time datetime="2020-09-21">21 sep, 2020</time></cite></p>
      </div>
      <div class="col-md-5">
        <div class="win8">
          <img src="win8.png" alt="">
        </div>
      </div>
    </div>
    <!-- WINDOWS 6. SEKTION SLUT -->

    <hr class="featurette-divider">
    <!-- INTERNET 1. SEKTION -->
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Internet version <span class="text-muted">GitHub.</span></h2>
        <p class="lead">På hjemmesiden skal man gå ind under repositories og så derefter trykke på den grønne knap med “new” for at oprette en ny repository.</p>
        <p class="lead"><cite>- Terkel og Jonas, Moodle,<a href="https://docs.google.com/document/d/1BhdMv-U8Ryb2LYv3RwuKMV4wjcl-V-xwZIdancqh-CI/edit?usp=sharing" target="_blank">Google docs</a>, <time datetime="2020-09-21">21 sep, 2020</time></cite></p>
      </div>
    </div>
    <div class="col-md-5">
      <img src="internet1.png" alt="">
    </div>
    <!-- INTERNET 1. SEKTION SLUT -->

    <hr class="featurette-divider">
    <!-- INTERNET 2. SEKTION -->
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Internet version <span class="text-muted">GitHub.</span></h2>
        <p class="lead">Her kan man så give sin repository et navn og “description” giver en længere forklaring på hvad den her repository indeholde. <span class="red">Husk altid “readme” filen!</span>.</p>
        <p class="lead"><cite>- Terkel og Jonas, Moodle,<a href="https://docs.google.com/document/d/1BhdMv-U8Ryb2LYv3RwuKMV4wjcl-V-xwZIdancqh-CI/edit?usp=sharing" target="_blank">Google docs</a>, <time datetime="2020-09-21">21 sep, 2020</time></cite></p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="internet2.png" alt="" height="auto" width="130%">
      </div>
    </div>
    <!-- INTERNET 2. SEKTION SLUT -->

    <hr class="featurette-divider">
    <!-- INTERNET 3. SEKTION -->
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Internet version <span class="text-muted">GitHub.</span></h2>
        <p class="lead">Her kan man “clone” sin fil fra hjemmesiden ned til Github desktop</p>
        <p class="lead"><cite>- Terkel og Jonas, Moodle,<a href="https://docs.google.com/document/d/1BhdMv-U8Ryb2LYv3RwuKMV4wjcl-V-xwZIdancqh-CI/edit?usp=sharing" target="_blank">Google docs</a>, <time datetime="2020-09-21">21 sep, 2020</time></cite></p>
      </div>
      <div class="col-md-5">
        <img src="internet3.png" alt="">
      </div>
    </div>
    <!-- INTERNET 3. SEKTION SLUT -->
    <hr class="featurette-divider">
    <!-- INTERNET 4. SEKTION -->
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Internet version <span class="text-muted">GitHub.</span></h2>
        <p class="lead">Her kan oprette en ny branch samt det at man kan skifte/vælge hvilken branch man arbejder i.</p>
        <p class="lead"><cite>- Terkel og Jonas, Moodle,<a href="https://docs.google.com/document/d/1BhdMv-U8Ryb2LYv3RwuKMV4wjcl-V-xwZIdancqh-CI/edit?usp=sharing" target="_blank">Google docs</a>, <time datetime="2020-09-21">21 sep, 2020</time></cite></p>
      </div>
      <div class="col-md-5">
        <img src="internet4.png" alt="">
      </div>
    </div>
    <!-- INTERNET 4. SEKTION SLUT -->
    <hr class="featurette-divider">
    <!-- INTERNET 5. SEKTION -->
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Internet version <span class="text-muted">GitHub.</span></h2>
        <p class="lead">Man kan vælge “Create new file” for at oprette et nyt dokument til sin bracket. Man kan også trykke “upload file” hvis man allerede har en mappe med ens hjemmeside man gerne vil have uploadet. </p>
        <p class="lead"><cite>- Terkel og Jonas, Moodle,<a href="https://docs.google.com/document/d/1BhdMv-U8Ryb2LYv3RwuKMV4wjcl-V-xwZIdancqh-CI/edit?usp=sharing" target="_blank">Google docs</a>, <time datetime="2020-09-21">21 sep, 2020</time></cite></p>
      </div>
      <div class="col-md-5">
        <img src="internet5.png" alt="">
      </div>
    </div>
    <!-- INTERNET 5. SEKTION SLUT -->
    <hr class="featurette-divider">
    <!-- INTERNET 6. SEKTION -->
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Internet version <span class="text-muted">GitHub.</span></h2>
        <p class="lead">Hvis man trykker “create new file” kommer man frem til den her side, hvor man kan skrive en kode, der være med til hjælpe i den bracket f.eks.  </p>
        <p class="lead"><cite>- Terkel og Jonas, Moodle,<a href="https://docs.google.com/document/d/1BhdMv-U8Ryb2LYv3RwuKMV4wjcl-V-xwZIdancqh-CI/edit?usp=sharing" target="_blank">Google docs</a>, <time datetime="2020-09-21">21 sep, 2020</time></cite></p>
      </div>
      <div class="col-md-5">
        <img src="internet6.png" alt="">
      </div>
    </div>
    <!-- INTERNET 6. SEKTION SLUT -->
    <hr class="featurette-divider">
    <!-- INTERNET 7. SEKTION -->
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Internet version <span class="text-muted">GitHub.</span></h2>
        <p class="lead">Man kan trykke på den blyant lige nede til højre hvis man har nogle ændringer til det dokument i den bracket.</p>
        <p class="lead"><cite>- Terkel og Jonas, Moodle,<a href="https://docs.google.com/document/d/1BhdMv-U8Ryb2LYv3RwuKMV4wjcl-V-xwZIdancqh-CI/edit?usp=sharing" target="_blank">Google docs</a>, <time datetime="2020-09-21">21 sep, 2020</time></cite></p>
      </div>
      <div class="col-md-5">
        <img src="internet7.png" alt="">
      </div>
    </div>
    <!-- INTERNET 7. SEKTION SLUT -->
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

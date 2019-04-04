<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Project - HackersPoulette</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- css -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/> <!-- mettre le css bootstrap en premier pour éviter que notre css ne l'écrase-->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" /> <!-- création de notre propre feuille de style pour apporter plus de modifications-->
    <script src="assets/js/main.js"></script>
</head>
<body>
    <div class="main">
    <!-- Début de la navigation-->

      <?php 
      
        include 'navbar.php';
      
      ?>

    <!-- Fin de la navigation -->

        <!-- Début du carousel -->
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="w-100 img1" src="assets/img/7.png" alt="Première image">
                <img class="w-100 img101" src="assets/img/res_1.png" alt="Première image">
              </div>
              <div class="carousel-item">
                <img class="w-100 img2" src="assets/img/8.png" alt="Seconde image">
                <img class="w-100 img102" src="assets/img/res_2.png" alt="Première image">
              </div>
              <div class="carousel-item">
                <img class="w-100 img3" src="assets/img/11.png" alt="Troisième image">
                <img class="w-100 img103" src="assets/img/res_3.png" alt="Première image">
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
    <!-- Fin du carousel-->

    <!-- Présentation Hackers Poulette-->
         <section class="row" style="background-color: white;">
            <div class="col-sm-12 col-md-6" >
              <img src="assets/img/hackers-poulette-logo_couleur.png" class="img-fluid" alt="logo Hackers Poulette"/>
            </div>
            <div class="col-sm-12 col-md-6 p-5">
              <h2>Qui sommes-nous ?</h1>
              <p class="presentation">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore, qui, pariatur mollitia sapiente iste omnis labore aut vel cum molestias nesciunt molestiae, 
                fugit consequuntur praesentium illum? Laudantium veritatis minus aperiam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, a perspiciatis? Eum sunt est quo, delectus suscipit, molestiae cupiditate quod inventore dolor minus voluptatibus nobis? Porro, iste 
                aspernatur. Unde, asperiores.</p>
            </div>

         </section>
    <!-- Fin présentation Hackers Poulette-->

    <!-- Début carousel card-->
     
<!-- Le footer-->


    <?php
      include 'footer.php';
    ?>


<!-- javacript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
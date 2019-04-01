<?php


?>

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
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" /> <!-- création de notre propre feuille de style pour apporter plus de modifications-->
    <script src="assets/js/main.js"></script>
</head>
<body>
    <div class="main">
    <!-- Début de la navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                        <a class="navbar-brand" href="#">Hackers Poulette</a>
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Product <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Contact</a>
                    </li>
                   
                  </ul>
                </div>
    </nav>
    <!-- Fin de la navigation -->

    <!-- Début du container-fluid-->
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <!-- Le logo et le texte-->
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="logo">
                        
                    
                        </div>
                        <section class="visit">
                            <h1>Visit Us At</h1>
                            <p>Adress Quai Arthur Rimbaud 10</p>
                            <p>Phone 0456 435 234</p>
                            <p>Email info@becode.org</p>
                        </section>
                    </article>
                    <!-- Le formulaire-->
                    <aside class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <h2>Contact us</h2>
                        <form action="contact.php" method="GET">
                            <input name="first-name"  placeholder="First name" size=25 type="text"/>
                            <input name="last-name"  placeholder="Last name" size=25 type="text"/><p></p>
                            <select name="genre">
                                <option value="Man">H</option>
                                <option value="Women">F</option>
                            </select>
                            <input name="Country"  placeholder="Country" size=25 type="text"/><p></p>
                            <input name="Subject"  placeholder="Subject" size=25 type="text"/><p></p>
                            <input name="Message"  placeholder="Message" size=25 type="text"/><p></p>
                            <input type=submit value="send" name="send"/>
                        </form>
                
                    </aside>
                
                </div>
            
            
            </div>
        
        </div> 
    <!-- Fin du container-fluid -->
    <!-- Le footer-->
    <footer>
        <p>Hackers Poulette by Cassandra Caestecker & Guy Vilain</p>
    
        </footer>

    </div>
<!-- javacript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
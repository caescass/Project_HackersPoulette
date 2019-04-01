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
     <link href="http://fr.allfont.net/allfont.css?fonts=bellota-bold" rel="stylesheet" type="text/css" />
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/> <!-- mettre le css bootstrap en premier pour éviter que notre css ne l'écrase-->
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" /> <!-- création de notre propre feuille de style pour apporter plus de modifications-->
    <script src="assets/js/main.js"></script>
</head>
<body>
    <div class="main">
        <?php
        include 'navbar.php';
        
        ?>
    <!-- Fin de la navigation -->

    <!-- Début du container-fluid-->
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <!-- Le logo et le texte-->
                    <article class="col-6 coordonees">
                        <img src="assets/img/hackers-poulette-logo_blanc-02.svg" class="img-fluid" alt="Hackers Poulette"/>
                        
                        <section class="visit">
                            <h1>Visit Us At</h1>
                            <!-- ligne blanche-->
                                <hr>     
                            <p>Adress Quai Arthur Rimbaud 10</p>
                            <p>Phone 0456 435 234</p>
                            <p>Email info@becode.org</p>
                        </section>
                    </article>

                    <!-- Le formulaire-->
                    <aside class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <h3>Contact us</h3>
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
        <footer class="col-12">
            <p class="footer">Hackers Poulette by Cassandra Caestecker & Guy Vilain</p>
        </footer>
    </div>

<!-- javacript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
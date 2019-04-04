<?php
    session_start();
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
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/contact.css" /> <!-- création de notre propre feuille de style pour apporter plus de modifications-->
    <script src="assets/js/main.js"></script>
</head>
<body>
    <div class="main">
    <!-- Fin de la navigation -->
    <?php
    include 'navbar.php';
    ?>

    <!-- Creation des SESSION -->



    <!-- Début du container-fluid-->
        <div class="un">
            <div class="container-fluid">
                <div class="row" id="principal">
                    <!-- Le logo et le texte-->
                    <article class="col-md-6 col-lg-6 slide-in-bck-top">
                        <img src="assets/img/hackers-poulette-logo_blanc-02.svg" class="img-fluid" alt="Hackers Poulette"/>
                        
                        <section class="visit slide-in-bck-top">
                            <h1>Venez à notre Rencontre</h1>
                            <!-- ligne blanche-->
                                <hr>     
                            <p>Adresse Quai Arthur Rimbaud 10</p>
                            <p>Phone 0456 435 234</p>
                            <p>Email info@becode.org</p>
                        </section>
                    </article>

                    <!-- Le formulaire-->
                    <aside class="col-xs-12 col-sm-12 col-md-6 col-lg-6 slide-in-bottom">
                        <h3 class="center">Contactez-nous</h3>
                        <form action="sanitize.php" method="POST">
                            
                                <input name="prenom"  alt="tapez votre prénom ici" placeholder="Prénom" type="text" class="col-md-5 col-md-offset-2 input" required/>
                                <input name="nom" alt="tapez votre nom ici" placeholder="Nom" type="text" class="col-md-5 input" required/><p></p>
                            
                            
                                <select alt="selectionnez votre genre h pour homme, f pour femme" name="genre" class="col-md-2 col-md-offset-1 input" required>
                                    <option value="1">H</option>
                                    <option value="2">F</option>
                                </select>
                                <!--Honey pot-->
                                <select alt="tapez votre prénom ici" name="honey-pot" class="col-md-2 col-md-offset-1 input bee">
                                    <option value="1">H</option>
                                    <option value="2">F</option>
                                </select>
                                <input alt="tapez votre pays ici" name="pays"  placeholder="Pays"  type="text" class="col-md-8 input" required/><p></p>
                                <input alt="tapez votre mail ici" name="email"  placeholder="email"  type="email" class="col-md-10  input" required/><p></p>
                                <input alt="tapez l'objet de votre demande ici" name="sujet"  placeholder="Objet"  type="text" class="col-md-10 input" required/><p></p>

                            <textarea alt="tapez votre message ici" name="message"  placeholder="Message"  type="text" class="col-md-10 input2" required></textarea><p></p>

                            <input alt="cliquez ici pour soumettre votre formulaire" type=submit value="Envoyer" name="send"class="col-md-10 input submit" />

                        </form>
                    </aside>
                
                </div>
            
            
            </div>
        
        </div> 
    <!-- Fin du container-fluid -->
    </div>
    <footer class="footer" id="foot">
    <?php
    include 'footer.php';
    ?>
    </footer>
<!-- javacript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
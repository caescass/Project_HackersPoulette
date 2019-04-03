<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Validation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- css -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/> <!-- mettre le css bootstrap en premier pour éviter que notre css ne l'écrase-->
    <link href="http://fr.allfont.net/allfont.css?fonts=bellota-bold" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/contact.css" /> <!-- création de notre propre feuille de style pour apporter plus de modifications-->
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/sanitize.css" />
</head>
<body>
    
</body>
</html>

<?php
    include 'navbar.php'
?>

<?php
    $options = array(
        "prenom" => FILTER_SANITIZE_STRING,
        "nom" => FILTER_SANITIZE_STRING,
        "email" => FILTER_VALIDATE_EMAIL,
        "message" => FILTER_SANITIZE_STRING,
        "genre" => FILTER_SANITIZE_NUMBER_INT,
        "pays" => FILTER_SANITIZE_NUMBER_INT,
        "sujet" => FILTER_SANITIZE_STRING,
    );
    $result = filter_input_array(INPUT_POST, $options);
    if ($result != null AND $result != FALSE) {
        echo "<div class='sanitize1'><p>Here is the form you wish to submit to us: </p></div>";
    
    } else {//inutile ma vérif se faire coté client
    
        echo "Un champ est vide ou n'est pas correct!";
    
    }//inutile ma vérif se faire coté client

    
    echo "<div class='sanitize2'><p>First Name: " . $result['prenom'] . " Last Name: " . $result['nom'] . "<p>";
    echo "<p>Email: " . $result['email'] . "</p>";
    if($result['genre'] == '1'){
        echo '<p>Genre: Man. - ';
    }else{
        echo '<p>Genre: Woman. - ';
        }

    echo "Country: " . $result['pays'] . "</p>";
    echo "<p>Subject: " . $result['sujet'] . "<p>";
    echo "<p>Youre message: </p><p>" . $result['message'] . "<p>";


    


    // $mail = $result['guy.vilain1@gmail.com']; // Déclaration de l'adresse de destination.
    
    // //=====Déclaration des messages au format texte et au format HTML.
    // $message_txt = "Bonjour".$prenom.", voici la confirmation de votre inscription à Hackers Poulette.";
    // $message_html = "<html><head></head><body><b>Bonjour".$prenom."</b>, voici la confirmation de votre inscription à Hackers Poulette.</body></html>";
    // //==========
     
    // //=====Création de la boundary
    // $boundary = "-----=".md5(rand());
    // //==========
     
    // //=====Définition du sujet.
    // $sujet = "Confirmation d'inscription Hackers Poulette";
    // //=========
     
    // //=====Création du header de l'e-mail.
    // $header = "From: \"batbatou\"<bobaptiste@gmail.com>".$passage_ligne;
    // $header.= "Reply-to: \"batbatou\" <bobaptiste@gmail.com>".$passage_ligne;
    // $header.= "MIME-Version: 1.0".$passage_ligne;
    // $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
    // //==========
     
    // //=====Création du message.
    // $message = $passage_ligne."--".$boundary.$passage_ligne;
    // //=====Ajout du message au format texte.
    // $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
    // $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
    // $message.= $passage_ligne.$message_txt.$passage_ligne;
    // //==========
    // $message.= $passage_ligne."--".$boundary.$passage_ligne;
    // //=====Ajout du message au format HTML
    // $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
    // $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
    // $message.= $passage_ligne.$message_html.$passage_ligne;
    // //==========
    // $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
    // $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
    // //==========
     
    // //=====Envoi de l'e-mail.
    // mail($mail,$sujet,$message,$header);
    // ==========
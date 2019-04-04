<?php
session_start();

if (isset($_GET['bee-pot'])){
    header('location: final2.php');
    exit;
}
?>

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
        "pays" => FILTER_SANITIZE_STRING,
        "sujet" => FILTER_SANITIZE_STRING,
    );
    $result = filter_input_array(INPUT_POST, $options);
    if ($result != null AND $result != FALSE) {
        echo "<div class='sanitize1 slide-in-bck-top'><p>Vérifiez vos données: </p></div>";
    
    } else {//inutile ma vérif se faire coté client
    
        echo "Un champ est vide ou n'est pas correct!";
    
    }//inutile ma vérif se faire coté client

    
    echo "<div class='sanitize2 slide-in-bottom'><p>Prénom: " . $result['prenom'] . " Nom: " . $result['nom'] . "<p>";
    echo "<p>Email: " . $result['email'] . "</p>";
    if($result['genre'] == '1'){
        echo '<p>Genre: Homme. - ';
    }else{
        echo '<p>Genre: Femme. - ';
        }

    echo "Pays de résidence: " . $result['pays'] . "</p>";
    echo "<p>Objet: " . $result['sujet'] . "<p>";
    echo "<p>Votre demande: </p><p>" . $result['message'] . "<p>";
?>
    <form action="final.php">
        <input type="button" value="Modifier les données" onclick="history.go(-1)">
        <input type="submit" value="Envoyer la demande">
    </form>


<?php

// Email du destinataire
$to = "guy.vilain1@gmail.com";
// Header du mail:
$headers = 'From: ' . $result["email"] . "<p></p>" . 'Reply-To: ' . $result["email"] . "<p></p>" . "Content-Type: text/html; charset=UTF-8";
// $headers = "from";
// Sujet du mail:
$subject = "Nouveau mail client";
// Message contenu dans le mail:
$message_mail = "Nom: " . $result['nom'] . "<p></p>" . "Prénom: " . $result['prenom'] . "<p></p>" . "Pays: " . $result['pays'] . "<p></p>" . "Sujet: " . $result['sujet'] . "<p></p>" . "Message: " . $result['message'];

// $message_mail = "bonjour";
// Fonction d'envoie du mail avec conf de ce que j'envoie
mail($to, $subject, $message_mail, $headers);
?>
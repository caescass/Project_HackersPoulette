<?php

    $prenomError = "";
    $prenom = "";
    $nomError ="";
    $nom = "";
    $pays ="";
    $paysError="";
    $email = "";
    $emailError = "";
    $message = "";
    $messageError = "";
//1 Vérfie variable prenom
    if ($_SERVER["REQUEST_METHOD"] == "POST") {//je teste la methode d'envoi
        if (empty($_POST["prenom"])) {//si l'input name est vide
            $prenomError = "Name is required";//message d'erreur
        } else {
            $prenom = test_input($_POST["prenom"]);//sinon on assigne l'input récupéré dans une  variable
        }
    }
//2 nom
    if ($_SERVER["REQUEST_METHOD"] == "POST") {//je teste la methode d'envoi
        if (empty($_POST["nom"])) {//si l'input name est vide
            $nomError = "Last Name is required";//message d'erreur
        } else {
            $nom = test_input($_POST["nom"]);//sinon on assigne l'input récupéré dans une  variable
        }
    }

// 3 pays

    if ($_SERVER["REQUEST_METHOD"] == "POST") {//je teste la methode d'envoi
        if (empty($_POST["pays"])) {//si l'input name est vide
            $paysError = "Country is required";//message d'erreur
        } else {
            $pays = test_input($_POST["pays"]);//sinon on assigne l'input récupéré dans une  variable
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {//je teste la methode d'envoi
        if (empty($_POST["genre"])) {//si l'input name est vide
            $genreError = "genre is required";//message d'erreur
        } else {
            $genre = test_input($_POST["genre"]);//sinon on assigne l'input récupéré dans une  variable
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {//je teste la methode d'envoi
        if (empty($_POST["email"])) {//si l'input name est vide
            $emailError = "email is required";//message d'erreur
        } else {
            $email = test_input($_POST["email"]);//sinon on assigne l'input récupéré dans une  variable
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {//je teste la methode d'envoi
        if (empty($_POST["sujet"])) {//si l'input name est vide
            $sujetError = "sujet is required";//message d'erreur
        } else {
            $sujet = test_input($_POST["sujet"]);//sinon on assigne l'input récupéré dans une  variable
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {//je teste la methode d'envoi
        if (empty($_POST["message"])) {//si l'input name est vide
            $messageError = "Message is required";//message d'erreur
        } else {
            $message = test_input($_POST["message"]);//sinon on assigne l'input récupéré dans une  variable
        }
    }

    //fonction pour sécuriser les données
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>
<?php

    $firstNameError = "";
    $firstName = "";
    $lastNameError ="";
    $lastName = "";
    $country ="";
    $countryError="";
    $email = "";
    $emailError = "";
    $message = "";
    $messageError = "";
//1 Vérfie variable firstName
    if ($_SERVER["REQUEST_METHOD"] == "POST") {//je teste la methode d'envoi
        if (empty($_POST["firstName"])) {//si l'input name est vide
            $firstNameError = "Name is required";//message d'erreur
        } else {
            $firstName = test_input($_POST["firstName"]);//sinon on assigne l'input récupéré dans une  variable
        }
    }
//2 lastName
    if ($_SERVER["REQUEST_METHOD"] == "POST") {//je teste la methode d'envoi
        if (empty($_POST["lastName"])) {//si l'input name est vide
            $lastNameError = "Last Name is required";//message d'erreur
        } else {
            $lastName = test_input($_POST["lastName"]);//sinon on assigne l'input récupéré dans une  variable
        }
    }

// 3 country

    if ($_SERVER["REQUEST_METHOD"] == "POST") {//je teste la methode d'envoi
        if (empty($_POST["country"])) {//si l'input name est vide
            $countryError = "Country is required";//message d'erreur
        } else {
            $country = test_input($_POST["country"]);//sinon on assigne l'input récupéré dans une  variable
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
        if (empty($_POST["subject"])) {//si l'input name est vide
            $subjectError = "Subject is required";//message d'erreur
        } else {
            $subject = test_input($_POST["subject"]);//sinon on assigne l'input récupéré dans une  variable
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {//je teste la methode d'envoi
        if (empty($_POST["message"])) {//si l'input name est vide
            $messageError = "Name is required";//message d'erreur
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
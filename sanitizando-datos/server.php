<?php

    // echo '<pre>';
    // var_dump($_POST);
    // echo '</pre>';

    $username = $_POST["user_name"];
    $name = $_POST["nombre"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $number = 1.6;

    $html_entities = htmlentities($name);
    $addslashes = addslashes($username);
    $only_words = preg_replace("/\d/", "", $username);     # Deja solo las letras en un String
    $only_numbers = preg_replace("/\D/", "", $username);   # Deja solo los números en un String
    $email_sanitize = filter_var($email, FILTER_SANITIZE_EMAIL);  # Te regresa el mismo String pero en formato email
    $sanitize_int = filter_var($number, FILTER_SANITIZE_NUMBER_INT);    # Te regresa el mismo String pero como entero

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de mi usuario</title>
</head>
<body>
    <p>Name: </p>
    <?= $html_entities ?>

    <p>Username: </p>
    <?= $only_numbers ?>

    <p>Email:</p>
    <?= $email_sanitize ?>

    <p>Password: </p>
    <?= $password ?>

    <p>Número:</p>
    <?= $sanitize_int ?>
</body>
</html>
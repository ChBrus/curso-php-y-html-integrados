<?php

    // Esto sirve para comprobar que los datos se estén enviando
    // echo "<pre>";
    // var_dump($_GET);
    // echo "</pre>";

    // Valida si el dato realmente fue envíado o realmente existe
    $nombre = $_GET["nombre"] ?? "[Undefined name]";
    $edad = $_GET["edad"] ?? "[Undefined age]";

    echo "El usuario $nombre tiene $edad años";
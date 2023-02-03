<?php

    /*
        Filter_var
        - La función filter_var tiene como primer parámetro el dato a validar
        - Los otros parámetros se pueden personalizar gracias a variables globales de PHP
        - Si el primer parámetro no cumple la condición del segundo parámetro devuelve false
        - Si sí, devuelve el primer parámetro (Porque si cumplió con la condición)
    */

    $is_float = filter_var("Esto no es un float", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND); #false
    $is_float = filter_var("16.5", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND); #true
    
    $is_int = filter_var("Esto no es un número", FILTER_VALIDATE_INT); #false
    $is_int = filter_var("16", FILTER_VALIDATE_INT); #true
    
    $is_ip = filter_var("0.0.0", FILTER_VALIDATE_IP); #false
    $is_ip = filter_var("127.0.0.1", FILTER_VALIDATE_IP); #true

    $is_url = filter_var("platzi.com", FILTER_VALIDATE_URL); #false
    $is_url = filter_var("https://www.platzi.com", FILTER_VALIDATE_URL); #true

    $is_email = filter_var("Esto no es un email", FILTER_VALIDATE_EMAIL); #false
    $is_email = filter_var("estonoesunemail@gmail.com", FILTER_VALIDATE_EMAIL); #true

    echo '<pre>';
    var_dump($is_float);
    var_dump($is_int);
    var_dump($is_ip);
    var_dump($is_url);
    var_dump($is_email);
    echo '</pre>';

?>
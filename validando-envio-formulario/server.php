<?php
    // if(isset($_POST["name"]) && !empty($_POST["name"])) {
    //     echo "¡Hola " . $_POST['name'] . "!";
    // } else {
    //     return;
    // }
    
    if( isset($_POST["form"]) ) {
        echo "Todo el formulario fue mandado";
    } else {
        echo "No se mando ningún formulario";
    }
?>
<?php

    $usuarios = array(
        array(
            "0" => "id",
            "username" => "Mr.Michi"
        ),
        array(
            "1" => "id",
            "username" => "Retax"
        ),
        array(
            "2" => "id",
            "username" => "ChBrus"
        ),
    );

    $edad_de_pepito = 12;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar variables de PHP a JS</title>
</head>
<body>
    
<script>
    // Convierte un string a un JSON que JavaScript pueda manipular
    let users = JSON.parse('<?= json_encode($usuarios) ?>');
    console.log(users);

    let edadDePepito = <?= $edad_de_pepito ?>;
    console.log(edadDePepito);
</script>
<script src="./index.js"></script>
</body>
</html>
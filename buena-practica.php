<?php

    $tabla_del_9 = [];

    for ($i=1; $i <= 10; $i++) {
        $resultado = 9 * $i;
        $texto = "9 x $i = $resultado";
        array_push($tabla_del_9, $texto);
    }

    // La etiqueta pre le da un poquito de diseño al mostrar el arreglo
    // echo "<pre>";
    // var_dump($tabla_del_9);
    // echo "</pre>";

    // Está función literal mata la página XD de aquí en adelante nada va a cargar sí esto está activo
    // die();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No hagas esto</title>
</head>
<body>
    <h1>Tabla del 9</h1>
    <ul>
        <?php foreach($tabla_del_9 as $valor): ?>
            <li> <?= $valor ?> </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
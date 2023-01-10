<?php
    $nombre = "ChBrus";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprime texto y etiquetas con PHP</title>
</head>
<body>

    <?php
        // De esta forma se pueden escribir etiquetas desde PHP, pero es un poco larga y fea XD
        echo "<b>Hola mamá, estoy aprendiendo a integrar PHP con HTML</b>";
    ?>

    <!-- De esta otra es más "limpio" y entendible -->
    <?= "<i>Esta es otra forma de imprimir texto y etiquetas con PHP</i>" ?>

    <h1>¡Hola <?= $nombre ?>¡</h1>

</body>
</html>
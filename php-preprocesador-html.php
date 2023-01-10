<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡HTML desde PHP!</title>
</head>
<body>
    <h1>¡Hola, desde PHP usando HTML!</h1>

    <?php
        echo "<p>Ahora esto se está imprimiendo con PHP</p>"; 
        for($i = 0; $i < 10; $i++) {
            echo "<br/> \n";
        }
    ?>
    <p>Otra cosa</p>
</body>
</html>
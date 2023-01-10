<?php 

    $se_hablo_de_bruno = true;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>

    <h1>ESTO NO SE DEBE DE HACER</h1>
    <?php if($se_hablo_de_bruno) { 
        echo "<b>😮</b>";
    } else {
        echo "<b>😃</b>";
    }
    ?>

    <h1>Esto es aceptable</h1>
    <?php if($se_hablo_de_bruno) { ?>
        <b> 😮 </b>
    <?php } else { ?>
        <b>😃</b>
    <?php } ?>

    <h1>Esto sí deberías hacerlo</h1>
    <?php if($se_hablo_de_bruno): ?> 
        <b>😮</b>
    <?php else: ?> 
        <b>😃</b>
     <?php endif; ?>
</body>
</html>
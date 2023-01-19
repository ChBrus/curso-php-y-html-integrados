<?php

    echo '<pre>';
    var_dump($_FILES);
    echo '</pre>';

    $basename = $_FILES["image"]["name"];
    $tmp_image = $_FILES["image"]["tmp_name"];
    $images_root = "images/$basename";

    # Revisa si el archivo existe para no volver a sobreescribir el archivo guardado
    if(file_exists($images_root)) {
        return;
    }
    # Mueve el archivo temporal a una carpeta del proyecto
    move_uploaded_file($tmp_image, $images_root);
    
    echo $basename;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            width: 200px;
            height: 200px;
        }
    </style>
</head>
<body>
    <img src="<?= $images_root ?>" alt="<?= $basename ?>">
</body>
</html>
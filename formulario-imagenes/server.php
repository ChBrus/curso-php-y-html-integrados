<?php

    echo '<pre>';
    var_dump($_FILES);
    echo '</pre>';

    $basename = $_FILES["image"]["name"];
    $tmp_image = $_FILES["image"]["tmp_name"];
    $image = "./images/$basename";

    move_uploaded_file($tmp_image, $image);
    
    echo $basename;

?>
<?php
    /*
        De esta manera podemos tener una mejor arquitectura en el proyecto para poder
        dividirlo en distintos archivos
    */
    require("mail.php");

    function validate($name, $email, $subject, $message, $form) {
        return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
    }

    $status = "";

    if(isset($_POST["form"])) {
        if(validate(...$_POST)) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $subject = $_POST["subject"];
            $message = $_POST["message"];

            $body = "<meta charset=\"UTF-8\">$name <$email> te envia el siguiente mensaje: <br><br> $message";

            # Mandar el correo
            if(sendMail($subject, $body, $email, $name, true)) {
                $status = "succes";
            } else {
                $status = "danger";
            }

            # Manda 10 veces el mismo correo XD
            // for ($i=1; $i <= 10; $i++) { 
            //     sendMail($subject . " $i", $body, $email, $name, true);
            // }
        
        } else {
            $status = "danger";
        }
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario de contacto</title>
</head>
<body>
    <?php if($status == "danger"): ?>

        <div class="alert danger">
            <span>Surgió un problema</span>
        </div>
    
    <?php endif; ?>
    <?php if($status == "succes"): ?>

        <div class="alert success">
            <span>¡Mensaje enviado con éxito!</span>
        </div>
        
    <?php endif; ?>

    <form action="./" method="post">
        <h1>¡Contactanos!</h1>
        <div class="input-group">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name">
        </div>
        <div class="input-group">
            <label for="email">Correo:</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="input-group">
            <label for="subject">Asunto:</label>
            <input type="text" id="subject" name="subject">
        </div>
        <div class="input-group">
            <label for="message">Mensaje:</label>
            <textarea name="message" id="message" placeholder="Escriba aquí."></textarea>
        </div>

        <div class="button-container">
            <button name="form" type="submit">Enviar</button>
        </div>

        <div class="contact-info">
            <div class="info">
                <span><i class="fa-solid fa-location-dot"></i> 13 Saw Mill Circle, North Olmested.</span>
            </div>
            <div class="info">
                <span><i class="fa-solid fa-phone-volume"></i> +1 123 456 7890</span>
            </div>
        </div>
    </form>
    <script src="https://kit.fontawesome.com/fc9d842ca6.js" crossorigin="anonymous"></script>
</body>
</html>
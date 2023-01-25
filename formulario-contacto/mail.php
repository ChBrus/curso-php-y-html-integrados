<?php
    # Con esto se está usando la librería PHPMailer
    require("vendor/autoload.php");

    /*
        Importar clases PHPMailer en el espacio de nombres global
        Estos deben estar en la parte superior de su secuencia de comandos, no dentro de una función
    */
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    function sendMail($subject, $body, $email, $name, $html = false) {
        try {
            # Configuración inicial de nuestro servidor de correos
            $correo = substr($email, strpos($email, '@') + 1);

            if($correo != "gmail.com") {
                return false;
            }

            $phpmailer = new PHPMailer();
            $phpmailer->isSMTP();
            
            # Intento de aceptar cualquier tipo de corre, pero se tienen que hacer cosas más complicadas bro :'c
            // if(substr($correo, strpos($correo, '.')) == '.edu.mx')
            //     $phpmailer->Host = 'smtp.gmail.com';
            // else
            //     $phpmailer->Host = 'smtp.' . $correo;

            $phpmailer->Host = 'smtp.gmail.com';    #Host del gmail
            $phpmailer->SMTPAuth = true;
            $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; #Habilitan la encriptación para que todos los datos viajen seguros
            $phpmailer->Port = 465; # Puerto que tiene seguiridad al enviar correos
            $phpmailer->Username = 'cbruno.carrillo@gmail.com'; #Tu Gmail
            $phpmailer->Password = 'becbikrnrsrpytim';
    
            // Añadiendo destinatarios
            $phpmailer->setFrom('mark@facebook.com', 'Mark Zuckerberg'); #Quien lo envía
            $phpmailer->addAddress($email, $name);  #Quien lo recibe
    
            // Definiendo el contenido de mi email
            $phpmailer->isHTML($html);              //Set email format to HTML
            $phpmailer->Subject = $subject;
            $phpmailer->Body    = $body;
    
            // Mandar el correo
            $phpmailer->send();
        } catch (Exception $ex) {
            return false;
        }
    }

?>
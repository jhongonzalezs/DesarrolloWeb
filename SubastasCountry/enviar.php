<!DOCTYPE html>
<html>
<head>
	<title>Envío de mails con PHP</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
        $cuerpo = '
        <!DOCTYPE html>
        <html>
        <head>
         <title></title>
        </head>
        <body>
        <h4>Bienvenido</h4>
        </body>
        </html>';
        //para el envío en formato HTML
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        //dirección del remitente
        $headers .= "From: 'Jhon Gonzalez' <'SubastasCountry@gmail.com'>\r\n";
        //Una Dirección de respuesta, si queremos que sea distinta que la del remitente
        $headers .= "Reply-To: 'SubastasCountry@gmail.com'\r\n";
        //Direcciones que recibián copia
        //$headers .= "Cc: ejemplo2@gmail.com\r\n";
        //direcciones que recibirán copia oculta
        //$headers .= "Bcc: ejemplo3@yahoo.com\r\n";
        if(mail('SubastasCountry@gmail.com','Informacion',$cuerpo,$headers)){
    		echo "<script>alert('Mensaje Enviado Correctamente.');</script>";
    	}else{
    		echo "<script>alert('No se pudo enviar el mail, por favor verifique su configuracion de correo SMTP saliente.');</script>";
    	}
?>
</body>
</html>
<!--
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Phpmailer/Exception.php';
require 'Phpmailer/PHPMailer.php';
require 'Phpmailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;					                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'SubastasCountry@gmail.com';                     // SMTP username
    $mail->Password   = 'SubastasCountry2019';                               // SMTP password
    $mail->SMTPSecure = 'TLS';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('subastascountry@gmail.com', 'Subastas Country');
    $mail->addAddress('subastascountry@gmail.com');     // Add a recipient


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Informacion Adicional';
    $mail->Body    = 'Bienvenido a Subastas Country.';

    $mail->send();
    echo 'Mensaje Enviado';
} catch (Exception $e) {
    echo "Hubo un error: {$mail->ErrorInfo}";
}-->
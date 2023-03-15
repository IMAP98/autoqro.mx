<?php

$asunto = $_POST['asuntoCont'];
$nombre = $_POST['nomCompCont'];
$email = $_POST['emailCont'];
$mensaje = $_POST['mensajeCont'];

$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n Correo: $email\n Mensaje:\n $mensaje";

if ($_POST['enviarFormCont']) {

    if (mail($email, $asunto , $msjCorreo, $header)) {

    echo "<script language='javascript'>
    alert('Mensaje enviado, muchas gracias por contactar con nosotros.');
    </script>";

    } else {

        echo 'Falló el envio';
        
    }
}

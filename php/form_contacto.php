<?php

if (isset($_POST["enviarFormCont"])) {

    if (!empty( isset($_POST["nomCompCont"])) && !empty( isset($_POST["emailCont"])) &&!empty( isset($_POST["asuntoCont"])) &&!empty( isset($_POST["mensajeCont"]))) {

        $asunto = $_POST["asuntoCont"];
        $mensaje = "Correo electrónico: " . $_POST["emailCont"] . "\r\n";
        $mensaje .= "Nombre: " . $_POST["nomCompCont"] . "\r\n";
        $mensaje .= "Mensaje: " . $_POST["mensajeCont"];

        $header = "From: noreply@example.com" . "\r\n";
        $header .= "Reply-To: noreplay@example.com" . "\r\n";
        $header .= "X-Mailer: PHP/" . phpversion();

        $email = @mail("customer.service@autoqro.mx", $asunto, $mensaje, $header);

        if ($email) {
            echo "<script> 
                    Swal.fire({
                        icon: 'success',
                        title: Información enviada correctamente.
                    });
                  </script>";
        } else {
            echo "<script> 
                    Swal.fire({
                        icon: 'error',
                        title: Se produjo un error, por favor inténtalo más tarde.
                    });
                  </script>";
        }

    }

}

?>
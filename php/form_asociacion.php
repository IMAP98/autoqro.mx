<?php
   
    //Construyo el cuerpo del mensaje    
    $message            = "Nombre: " . $_POST["nomEmpSol"] . "\n";
    $message            .= "Productos y Servicios: " . $_POST["proSerSol"] . "\n";
    $message            .= "Principales clientes: " . $_POST["prinCliSol"] . "\n";
    $message            .= "Ubicación y número de plantas: " . $_POST["ubiPlanSol"] . "\n";
    $message            .= "Email: " . $_POST["emailSol"] . "\n";
   
    //Obtener datos del archivo subido 
    $file_tmp_name      = $_FILES['presCorpSol']['tmp_name'];
    $file_name          = $_FILES['presCorpSol']['name'];
    $file_size          = $_FILES['presCorpSol']['size'];
    $file_type          = $_FILES['presCorpSol']['type'];

    //Leer el archivo y codificar el contenido para armar el cuerpo del email
    $handle              = fopen($file_tmp_name, "r");
    $content             = fread($handle, $file_size);
    fclose($handle);
    $encoded_content     = chunk_split(base64_encode($content));
   
    $boundary            = md5(uniqid(time()));
  
    //Encabezados
    $headers             = "MIME-Version: 1.0\r\n"; 
    $headers            .= "From: noreply@example.com" . "\r\n";
    $headers            .= "Reply-To: noreplay@example.com" . "\r\n";
    $headers            .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n";
           
    //Texto plano
    $body               = "--$boundary\r\n";
    $body               .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
    $body               .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
    $body               .= chunk_split(base64_encode($message)); 
           
    //Adjunto
    $body               .= "--". $boundary. "\r\n";
    $body               .="Content-Type:". $file_type. " name=".$file_name."\r\n";
    $body               .="Content-Disposition: attachment; filename=".$file_name."\r\n";
    $body               .="Content-Transfer-Encoding: base64\r\n";
    $body               .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
    $body               .= $encoded_content; 
    
    //Enviando el mail
    $sentMail = mail("i.arteaga@autoqro.mx", "AUTOQRO.MX - Solicitud de afiliación", $body, $headers);

    if($sentMail){       

        echo"<p style='color:green; text-align: center; margin-top: 100px;'>
            Formulario enviado, revisar el Email.</center></p>";
            
    }else{

        echo "<h2>Se produjo un error y su pedido no pudo ser enviado</h2>";
        
    }  

?>
<?php 

// Busco los datos del formulario:
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $domicilio = $_POST['domicilio']; 
    $telefono = $_POST['telefono']; 
    $pais = $_POST['pais'];
	
	//Ahora preparo el mail para enviar por PHP:
	$destinatario = "martin.rojas@davinci.edu.ar"; //adonde quiero que lleguen los mails, mi correo

   	$headers = "From: \"" . $apellido. ", " . $nombre . "\" <" . $email . ">\n"; //quien lo envia (seg{un el form
   	$asunto = "Consulta desde formulario web de: " . $apellido; //El asunto del mail
	//Ahora armo el cuerpo del correo a enviar:

	$cuerpo = "Nombre: " . $nombre . " | Apellido: " . $apellido . "\r\n";
	$cuerpo .= "Email: " . $email . "\r\n";
	$cuerpo .= "Domicilio: " . $domicilio . "\r\n";
	$cuerpo .= "Teléfono: " . $telefono . "\r\n";
 	$cuerpo .= "País: " . $pais . "\r\n";
  	$cuerpo .= "Mensaje: \r\n" . $mensaje . "\r\n";
   	$cuerpo .= "----Fin del mensaje----";
   
   	mail($destinatario, $asunto, $cuerpo, $headers);
    include "mailenviado.php"; //Quiero que apresca una pagina que avise que se envio el mensaje
?>
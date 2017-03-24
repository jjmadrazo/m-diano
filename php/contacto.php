<?php

// Variables
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];
$from = $correo;

// Mail donde se reive el formulario
$to = "contacto@mediacionesdiano.com.ar";

// Asunto
$subject = "Contacto desde Mediaciones Diano Web";

// Cuerpo del mensaje
$emailbody = "";
$emailbody .= "Nombre: " . $nombre . "\n";
$emailbody .= "Correo electrónico: " . $correo . "\n";
$emailbody .= "mensaje: " . $mensaje . "\n";

// UTF-8 
$header = "";
$header .= "From:" . $from . " \n";
$header .= "Content-Type:text/plain;charset=utf-8";


// Envio del correo
$success = mail($to, $subject, $emailbody, $header);

// Redireccionamiento despues de enviar el mensaje
if ($success){
  echo "<script language='javascript'>alert('Mensaje enviado');</script>";
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://www.mediacionesdiano.com.ar\">";
}
else{
  echo "<script language='javascript'>alert('Error, no se pudo enviar el mensaje');</script>";
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://www.mediacionesdiano.com.ar\">";
}
?>
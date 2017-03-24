<?php

// Variables

//REPRESENTANTE LEGAL
$nombre_rep = $_POST['nombre_apellido_rep'];
$domicilio_rep = $_POST['domicilio_rep'];
$t_f_rep = $_POST['t_f_rep'];
$telefono_rep = $_POST['telefono_rep'];
$calidad_rep = $_POST['calidad_rep'];
$email_rep = $_POST['email_rep'];
//DATOS DEL REQUIRENTE
$nombre_req = $_POST['nombre_apellido_req'];
$documento_req = $_POST['documento_req'];
$no_documento_req = $_POST['no_documento_req'];
$domicilio_req = $_POST['domicilio_req'];
//DATOS DEL REQUERIDO
$nombre_apellido_requerido = $_POST['nombre_apellido_requerido'];
$domicilio_requerido = $_POST['domicilio_requerido'];
//OBJETO DE LA MEDIACION
$objeto_mediacion = $_POST['objeto_mediacion'];
//MONTO DE LA MEDIACION
$monto_mediacion = $_POST['monto_mediacion'];
//ACLARACIONES
$aclaraciones = $_POST['aclaraciones'];


// Mail donde se recive el formulario
$para = "contacto@mediacionesdiano.com.ar";

// Asunto
$asunto = "Desde Mediaciones Diano Web - Representado por: " . $nombre_rep;

// Cuerpo del mensaje

//REPRESENTANTE LEGAL
$cuerpo_mensaje = "DATOS DEL REPRESENTANTE \n";
$cuerpo_mensaje .= "Nombre: " . $nombre_rep . "\n";
$cuerpo_mensaje .= "Domicilio: " . $domicilio_rep . "\n";
$cuerpo_mensaje .= "Tº y Fº: " . $t_f_rep . "\n";
$cuerpo_mensaje .= "Teléfono: " . $telefono_rep . "\n";
$cuerpo_mensaje .= "Calidad en la que asiste: " . $calidad_rep . "\n";
$cuerpo_mensaje .= "Correo electrónico: " . $email_rep . "\n\n";
//DATOS DEL REQUIRENTE
$cuerpo_mensaje .= "DATOS DEL REQUIRENTE" . "\n";
$cuerpo_mensaje .= "Nombre: " . $nombre_req . "\n";
$cuerpo_mensaje .= "Tipo de Documento: " . $documento_req;
$cuerpo_mensaje .= " Nº:" . $no_documento_req . "\n";
$cuerpo_mensaje .= "Domicilio Real: " . $domicilio_req . "\n\n";
//DATOS DEL REQUERIDO
$cuerpo_mensaje .= "DATOS DEL REQUERIDO" . "\n";
$cuerpo_mensaje .= "Nombre y Apellido: " . $nombre_apellido_requerido . "\n";
$cuerpo_mensaje .= "Domicilio Real: " . $domicilio_requerido . "\n\n";
//OBJETO DE LA MEDIACION
$cuerpo_mensaje .= "Objeto de la mediación: " . $objeto_mediacion . "\n\n";
//MONTO DE LA MEDIACION
$cuerpo_mensaje .= "Monto de la mediación: $ " . $monto_mediacion . "\n\n";
//ACLARACIONES
$cuerpo_mensaje .= "DATOS COMPLEMENTARIOS O ACLARACIONES" . "\n";
$cuerpo_mensaje .= $aclaraciones;


//CABECERAS
$cabeceras  = "";
$cabeceras .= "Content-type: text/plain; charset=utf-8" . "\n";
$cabeceras .= "From: Mediaciones Diano Web <contacto@mediacionesdiano.com.ar>";

// Envio del correo
$success = mail($para, $asunto, $cuerpo_mensaje, $cabeceras);

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
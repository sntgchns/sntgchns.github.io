<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: " . $nombre . " " . $apellido ." \r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Teléfono de contacto: " . $celular . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el: " . date('d/m/Y', time());

$para = 'santiagochinas@hotmail.com';
$asunto = 'Contacto desde mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:gracias.html");
?>
<?php 

//Lamando a los campos

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

//Datos para el correo

$destinatario = "bd2312.h-@outlook.com";
$asunto = "Contacto desde Fox Intelligence";

$carta = "De: $name \n";
$carta .= "Correo: $email \n";
$carta .= "Mensaje: $message \n";

//Enviar Mensaje

mail($destinatario, $asunto $carta);

?>

<?php

$destino = "brendali.dary@gmail.com";
$name = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['correo'];
$phone = $_POST['telefono'];
$message = $_POST['mensaje'];
$contenido = "Nombre: " . $name . $apellido . "\nCorreo: " . $email . "\nTelèfono: " . $phone . "\nMensaje: " . $message;
mail($destino, "Contacto", $contenido);
header("Location:gracias.html");

?>
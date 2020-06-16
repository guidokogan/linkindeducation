<?php

$name = $_POST['nombre'];
$email = $_POST['mail'];
$pais = $_POST['pais'];
$message = $_POST['mensaje'];

$formcontent="De: $name \nDesde: $pais \nMensaje: $message";
$recipient = "contacto@revistamegatrade.com.ar";
$subject = "Contacto";
$mailheader = "De: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: enviado.html');
?>

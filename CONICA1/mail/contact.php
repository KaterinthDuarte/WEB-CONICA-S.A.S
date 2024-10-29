<?php
if(empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$m_subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$to = "ConicaSAS3@gmail.com"; //correo electronico//
$subject = "$m_subject:  $name";
$body = "Ha recibido un nuevo mensaje desde el formulario de contacto de su sitio web.\n\n"."Aquí están los detalles:\n\nNombre: $name\n\n\nEmail: $email\n\nSubject: $m_subject\n\nMensaje: $message";
$header = "De: $email";
$header .= "Respuesta a: $email";	

if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>

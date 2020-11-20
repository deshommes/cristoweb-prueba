<?php
$destinatario = 'jacquideshommes@gmail.com';
$name = $_POST ['name'];
$email = $_POST ['email'];
$message = $_POST ['message'];


$header ="enviado desde la pagina cristoweb";
$messagecomplet = $message."\nAtentamente:" . $name;

mail($destinatario, $email, $messagecomplet, $header);
echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='http://127.0.0.1:5501/principal.html'\",1000) </script>";

?>


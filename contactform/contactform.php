<?php

$name = $_POST['name'];
$msg = $_POST['msg'];
$asunto = $_POST['asunto'];

$to = 'osmel@maquillaje.biz'; //cosmeticososmel

$subject = 'Mensaje desde pagina web';
$message = "Nombre: $name"."\nAsunto: $asunto"."\nMensaje: $msg";

$headers = "From:".$_POST['email'];


mail($to, $subject, $message, $headers);

header('location:index.html');


?>


<?php

$name = $_POST['name'];
$msg = $_POST['msg'];
$asunto = $_POST['asunto'];

$to = $_POST['email'];
$subject = 'Mensaje desde pagina web';
$message = "Nombre: $name"."\nAsunto: $asunto"."\nMensaje: $msg";

$headers = "From: osmel@maquillaje.biz";

mail($to, $subject, $message, $headers);

//hay un script que me esta realizando esto por ayax 


?>


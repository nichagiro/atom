<?php

$name = $_POST['name'];
$msg = $_POST['msg'];
$asunto = $_POST['asunto'];

$to = $_POST['email'];
$subject = 'Mensaje desde pagina web';
$message = "Nombre: $name"."\nAsunto: $asunto"."\nMensaje: $msg";

$headers = "From: nicolaschamorro@cisde.co";

mail($to, $subject, $message, $headers);

// header('Location:enviado.html');

// OTRA MANERA

// echo'<script type="text/javascript">
//         alert("Tarea Guardada");
//         window.location.href="index.html";
//         </script>';

?>


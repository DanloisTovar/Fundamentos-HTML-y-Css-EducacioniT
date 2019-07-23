<?php

// variables para el correo:
$destino = 'danlois.tovar@gmail.com';
$correo = $_POST['correo']; 
$consulta = $_POST['consulta'];
$asunto = "Consulta de la web";

// cuerpo del mail:
$contenido = "Correo: \n " . $correo . "\n \n Estas es la consulta : \n" . $consulta;

// envio de mail:
mail($destino,$asunto,$contenido);


?>
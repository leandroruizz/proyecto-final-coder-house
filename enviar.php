<?php
$destino = "purenightcycle@gmail.com"
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$instagram = $_POST["instagram"];
$mensaje = $_POST["mensaje"];
$contenido = "nombre: " . $nombre . "\ncorreo: " . $correo ."\ninstagram:" . $instagram . "\nmensaje: " . $mensaje;
mail($destino,"contacto", $contenido);
header("location:enviado.html")
?>
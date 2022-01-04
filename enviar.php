<?php
$destino="mvbeltrang@gmail.com";
$nombre=$_POST["nombre"];
$telefono=$_POST["telefono"];
$email=$_POST["email"];
$mensaje=$_POST["mensaje"];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $email . "\nTelefono: " . $telefono . "\nMensje: " . $mensaje;
mail($destino, "contacto", $contenido);
header("Location:gracias.html")
?>
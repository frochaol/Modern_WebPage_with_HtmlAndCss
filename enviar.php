<?php
    $destino = "informes@ejvasesorestributarios.com";   
    $nombre = $_POST["fnombre"];
    $correo = $_POST["fcorreo"];
    $empresa = $_POST["fempresa"];
    $servicios = $_POST["servicios"];
    $mensaje = $_POST["fmensaje"];
    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nEmpresa: " . $empresa . "\nServicio: " . $servicios . "\nMensaje: " . $mensaje;
    mail($destino, "Contacto", $contenido);
    header("Location:index.html");
?>
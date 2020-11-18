<?php
    $destino = "d4g3r0@gmail.com";
    $asunto = "Desde dagertec.com";
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["mail"];
    $mensaje = $_POST["mensaje"];

    $contenido = "Nombre: " . $nombre . " " . $apellido . "\nEmail: " . $email . "\nMensaje: " . $mensaje;

    header("Enviado desde la Pagina Web");

    mail($destino,$asunto,$contenido);

    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?> 
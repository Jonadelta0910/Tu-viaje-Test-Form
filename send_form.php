<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    $to = "Jonnadelta0910@gmail.com";  // Cambia esto al correo donde quieras recibir los mensajes
    $subject = "Nuevo mensaje de contacto de: " . $nombre;
    $body = "Nombre: $nombre\nTeléfono: $telefono\nCorreo: $correo\nMensaje:\n$mensaje";
    $headers = "From: $correo";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>

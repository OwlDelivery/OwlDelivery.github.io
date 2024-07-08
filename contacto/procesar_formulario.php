<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre=$_POST["nombre"];
    $email=$_POST["email"];
    $asunto=$_POST["asunto"];
    $mensaje=$_POST["mensaje"];

    $to = "blackowl390@gmail.com, Mjulianne474@gmail.com";  // Reemplaza con los correos a los que quieres enviar el mensaje
    $subject = 'Nuevo mensaje de contacto: ' . $asunto;
    $body = "Nombre: $nombre\nCorreo Electrónico: $email\nAsunto: $asunto\nMensaje:\n$mensaje";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>
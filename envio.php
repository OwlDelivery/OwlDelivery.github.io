<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'nunezeduardo603@gmail.com';
    $subject = 'Nuevo comentario recibido';

    $correo = $_POST['correo'];
    $comentario = $_POST['comentario'];

    $message = "Correo Electrónico: $correo\n\n";
    $message .= "Comentario:\n$comentario";

    $headers = "From: $correo";


   if (mail($to, $subject, $message, $headers)) {
        echo "Correo enviado con éxito.";
    } else {
        echo "Hubo un error al enviar el correo.";
    }
}
?>
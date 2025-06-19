<?php
// 1.- PHP guarda la info que el usuario escribió en el formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$comentario = $_POST["comentario"]; 

// 2.- PHP arma toda la información necesaria para enviar el mail
$to = "anahi.foresi@educacionit.com";
$email_subject = "Nuevo mensaje de la web";
$email_body = "Haz recibido un nuevo mensaje
            \n Nombre: $nombre
            \n Correo: $email
            \n Mensaje o consulta: $comentario"
$headers = "From: $email"; 

// 3.- PHP le dice al servidor manda el mail que acabo de crear
mail($to, $email_subject, $email_body, $headers);
?>
<a href="index.html">Volver</a>
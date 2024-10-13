<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$nombre = htmlspecialchars($_POST['nombre']);
		$email = htmlspecialchars($_POST['email']);
		$telefono = htmlspecialchars($_POST['telefono']);
		$mensaje = htmlspecialchars($_POST['mensaje']);

		$to = "rocko2021.13leo@gmail.com"; // Cambia esto por tu dirección de correo
		$subject = "Nuevo mensaje de contacto";
		$body = "Nombre: $nombre\nEmail: $email\nTeléfono: $telefono\nMensaje: $mensaje";
		$headers = "From: $email";

		if (mail($to, $subject, $body, $headers)) {
        		echo "Mensaje enviado con éxito.";
		} 
		else {
  		      	echo "Error al enviar el mensaje.";
		}
		else {
    			echo "Método de solicitud no válido.";
		}
	}
?>

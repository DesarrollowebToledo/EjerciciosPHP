Crearemos un formulario de contacto  en un archivo php

Tendrá los siguientes campos:
* Nombre
* email
* Asunto
* Comentarios
* Botón de envío

lo procesaremos en la misma página

Enviaremos la información a un correo electrónico mediante la función mail de php

````
<?php
$para      = 'nobody@example.com';
$titulo    = 'El título';
$mensaje   = 'Hola';
$cabeceras = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
?>
´´´´

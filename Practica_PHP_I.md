#Creación de una página web autoadministrable con PHP
El objetivo de la práctica será crear una web autoadministrable por ellos mismos a un grupo musical. 
Para ello deberemos crear una web con un frontend publico y un backend de administración gestionado por sesiones.
El desarrollo lo realizaremos utilzando github como sistema de control de versiones.

##Deberemos tender a incorporar el máximo de elementos autoadministrables

Tras elaborar el frontend utilizando includes.php , procederemos a crear la parte de administración.

1.    estructura de archivos

   ##Frontend
  * /index.php // alojará una descripción y un  pequeño vídeo  de presentación del grupo alojado en youtube.
  * /galeria.php // mostrará,al menos, seis imágenes del grupo 
  * /librovisitas.php // contendrá un formulario y los comentarios que dejan los usuarios que llegan a la página que permitirá a los usuarios dejar sus comentarios.
  * /contacto.php // tendrá un formulario que nos mande mensajes por email
  * /includes/header.php // imagen fija de 1200x300px
  * /includes/menu.php // botonera que incluirá galería, contacto,libro de visitas, administración
  * /includes/sidebar.php // lista de enlaces de referencia o imágenes de fans, o imágenes de grupos afines
  * /includes/footer.php // deberá mostrar dinámicamente el año de creación junto con el año actual si no es el actual... además un enlace hacia la página web del webmaster, mediante un icono de fontawesome.
  * /includes/functions.php
  * /imagesheader
  * /imagesgaleria
   ## Archivos comunes
  * /css/main.css // además de usar bootstrap, podemos en esta página incluir nuestros estilos (al menos 1)
  * /js/main.js // además de incluir jquery podemos aquí colocar nuestros pequeños script (al menos 1)
 
  ##Backend

  * /admin/index.php // incluirá un formulario que perminta iniciar sesión de administración
  * /admin/adminportada.php // mediante un formulario permitirá variar el texto de descripción del grupo y el link al vídeo del grupo 
  * /admin/header // deberá administrar las imágenes que salen en el header
  * /admin/adminlibrovisitas.php // permitirá  eliminar o modificar algún comentario
  * /admin/admingaleria.php // permitirá añadir o eliminar imágenes de la galería
  * /admin/cerrarsesion.php // cerrará la sesión de administración y nos permitirá volver al index.
  * /admin/includes/header
  * /admin/includes/footer
  * /admin/includes/menu
  * /admin/includes/password.txt
 
  ##Publicación
Deberemos publicar la página en hostinger accesible desde nuestra página personal de github 





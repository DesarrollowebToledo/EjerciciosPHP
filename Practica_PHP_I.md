#Creación de una página web autoadministrable con PHP
##Objetivos
*  Utilizar los conceptos básicos de PHP
*  Aprender a distribuir la estructura de la página en múltiples archivos de php que se combinen convenientemente mediante includes
*  Aprender a gestionar los datos de un formulario con PHP grabándolos en .txt
*  Crear funciones que permitan reutilizar el código
*  Gestionar ficheros y directorios desde PHP
*  Usar sesiones y cookies

##Objeto-Modelo
El objeto de la práctica será crear una aplicación web autoadministrable :
*  que muestre fotos de un usuario (grupo musical...) 
*  que recoja una breve descripción del usuario
*  que recoja valoraciones de los usuarios anónimamente sobre las fotos (libro de visitas)
##Proceso de Elaboración
*  deberemos crear un frontend  
*  un backend de administración del frontend gestionado por sesiones.
*  Deberemos a tender a incorporar el máximo de elementos autoadministrables
*  El desarrollo lo realizaremos utilzando github como sistema de control de versiones.

##Modelo de frontend
![modelo frontend](https://dl.dropboxusercontent.com/u/37685212/img/plantillafrontend-8.jpg)

##Deberemos tender a incorporar el máximo de elementos autoadministrables


## Modelo de estructura de archivos

   ###Frontend
   
   Estos archivos son sólo sugerencias, debemos utilizar los que  estimemos necesarios
 
  * /index.php // incorporará el máximo de includes a los módulos según la propuesta de frontend
  
>header

  * /includes/header.php // imagen  de 1200x300px (opcional crear un script en el archivo o directorio functions que sea aleatoria)
  * /include/login.php // recojerá el formulario de login
  * /includes/menu.php // botonera que incluirá galería, contacto,libro de visitas... _Este menú es opcional, sólo lo haremos si lo estimamos necesarios para una mejor navegación en la web_
>sidebar
  * /includes/sidebar.php // recogerá los elementos que hayamos puesto en el sidebar.
  * /includes/galeria.php // mostrará,al menos, seis imágenes del grupo 
  */ includes/formcomentarios 
  * /include/comentarios.php
  * /includes/librovisitas.php // contendrá un formulario y los comentarios que dejan los usuarios que llegan a la página que permitirá a los usuarios dejar sus comentarios.
  * /includes/footer.php // deberá mostrar dinámicamente el año de creación junto con el año actual si no es el actual... además un enlace hacia la página web del webmaster, mediante un icono de fontawesome.
  * /includes/functions.php
  * /imagesheader
  * /imagesgaleria
   ### Archivos comunes
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





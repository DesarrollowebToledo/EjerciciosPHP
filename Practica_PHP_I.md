#Creación de una página web autoadministrable con PHP

_Esta práctica intentará realizar una aplicación web con los contenidos desarrollados durante un mes sobre PHP. En una sucesivas prácticas se potenciará con contenidos referentes a OPP en PHP  (Clases) y el uso de PHP y Bases de Datos_

##Objetivos
*  Utilizar los conceptos básicos de PHP (variables, strings, arrays, secuencias de control, funciones) y  gestión de ficheros...
*  Aprender a distribuir la estructura de la página en múltiples archivos de php que se combinen convenientemente mediante includes
*  Aprender a gestionar los datos de un formulario con PHP 
*  Crear funciones que permitan reutilizar el código y usar funciones que vienen en el núcleo de php
*  Gestionar ficheros y directorios desde PHP
*  Usar sesiones y cookies

##Objeto: Requisitos de la aplicación
El objeto de la práctica será crear una aplicación web autoadministrable por un cliente :
*  que muestre fotos de un usuario (grupo musical...) 
*  que recoja una breve descripción del usuario
*  que recoja valoraciones de los usuarios públicos anónimamente sobre las fotos (libro de visitas)
*  que pueda autoadministrarse por un usuario-cliente con básicos o mínimos conocimientos del web
##Proceso de Elaboración
*  deberemos crear un frontend, estático  
*  un backend de administración de ese frontend gestionado por sesiones.
*  Deberemos a tender a incorporar el máximo de elementos autoadministrables con contenidos que pueden variar dependiendo de las acciones de los dos tipos de usuario
*  El desarrollo lo realizaremos utilzando github como sistema de control de versiones.
*  Nos asociaremos en equipos de dos personas.

##Modelo de frontend
![modelo frontend](https://dl.dropboxusercontent.com/u/37685212/img/plantillafrontend-8.jpg)

>Deberemos tender a incorporar el máximo de elementos autoadministrables


## Modelo de estructura de archivos

   ###Frontend. La vista _
   
   Estos archivos son sólo sugerencias, debemos utilizar los que  estimemos necesarios
 
  * /index.php // incorporará el máximo de includes a los módulos según la propuesta de frontend
  
>header

  * /includes/header.php // imagen  de 1200x300px (opcional crear un script en el archivo o directorio functions que sea aleatoria)
  * /include/login.php // recojerá el formulario de login
  * /includes/menu.php // botonera que incluirá galería, contacto,libro de visitas... _Este menú es opcional, sólo lo haremos si lo estimamos necesarios para una mejor navegación en la web, aunque siempre es bueno disponer de un menú que nos ayude a la navegación_

>main
 * /includes/galeria.php // _mostrará,al menos, seis imágenes del grupo anque el sript puede aceptar más_
 * /includes/descripcion.php //_mostrará una pequeña descripción sobre si mismo del usuario. Si nos atravemos podría ser incluso una lista de conciertos..._
 
>sidebar
  * /includes/sidebar.php // _recogerá los elementos que hayamos puesto en el sidebar_
  * /include/formcomentarios.php // _recogerá un formulario en el que se puedan añadir visitas_
  * /includes/libvisitas.php // _recogerá las el nombre y el comentario de los usuarios que hayan realizado las visitas_
 
>footer
  * /includes/footer.php // _deberá mostrar dinámicamente el año de creación junto con el año actual si no es el actual... además un enlace hacia la página web del webmaster, mediante un icono de fontawesome_
  
   ### Archivos comunes
  * /css/main.css // además de usar bootstrap, podemos en esta página incluir nuestros estilos (al menos 1)
  * /js/main.js // además de incluir jquery podemos aquí colocar nuestros pequeños script (al menos 1)
  * /img/ // el logo y las imagenes que utilicemos en el diseño. El resto de las imágenes ,autoadministrables, las pondremos en model
 
 
###functions //los archivos necesarios modularizando al máximo las functions que utilicemos. Serán controladores del público en general
*  funtions/procesarusuario.php
*  functions/procesarcom.php
*  functions/imagenrand.php // script que hará un rand sobre el directorio 'imgheaders' _pasandolo como argumento_
*  functions/galeria.php // script que mostrará las imágenes de un directorio 'imggaleria' _pasándolo como argumento_
*  functions/iniciosesion.php // recogerá los datos del formulario login y los cotejará con los que tenemos en un archivo y dará incio a una sesión (datos_usuario.txt)
*  functions/destruirsesion.php // cerrará sesión 
 
  ##Backend

  * /admin/index.php // Todos los archivos del directorio admin, deberán estar protegidos por sesión. Dará acceso a administrar todas y cada una de las posibilidades de administración. Estas se harán mediante los formularios oportunos Admin
  * /admin/adminportada.php // mediante un formulario permitirá variar el texto de descripción del grupo y el link al vídeo del grupo 
  * /admin/img_headers // deberá administrar las imágenes que salen en el header
  * /admin/adminlibrovisitas.php // permitirá  eliminar o modificar algún comentario
  * /admin/admingaleria.php // permitirá añadir o eliminar imágenes de la galería
  * /admin/cerrarsesion.php // cerrará la sesión de administración y nos permitirá volver al index.
  * /admin/includes/header
  * /admin/includes/footer
  * /admin/includes/menu
  * /admin/includes/password.txt
 
##Modelo _En el modelo ponemos todos los archivos relacionados con la persistencia de datos (txt, dbs, xml). En nuestro caso lo realizaremos mediante txt, más adelante lo haremos mediante una base de datos_

*  model/datos_usuario.txt
*  model/titulo_aplicación.txt
*  model/contenido_usuario.txt
*  model/comentarios.txt
*  /imgheaders/  // imagenes que luego podrán rotar en la cabecera
*  /imggaleria/  // imagenes que conformarán las imágenes  subidas por el usuario

##Publicación
*  Deberemos publicar la página en hostinger 
*  accesible mmediante un link del perfil de nuestra página personal de github 
*  El código fuente deberá estar alojado en github





Usando if e incorporando php en html
=========
Crearemos un sencillo programa que cargue dinámicamente imágenes cada vez que un visitante acceda a la página

1. Crear un html básico que incorpore una imagen
2. Cargar el root del ejercicio un directorio con tres imágenes
3. El nombre de la imagen y su extensión deben ser una variable en php
```
<img src="img/<?php $imagen ?>">
````
4.	Asignar  un valor aleatorio a $imagen entre '1 y 3' mediante la función rand(). 

5.	Dependiendo del valor obtenido mostrar una imagen u otra,

Nota:
Para ver si una variable es igual a cierto valor debemos plantear una condición similar a:

````
if ($valor==3){
  //algoritmo
}
````
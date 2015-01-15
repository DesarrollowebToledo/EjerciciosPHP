<!DOCTYPE HTML>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
 	</head>
	<body>
	<!--Definir una contante con la función define
Definir una constante con la palabra reservado const
Crear una constante con define y que de igual que la llamemos en mayúsculas y en minúsculas
Crear un string largo e imprimirlo en pantalla que recoja todas las constantes que hemos creado-->
		<?php
			define("PI","3.14");
			const CONSTANTE= "esto es una constante";
			define("constantenum","43",true);//si pones true da igual si es minuscula o mayuscula
			$texto="el numero pi ".PI." y lo siguiente sera una constante con const '".CONSTANTE."' y la ultima da igual si es matusculas o no al llamarla ".conSTaNTEnum;
			echo $texto;
		?>
	</body>
</html>
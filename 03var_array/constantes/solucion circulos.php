<!DOCTYPE HTML>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
 	</head>
	<body>
	<!--Realizaremos una aplicación que nos calcule la circunferencia o la superficie para un diámetro dado
* Define una constante del número pi, 
* crearemos una variable que acepte un número dado
* Mostraremos por pantalla mediante un string el perímetro de la circunferencia y la superficie del circulo -->
		<?php
			define("PI","3.1415");
			$radio=8;
			$area=PI*($radio^2);
			$perimetro=2*PI*$radio;
			echo "El perímetro es: $perimetro </br> El area es: $area";
			
		?>
	</body>
</html>
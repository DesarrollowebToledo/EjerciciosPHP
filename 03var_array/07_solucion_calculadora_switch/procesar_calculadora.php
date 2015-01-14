<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Calculadora</title>
		<meta charset="UTF-8" />
	</head>

	<body>
		<?php
			$num1=$_POST['numero1'];
			$num2=$_POST['numero2'];
			$operacion=$_POST['operaciones'];
			switch($operacion){
				case "suma":
					$resultado=$num1+$num2;
					break;
				case "resta":
					$resultado=$num1-$num2;
					break;
				case "multiplicacion":
					$resultado=$num1*$num2;
					break;
				case "division":
					$resultado=$num1/$num2;
					break;
				case "modulo":
					$resultado=$num1%$num2;
					break;
				case deafult:
					echo "Los numeros introducidos no son validos";
			}
			echo $resultado;
		?>
	</body>
</html>
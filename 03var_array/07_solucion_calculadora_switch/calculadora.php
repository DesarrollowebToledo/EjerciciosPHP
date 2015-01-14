<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Calculadora</title>
		<meta charset="UTF-8" />
	</head>

	<body>
		<h1>Calculadora</h1>
		<form action="procesar_calculadora.php" method="POST">
		<input type="number" name="numero1"/><br><br>
		<input type="number" name="numero2"/><br><br>
		<label for="operaciones">Elige la operación a realizar</label>
		<select name="operaciones"> etiqueta de lista
			<option value="suma">+</option>
			<option value="resta">-</option>
			<option value="multiplicacion">*</option>
			<option value="division">/</option>
			<option value="modulo">%</option>
		</select><br><br><hr>
		<input type="submit" name="calcular" value="Calcular"/> <br><br>
		</form>
	</body>
</html>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset='utf-8'>
		<title>Formulario post</title>
	</head>
	<body>
	<?php
 		if(isset($_POST["submit"]))
 		{ 
 			$pass1=$_POST["password1"];
 			$pass2=$_POST["password2"];
 			if ($pass1==$pass2){
 				echo "La contraseñas coinciden";
 			}else{
 				echo "Las contraseñas no coinciden";
 			}
}
 
?>
		<h2>Identificación</h2>
		<br>
		<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
			<label for="nombre"> Nombre de usuario</label>
			<input type="text" name="nombre" placeholder="Escriba nombre de usuario" required="required"/>
			<br/>
			<div>
				<label for="password1">Password</label>
				<input type="password" name="password1" required="required"/>	
			</div>
			<div>
				<label for="password2">Repita password</label>
				<input type="password"name="password2" required="required"/>
			</div>
			<button type="submit" name="submit">Confirmar</button>
		</form>
		
	</body>
</html> 

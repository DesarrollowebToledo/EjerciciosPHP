<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Mi primera página en php</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	
	<body>
		<div class="container">
			<h1>Imagen random</h1>
			<?php 
				$imagen=rand(1,3);
			?>
			<img style="width:200px;"src="images/<?php echo "$imagen"?>.jpg" alt="imagen"/>
		</div>
	</body>

</html>
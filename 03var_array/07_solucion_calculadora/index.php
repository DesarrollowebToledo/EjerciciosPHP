<?php include ('header.php');?> 
	<div class='container'>
		<form method='post' action='procesar.php'>
			<label for='numero1' > Número 1 </label>
			<input name='numero1' type="text" placeholder="Escribe un número" required>
			<label> Número 2
			<input name='numero2' type='text' placeholder="Escribe un número" required>
			</label>
			<label for='operacion'> Operación </label>
			<select name='operacion'>
				<option value=""> </option>
				<option value='suma'> Sumar </option>
				<option value='restar'> Restar </option>
				<option value='multiplicar'> Multiplicar </option>
				<option value='dividir'> Dividir </option>
				<option value='modulo'> Módulo </option>
			</select>
			<br>
			<button> Enviar </button>
		</form>
		</div>
<?php include 'footer.php';?>
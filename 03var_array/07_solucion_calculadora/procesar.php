<?php  
	$numero1=$_POST['numero1'];
	$numero2=$_POST['numero2'];
	$operacion=$_POST['operacion'];
	if ($operacion==""){
		echo "No ha seleccionado ninguna operación";
	}
	if ($operacion=="suma") 
	{
		$resultado=$numero1+$numero2;
	}
	if ($operacion=="restar")
	{
		$resultado=$numero1-$numero2;
	}
	if ($operacion=="multiplicar")
	{
		$resultado=$numero1*$numero2;
	}
	if ($operacion=="dividir")
	{
		$resultado=$numero1/$numero2;
	}
	if ($operacion=="modulo")
	{
		$resultado=$numero1%$numero2;
	}
	if ($operacion!=="")
	{
		echo $resultado;
	}
?>

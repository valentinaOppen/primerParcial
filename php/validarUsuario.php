
<?php 


	echo("validando");
	
	session_start();
	$dni=$_POST['dni'];

	$retorno;

	if($dni>1000000 and $dni<99000000)
	{							
		
		$_SESSION['registrado']=$dni;
		$retorno="ingreso";
		
	}else
	{
		$retorno= "Dni ingresado incorrecto";
	}

	echo $retorno;

?>
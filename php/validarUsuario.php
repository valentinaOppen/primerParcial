<?php 


	session_start();

	$dni=$_POST['dni'];
	
	if($dni>1000000 and $dni<99000000)
	{									
		
		$_SESSION['registrado']=$dni;

		echo "ingreso";
	}
	else
	{
		echo "incorrecto";
	}
?>



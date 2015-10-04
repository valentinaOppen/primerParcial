<?php 
require_once("clases/AccesoDatos.php");
require_once("clases/voto.php");

$queHago=$_POST['queHacer'];

switch ($queHago) {


	case 'MostarLogin':
			include("partes/formLogin.php");
		break;
	

	default:
		# code...
		break;
}

 ?>
<?php 
require_once("clases/AccesoDatos.php");
require_once("clases/voto.php");

$queHago=$_POST['queHacer'];

switch ($queHago) {


	case 'MostarLogin':
			include("partes/formLogin.php");
		break;
	
	
	case 'MostrarGrilla':
			include("partes/formGrilla.php");
		break;
	
	case 'MostrarFormAlta':
			include("partes/formCd.php");
		break;
	case 'BorrarCD':
			$cd = new cd();
			$cd->id=$_POST['id'];
			$cantidad=$cd->BorrarCd();
			echo $cantidad;

		break;
	case 'GuardarCD':
			$cd = new cd();
			$cd->id=$_POST['id'];
			$cd->cantante=$_POST['cantante'];
			$cd->titulo=$_POST['titulo'];
			$cd->año=$_POST['anio'];
			$cantidad=$cd->GuardarCD();
			echo $cantidad;

		break;
	case 'TraerCD':
			$cd = cd::TraerUnCd($_POST['id']);		
			echo json_encode($cd) ;

		break;
	default:
		# code...
		break;
}

 ?>
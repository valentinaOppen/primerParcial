<?php 
require_once("clases/AccesoDatos.php");
require_once("clases/voto.php");

$queHago=$_POST['queHacer'];

switch ($queHago) 
{
	case 'MostrarLogin':
			include("partes/formLogin.php");
		break;
	
	case 'MostrarVotacion':
			include("partes/formVotacion.php");
		break;

	case 'GuardarVoto':
		
		var_dump($_POST);
		$voto = new voto();
		$voto->dni = $_SESSION['registado'];
		$voto->provincia = $_POST['provincia'];
		$voto->presidente = $_POST['presidente'];
		$voto->sexo = $_POST['sexo'];	
		$voto->InsertarElVoto();



		break;


	default:
		# code...
		break;
}

?>
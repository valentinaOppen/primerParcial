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
			
		$voto = new voto();		
		$voto->provincia = $_POST['provincia'];
		$voto->presidente = $_POST['presidente'];
		$voto->sexo = $_POST['sexo'];	
		$voto->dni = $_POST['dni'];
		$voto->localidad = $_POST['localidad'];
		$voto->domicilio = $_POST['domicilio'];
		$voto->GuardarVoto();
		break;

	case 'MostrarGrillaVotaciones':

		include("partes/grillaVotaciones.php");
		break;

	case 'TraerUnVoto':		
		$voto = voto::TraerUnVoto($_POST['id']);		
		echo json_encode($voto);		
		break; 

	case 'BorrarVoto':	
		$voto = new voto();	
		$voto::BorrarVotoPorId($_POST['id']);
		echo"borrado";
		break;

	case 'VerEnMapa':
		include("partes/formMapa.php");
		break;

	case 'guardarMarcadores':
		include("partes/descarga.php");
		break;


	default:
		# code...
		break;
}

?>
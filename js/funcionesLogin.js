function validarLogin()
{
	
	var varDni=$("#dni").val();

	var funcionAjax=$.ajax
	({
		url:"php/validarUsuario.php",
		type:"post",
		data:
		{
			dni:varDni
		}
	});

	
	funcionAjax.done(function(retorno)
	{
	
		if(retorno=="ingreso")
		{
			MostrarFormVotacion();
		}
		else
		{
			alert("Dni incorrecto");	
		}
	});
		
}




function desloguear()
{	
	var funcionAjax=$.ajax({
		url:"php/desloguearUsuario.php",
		type:"post"		
	});
	funcionAjax.done(function(retorno){
			
			MostrarLogin();
			
			
	});	
}


function validarLogin()
{
	
	var varDni=$("#dni").val();

	var funcionAjax=$.ajax
	({
		cache:false,
		url:"php/validarUsuario.php",
		type:"post",
		data:
		{
			dni:varDni
		}
	});

	
	funcionAjax.done(function(retorno)
	{		
		retorno = retorno.trim();
		if(retorno=="ingreso")
		{
			MostrarVotacion();
		}
		else
		{
			alert("Dni ingresado incorrecto");
			MostrarLogin();
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




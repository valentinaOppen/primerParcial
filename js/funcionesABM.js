
function BorrarVoto(idParametro)
{
	//alert(idParametro);
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"BorrarVoto",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno)
	{
		
		MostrarGrillaVotaciones();
		
	});
	
}



function EditarVoto(idParametro)
{
	
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"TraerUnVoto",
			id:idParametro
		}
	});
	
	funcionAjax.done(function(retorno)
	{

		var voto =JSON.parse(retorno);
		$("#dni").val(voto.dni);
		$("#provincia").val(voto.provincia);
		$("#sexo").val(voto.sexo);
		$("#presidente").val(voto.presidente);	
	});
	
	
	MostrarVotacion();
}


function GuardarVoto()
{
			
		var provincia=$("#provincia").val();
		var presidente=$("#presidente").val();
		var sexo=$("#sexo").val();
		var dni = $("#dni").val();		

		var funcionAjax=$.ajax
		({
			url:"nexo.php",
			type:"post",
			data:
			{
				queHacer:"GuardarVoto",				
				provincia:provincia,
				presidente:presidente,
				sexo:sexo,
				dni:dni
			}

		});

		funcionAjax.done(function(retorno)
		{
				MostrarGrillaVotaciones();
			
		});
		
}
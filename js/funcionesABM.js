
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
	MostrarVotacion();
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
		$("#sexo:checked").val(voto.sexo);
		$("#presidente").val(voto.presidente);	
		$("#localidad").val(voto.localidad);
		$("#domicilio").val(voto.domicilio);
	});
	
}


function GuardarVoto()
{

	var provincia=$("#provincia").val();
	var presidente=$("#presidente").val();
	var sexo=$('#sexo:checked').val();
	var dni = $("#dni").val();		
	var localidad=$("#localidad").val();
	var domicilio=$("#domicilio").val();

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
			dni:dni,
			localidad:localidad,
			domicilio:domicilio
		}

	});

	funcionAjax.done(function(retorno)
	{
		MostrarGrillaVotaciones();
		
	});
		
		/* 

	var sexo=$('input:radio [name=sexo]:checked').val();
	*/
}
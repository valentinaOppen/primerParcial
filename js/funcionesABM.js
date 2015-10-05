/*
function BorrarCD(idParametro)
{
	//alert(idParametro);
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"BorrarCD",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		Mostrar("MostrarGrilla");
		$("#informe").html("cantidad de eliminados "+ retorno);	
		
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
}

function EditarCD(idParametro)
{
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"TraerCD",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		var cd =JSON.parse(retorno);	
		$("#idCD").val(cd.id);
		$("#cantante").val(cd.cantante);
		$("#titulo").val(cd.titulo);
		$("#anio").val(cd.año);
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
	Mostrar("MostrarFormAlta");
}
*/

function GuardarVoto()
{
			
		alert("voto");
		var provincia=$("#provincia").val();
		var presidente=$("#presidente").val();
		var sexo=$("#sexo").val();


		var funcionAjax=$.ajax
		({
			url:"nexo.php",
			type:"post",
			data:
			{
				queHacer:"GuardarVoto",
				dni:dni,
				provincia:provincia,
				presidente:presidente,
				sexo:sexo
			}

		});

		funcionAjax.done(function(retorno)
		{
				/*MostrarListado();			*/
			
		});
		
}
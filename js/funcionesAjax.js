function MostrarLogin()
{
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostrarLogin"}
	});
	funcionAjax.done(function(retorno){
		
		$("#principal").html(retorno);			
	});	
}


function MostrarVotacion()
{
	
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostrarVotacion"}
	});
	funcionAjax.done(function(retorno){
		
		$("#principal").html(retorno);			
	});	
}

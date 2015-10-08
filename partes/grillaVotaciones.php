<script type="text/javascript">
$("#content").css('width', '900px');
</script>
<?php
	
	session_start();

	if(isset($_SESSION['registrado']))
	{
		require_once("clases/voto.php");
		require_once("clases/AccesoDatos.php");

		$votos = voto::TraerTodoLosVotos();	


	
?>

<table class="table" style=" background-color: beige;">
	<thead>
		<tr>
			<th>Dni</th>			
			<th>Sexo</th>
			<th>Presidente</th>
			<th>Provincia</th>
			<th>Localidad</th>
			<th>Domicilio</th>
			<th>Ver Mapa</th>
			<th>Editar</th>
			<th>Borrar</th>
		</tr>
	</thead>
	<tbody>
		<?php

			foreach($votos as $v)
			{
				$l= '"'.$v->provincia.'"'.',"'.$v->domicilio.'",'.'"'.$v->localidad.'",'.'"'.$v->id.'"';							

				echo 
				"
					<tr> 
						<td>$v->dni</td>						
						<td>$v->sexo</td>
						<td>$v->presidente</td>
						<td>$v->provincia</td>
						<td>$v->localidad</td>
						<td>$v->domicilio</td>
						<td><a onclick='VerEnMapa($l)' class='btn btn-success'> <span>&nbsp;</span>Ver Mapa</a></td>
						<td><a onclick='EditarVoto($v->id)' class='btn btn-warning'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
						<td><a onclick='BorrarVoto($v->id)' class='btn btn-danger'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span>Borrar</a></td>
					</tr>
				";
			}
		?>

	</tbody>
</table>



<?php 

}
else
{    
    echo"<h3>Debe estar registarado</h3>";?>

    <button onclick="MostrarLogin()" class="btn btn-lg btn-danger btn-block" type="button">Registrarme</button>
   
   
  <?php  }  ?>


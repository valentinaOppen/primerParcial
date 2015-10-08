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
			<th>Provincia</th>
			<th>Sexo</th>
			<th>Presidente</th>
			<th>Editar</th>
			<th>Borrar</th>
		</tr>
	</thead>
	<tbody>
		<?php

			foreach($votos as $v)
			{
				echo 
				"
					<tr> 
						<td>$v->dni</td>
						<td>$v->provincia</td>
						<td>$v->sexo</td>
						<td>$v->presidente</td>
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


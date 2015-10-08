<script type="text/javascript">
$("#content").css('width', '600px');
</script>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">

 
<?php 
 
session_start();

if(isset($_SESSION['registrado']))
{  
  ?>
    <div id="formVotacion" class="container">

      <form  class="form-ingreso" onsubmit="GuardarVoto();return false;">
        <h4 class="form-ingreso-heading">Ingrese su Voto</h4>

        <label for="dni" class="sr-only">Provincia</label>
           <input type="text" id="provincia" class="form-control" placeholder="provincia"></input>
        <br>

        <label for="dni" class="sr-only">Presidente</label>
        <select class="form-control" id="presidente">
    		  <option value="scioli">Scioli</option>
    		  <option value="massa">Massa</option>
    		  <option value="macri">Macri</option>
    		</select>		
    		<br>

        <label for="dni" class="sr-only">Localidad</label>
           <input type="text" id="localidad" class="form-control" placeholder="localidad"></input>
        <br>

        <label for="dni" class="sr-only">Domicilio</label>
           <input type="text" id="domicilio" class="form-control" placeholder="domicilio"></input>
        <br>


        <label class="radio-inline">
          <input type="radio" name="inlineRadioOptions" id="sexo" value="masculino">Masculino
        </label>
        
    		<label class="radio-inline">
    		  <input type="radio" name="inlineRadioOptions" id="sexo" value="femenino">Femenino
    		</label>

    		<input type="hidden" id="dni" value="<?php echo $_SESSION['registrado'] ?>"></input>

    		<br>
    		<br>
            
        <button class="btn btn-lg btn-primary btn-block" type="submit">Votar</button>
      
      </form>



    </div> <!-- /container -->

  <?php 

}
else
{    
    echo"<h3>Debe estar registarado</h3>";?>

    <button onclick="MostrarLogin()" class="btn btn-lg btn-danger btn-block" type="button">Registrarme</button>
   
   
  <?php  }  ?>
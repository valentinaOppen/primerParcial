<script type="text/javascript">
$("#content").css('width', '600px');
</script>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">

 
<?php 
 
session_start();

if(!isset($_SESSION['registrado']))
{  
  ?>
    <div id="formLogin" class="container">

      <form  class="form-ingreso " onsubmit="validarLogin();return false;">
        <h4 class="form-ingreso-heading">Ingrese su DNI</h4>

        <label for="dni" class="sr-only">Dni</label>
           <input type="text" id="dni" class="form-control" placeholder="DNI" required="" autofocus="" value="">
        <br>        
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      
      </form>



    </div> <!-- /container -->

  <?php 

}
else
{    
    echo"<h3>El dni ingresado es:  '".$_SESSION['registrado']."'</h3>";?>

    <button onclick="desloguear()" class="btn btn-lg btn-danger btn-block" type="button">Desloguearme</button>
   
   
  <?php  }  ?>



 
    
  

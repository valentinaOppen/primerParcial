<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">

<!-- disable iPhone inital scale -->
<meta name="viewport" content=" initial-scale=1.0">

<title>UTN FRA</title>

<!-- main css -->
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/media-queries.css" rel="stylesheet" type="text/css">
<link href="css/ingreso.css" rel="stylesheet">

<!-- media queries css -->
 <link rel="stylesheet" href="bower_components/bootstrap-css/css/bootstrap.min.css">
 <script src="bower_components/jquery/dist/jquery.min.js"></script>

 <link rel="icon" href="http://www.octavio.com.ar/favicon.ico">
<script type="text/javascript" src="js/funcionesAjax.js"></script>
<script type="text/javascript" src="js/funcionesLogin.js"></script>
<script type="text/javascript" src="js/funcionesABM.js"></script>

</head>

<body>

<div id="pagewrap">

	<header id="header">

		<hgroup>
			<h1 id="site-logo"><a href="#">Primer Parcial</a></h1>
			<h2 id="site-description">Lab 4 2C 2015</h2>
		</hgroup>

		<nav>
			<ul id="main-nav" class="clearfix">
				<li><a onclick="" class="btn">Ingreso</a></li>
				<li><a onclick="" class="btn">Ir a VOTACIÓN</a> </li>
				<li><a onclick="" class="btn">Listado de Votaciones</a> </li>
				
			</ul>
			<!-- /#main-nav --> 
		</nav>

		<form id="searchform">
			
		</form>

	</header>
	<!-- /#header -->
	
	<div id="content" >

		<article  class="post clearfix">

			<header  >
				<h1 class="post-title"><a href="#">AlumnoNombre.Apellido</a></h1>
				<p class="post-meta"><time class="post-date" datetime="2011-05-08" pubdate>2015</time> <em>en</em> <a href="#">UTN FRA</a></p>
			</header>
			<hr>
			<div id="principal">

<?php

?>
			</div>		

		</article>
		<!-- /.post -->

	</div>
	<!-- /#content --> 
	
	
	<aside id="sidebar">

		<div id="botonesABM">
				<!--contenido dinamico cargado por ajax-->
		</div>
		<!-- /.widget -->

		<section class="widget clearfix" >
			<h4 class="widgettitle">Contador de votos</h4>
				<div id="Contador">
				<!--contenido dinamico cargado por ajax-->
				</div>
			
		</section>
		<!-- /.widget -->
						
	</aside>
	<!-- /#sidebar -->

	<footer id="footer">
	
		<p>templete by <a href="http://www.octavio.com.ar">Octavio Villegas</a></p>

	</footer>
	<!-- /#footer --> 
	
</div>
<!-- /#pagewrap -->

</body>
</html>
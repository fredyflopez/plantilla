<?php

	/**
	 * 
	 * @copyright DISEÑO DE PLANTILLA PRINCIPAL
	 * @copyright fecha:22-06-2015
	 * @author fredy <fredy-199210@hotmail.com>  
	 * 
	 */
	 
	 session_start();
	include("candado.php");

?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" href="css/estilos.css" type="text/css" media="screen" />
	<!--	<link rel="stylesheet" href="css/estilolistado.css" type="text/css" media="screen" />   -->
		<link rel="stylesheet" href="css/estilo.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/estilolis.css" type="text/css" media="screen" />
		
		
		<script type="text/javascript" src="libs/jquery-1.11.1.js"></script>
		<script type="text/javascript" src="libs/ajax-autocomplete.js"></script>
		
		<script type="text/javascript" src="libs/ajax.js"></script>
		
		<title>INICIAR SESION</title>
		<!-- <meta name="viewport" content="width=device-width">
		<script src="modernizr.min.js"></script> -->
		
		<header class='containerplantilla'></header>
		<nav class='containerplantilla'></nav>
		<section class='containerplantilla'></section>
		<footer class='containerplantilla'></footer>
	</head>
	<body style="background-color:#1E7693">
		<div class="elegant-aero">	
			<header class='containerplantilla' id='header'>
				<?php include('cabecera.php')?>
			</header>
		<br>
			<nav class='containerplantilla' id='nav'>
				<?php include('opciones.php')?>
			</nav>
		<br>		
			<section class='containerplantilla' id='main'>
			<!--	<section id='content'>  -->
					<article>
						<div id="contenido">
			  			  	<?php include('contenido.php')?>
		  			  	</div>
					</article>
			<!--	</section> -->
			</section>
		<br>
			<section class='containerplantilla' >
				<?php include('buscarregistro.php')?>
			</section>
		<br>	
			<footer class='containerplantilla' id='footer'>
				<?php include('barraestado.php')?>
			</footer>
		<br>
		</div>
	</body>
</html>



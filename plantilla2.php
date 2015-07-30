<?php

	/**
	 * 
	 * @copyright DISEÑO DE PLANTILLA2 EDITAR REGISTRO
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
		
		
		<!-- <link rel="stylesheet" href="css/estilolistado.css" type="text/css" media="screen" /> -->
		<title>NUEVO REGISTRO</title>
		<!-- <meta name="viewport" content="width=device-width">
		<script src="modernizr.min.js"></script> -->
		
		<header class='container'></header>
		<nav class='container'></nav>
		<section class='container'></section>
		<footer class='container'></footer>
	</head>
	
	<body style="background-color:#1E7693">
		<div class="elegant-aero">
			<header class='container' id='header'>
				<?php include('cabecera2.php')?>
			</header>
		<br />
			<nav class='container' id='nav'>
				<?php include('opciones1.php')?>
			</nav>
		<br />		
			<section class='container' id='main'>
				<section id='content'>
					<article>
						<div id="contenido">
			  			  	<?php include('editar.php')?>
		  			  	</div>
					</article>
				</section>
			</section>
		<br />
			<footer class='container' id='footer'>
				<?php include('barraestado2.php')?>
			</footer>
		<br />
		</div>
	</body>
</html>



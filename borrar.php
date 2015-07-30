<?php

	/**
	 * 
	 * @copyright ELIMINAR REGISTRO
	 * @copyright fecha:27-05-2015
	 * @author fredy <fredy-199210@hotmail.com> 
	 *
	 */	
	 
	session_start();
	include("candado.php");
	 
	ob_start();
	header("refresh: 2; url = plantilla.php");		/** REDIRECCIONAMIENTO CON ESPERA */
	ob_end_flush(); 
		
	include("include/conexiones.php");
	
		$clave = $_POST["id"];
		$nombre = $_POST["nombre"];
		$paterno = $_POST["paterno"];
		$materno = $_POST["materno"];
		$edad = $_POST["edad"];
		$contenido1 = $_POST["contenido1"];
	
	$sql = "DELETE FROM amigos WHERE id = $clave ";

		if ($conn->query($sql) === TRUE) {
	    	/** echo "<div class='guardar'> SE BORRO CORRECTAMENTE"; */ 
		} else {
	   	 	/** echo "ERROR AL BORRAR: " . mysqli_error($conn); */
		}
	
	mysqli_close($conn);
	
?>

  <html>
	<head>
		
		<link rel="stylesheet" href="css/estilolis.css" type="text/css" media="screen" />	
				
		<title> :. BORRAR .:</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />		
			
	</head>
	
	<body style="background-color:#1E7693">
		<!--	<form Name="Listado" action="index.php" method="post"></form> -->
		<center>
		
		<div class="containerguardar">
			
			<br />
			<br />
			
			<div class="guardaborrar"> SE BORRO CORRECTAMENTE </div>
					
		</center>
	</body>	
</html>

<?php

	/**
	 * 
	 * @copyright CAMBIAR DATOS
	 * @copyright fecha:27-05-2015
	 * @author fredy <fredy-199210@hotmail.com> 
	 *
	 */	
	 
	session_start();
	include("candado.php");
	 
	
	/**header('Location: index.php');   			/** REDIRECCIONAMIENTO AUTOMATICO */
	 
	ob_start();
	header("refresh: 2; url = plantilla.php");		/** REDIRECCIONAMIENTO CON ESPERA */
	ob_end_flush(); 
		
	include("include/conexiones.php");
	
	/**	echo "<div class='containerguardar'></div>"; */
	
	if ($_POST[boton1]) {
		$clave = $_POST["id"];
		$nombre = $_POST["nombre"];
		$paterno = $_POST["paterno"];
		$materno = $_POST["materno"];
		$edad = $_POST["edad"];
		$contenido1 = $_POST["contenido1"];
		
		$sql = "UPDATE amigos SET nombre = '$nombre',  
								  paterno = '$paterno', 
								  materno = '$materno', 
								  edad = $edad, 
								  contenido1 = '$contenido1' 
				WHERE id = $clave ";
				
		//echo " <br> $sql";		
		 
		if ($conn->query($sql) === TRUE) {
		  echo "<div class='containerguardaryborrar'>"; 
		  echo "<div class='guardar'> SE GUARDO CORRECTAMENTE"; 
		} else {
		  /** echo "ERROR AL GAURDAR: " . $conn->error; */ 
		}	
		mysqli_close($conn);	 
	}
	
	if ($_POST[boton2]) {
		$clave = $_POST["id"];
		$nombre = $_POST["nombre"];
		$paterno = $_POST["paterno"];
		$materno = $_POST["materno"];
		$edad = $_POST["edad"];
		$contenido1 = $_POST["contenido1"];
		
		$sql = "DELETE FROM amigos WHERE id = $clave ";
	
		if ($conn->query($sql) === TRUE) {
			echo "<div class='containerguardaryborrar'>"; 
	    	echo "<div class='guardar'> SE BORRO CORRECTAMENTE"; 
		} else {
	   	 	/** echo "ERROR AL BORRAR: " . mysqli_error($conn); */
		}
		mysqli_close($conn);
	}		
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />		
		<link rel="stylesheet" href="css/estilolis.css" type="text/css" media="screen" />	
				
		<title> :. GUARDAR .:</title>
		
	</head>
	<body style="background-color:#1E7693">
	</body>
</html>





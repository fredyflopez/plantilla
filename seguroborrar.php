<?php

	/**
	 * 
	 * @copyright SEGURO DESEA BORRAR EL REGISTRO
	 * @copyright fecha:26-05-2015
	 * @author fredy <fredy-199210@hotmail.com> 
	 *
	 */	
	 
	session_start();
	include("candado.php");
	
	include("include/conexiones.php");
	 
	$clave = $_GET["id"];
	$sql = "select * from amigos where id = $clave";
	
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{
		// output data of each row
		while($row = $result->fetch_assoc()) 
		{
			$id =  $row["id"];
			$nombre = $row["nombre"];
			$paterno = $row["paterno"];
			$materno = $row["materno"];
			$edad = $row["edad"];
			$contenido1 = $row["contenido1"];
		} 
	}		
	 
?>

<html>
	<head>	
		<link rel="stylesheet" href="css/estilolis.css" type="text/css" media="screen" />	
				
		<title> :. BORRAR .:</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />		
	</head>
	<body style="background-color:#1E7693">
			<form Name="Listado" action="borrar.php" method="post"> 	
		<center>
		
		<div class="containerseguroborrar">
			<h2><center> SEGURO DESEAS BORRAR EL CAMPO </center></h2>
			<H3> 
						
				<input type="hidden" name="id" value="<?php echo $id ?>" >

				<input type="submit" name="borrar.php" class="button1" value="ACEPTAR" />
		
		</center>
	</body>
</html>

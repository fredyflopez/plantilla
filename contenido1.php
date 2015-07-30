<?php

	/**
	 * 
	 * @copyright DAR DE ALTA NUEVO REGISTRO
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
			$imagen1 = $row["imagen"];
			$edad = $row["edad"];
			$contenido1 = $row["contenido1"];
		} 
	}		
	 
?>
	<form Name="Listado" action="nuevo.php" method="post" enctype="multipart/form-data">
	 <center>
		<div class="container1">
	<!--		<h2><center> NUEVO REGISTRO </center></h2>  -->
			<br />		
			<div class="box1">NOMBRE:</div>
			<div class="contenido1"> <input type="text" class="font" name="nombre" placeholder="Nombre" class="transparent1" size="12" value="<?php echo $nombre ?>" ></div>
			<br />
			<div class="box1">PATERNO:</div>
			<div class="contenido1"> <input type="text" class="font" name="paterno" placeholder="Paterno" class="transparent1" size="12" value="<?php echo $paterno ?>" ></div>
			<br	/>
			<div class="box1">MATERNO:</div>
			<div class="contenido1"> <input type="text" class="font" name="materno" placeholder="Materno" class="transparent1" size="12" value="<?php echo $materno ?>" ></div>
			<br	/>
			<div class="box1">EDAD:</div>
			<div class="contenido1"> <input type="text" class="font" name="edad" placeholder="Edad" class="transparent1" size="12" value="<?php echo $edad ?>" ></div>
			<br />
			<div class="box1">CONTENIDO:</div>
			<div class="contenido1"> <input type="text" class="font" name="contenido1" placeholder="Contenido" class="transparent1" size="15" value="<?php echo $contenido1 ?>" ></div>
			<br />
			<br />
			
				<input type="hidden" name="id" value="<?php echo $id ?>" >
								
				<input type="file" name="fileToUpload" class="buttonexaminarcontinuar" id="fileToUpload">
    			<input type="submit" name="submit" class="buttonexaminarcontinuar" value="ACEPTAR" >
								
	 </center>
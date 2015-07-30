<?php

	/**
	 * 
	 * @copyright NUEVO REGISTRO
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
	
	$target_dir = "imagen/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	    /**    echo "File is not an image.";  **/
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	/**    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";   **/
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	/**    echo "Sorry, your file was not uploaded.";  **/
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	    } else {
	 /**       echo "Sorry, there was an error uploading your file.";  **/
	    }
		
	}
	
	$clave = $_POST["id"];
	$nombre = $_POST["nombre"];
	$paterno = $_POST["paterno"];
	$materno = $_POST["materno"];
	$edad = $_POST["edad"];
	$contenido1 = $_POST["contenido1"];
	$imagen = $_FILES["fileToUpload"]["name"];
	
	
	$sql = "insert into amigos (id,nombre,paterno,materno,edad,contenido1,imagen) 
	values (0,'$nombre','$paterno','$materno',$edad,'$contenido1','$imagen')";
	
	if ($conn->query($sql) === TRUE) {
	     /**echo "SE GUARDO CORRECTAMENTE";*/ 
	} else {
	   	echo "ERROR: " . $sql . "<br>" . $conn->error; 
	}

	mysqli_close($conn);
?> 

<html>
	<head>
		<link rel="stylesheet" href="css/estilolis.css" type="text/css" media="screen" />	
				
		<title> :. NUEVO .:</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>
	<body style="background-color:#1E7693">
			<form Name="Listado" action="plantilla.php" method="post">
		<center>
		
		<div class="containerguardar">
			
			<br />
			<br />
			
			<div class="guardaborrar"> SE GUARDO CORRECTAMENTE </div>
			
		</center>
	</body>
</html>

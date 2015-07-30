<?php 

	/**
	 * 
	 * @copyright VERIFICA USUARIO Y CONTRASEÑA
	 * @copyright fecha:15-06-2015
	 * @author fredy <fredy-199210@hotmail.com> 
	 * 
	 */

	session_start(); 
	
	/* A continuación, realizamos la conexión con nuestra base de datos en MySQL */ 
	
	include("include/conexioncontrol.php");


	header ('Content-type: text/html; charset=utf-8');

	$nombre = htmlentities($_POST["usuario"]);
	$clave = htmlentities($_POST["clave"]);


	/* El query valida si el usuario ingresado existe en la base de datos. Se utiliza la función htmlentities para evitar inyecciones SQL. */ 

	$myusuario = mysql_query("select nombre from amigos where nombre = '".htmlentities($_POST["usuario"])."'",$link); 
	$nmyusuario = mysql_num_rows($myusuario); 

	//Si existe el usuario, validamos también la contraseña ingresada y el estado del usuario... 
	if($nmyusuario != 0)
		{ 
			$sql = "select nombre, perfil from amigos where nombre = '$nombre' and password = '".htmlentities($_POST["clave"])."'" ; 

			/** echo $sql; **/

  	$myclave = mysql_query($sql,$link); 
	$nmyclave = mysql_num_rows($myclave); 
	//Si el usuario y clave ingresado son correctos (y el usuario está activo en la BD), creamos la sesión del mismo. 
		if($nmyclave != 0)
			{

      
      			//Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario 
      			$_SESSION["autentica"] = "SI"; 
      			$_SESSION["usuarioactual"] = mysql_result($myclave,0,0); 
			$_SESSION["perfil"] = mysql_result($myclave,0,1);
			






      			//nombre del usuario logueado. 
      			//Direccionamos a nuestra página principal del sistema. 
      			header ("Location: plantilla.php"); 
   			}
   				else{ 
      				echo"<script>alert('El campo es incorrecto.'); window.location.href=\"index.php\"</script>"; 
   				}
			}
					else
						{
						echo"<script>alert('El usuario no existe.'); window.location.href=\"index.php\"</script>"; 
						} 
	mysql_close($link); ?>

<?php

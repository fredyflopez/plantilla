<?php
	/**
	* Script que tiene todas las funciones
	*
	*
	*/

	
	/**
	* Función que imprime el menú de opciones según el perfil del usuario
	* 
	* @param int
        * return char
	*/		
	
	function menu ($perfil)
	{
		$sql = "SELECT id, nombre, liga
			FROM menu
			WHERE perfil = $perfil";
		
		foreach ()
		{	
			echo "<a href = '$datos[liga]'> $datos[nombre] </a>";		
		}
	}	




?>

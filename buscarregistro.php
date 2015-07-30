<?php

	/**
	 * 
	 * @copyright BOTON BUSCAR REGISTRO
	 * @copyright fecha:22-06-2015
	 * @author fredy <fredy-199210@hotmail.com>  
	 * 
	 */
	 
	 session_start();
	include("candado.php");

?>
	<form action="buscador.php" method="POST">	
		<h3>Palabras clave</h3>
			<br />
			<!-- <input type="text" id="keywords" name="keywords" size="30" maxlength="30" required="null"> -->
			
			<input id="search-box" id="keywords" name="keywords" placeholder="Buscar" type="text" size="20" maxlength="20" required="null" autocomplete="off"/>
									
			<input type="submit" name="search" id="search" class="buttoncontinuar" value="Buscar">
			
			<ul id="search_suggestion_holder"></ul>	
	</form>
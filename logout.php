<?php

	/**
	 * 
	 * @copyright CERRAR SESION
	 * @copyright fecha:18-06-2015
	 * @author fredy <fredy-199210@hotmail.com> 
	 * 
	 */
	session_start();
		if(session_destroy())
		 {
		   header("Location: index.php");
		 }

?>
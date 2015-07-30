<?php

	/**
	 * 
	 * @copyright SELECCION DE LA BASE DE DATOS
	 * @copyright 1-07-2015
	 * @author fredy <fredy-199210@hotmail..com> 
	 * 
	 */

	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '2246099955');
	define('DB_DATABASE', 'contactos');
	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die(mysqli_error());
?>
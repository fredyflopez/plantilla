<?php

	/**
	 * 
	 * @copyright SELECCIONA LAS PRIMERAS 2 LETRAS DE TODOS LOS NOMBRES
	 * @copyright 17-06-2015
	 * @author fredy <fredy-199210@hotmail..com> 
	 * 
	 */
	 
	session_start();
	include("candado.php");

	require('include/db.php');
	if( isset( $_GET['keyword'] ) && strlen($_GET['keyword']) >= 2 )
	{

		$keyword=$_GET['keyword'];
		$query="SELECT * from amigos WHERE nombre LIKE '%$keyword%'";
		$result=mysqli_query($db,$query);
		$html="";
		while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) 
		{
			$html.='<li>'.$row['nombre'].'</li>';
		}
		
		echo $html;

	}
?>

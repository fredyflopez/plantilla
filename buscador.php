<?php

	/**
	 * 
	 * @copyright BUSCA UN REGISTRO
	 * @copyright fecha:15-06-2015
	 * @author fredy <fredy-199210@hotmail.com> 
	 *
	 */
	
	session_start();
	include("candado.php");


?>

<html>
	<head>
  			<link rel="stylesheet" href="css/estilo.css" type="text/css" media="screen" />
  	</head>
	<body style="background-color:#1E7693">
		<form Name="paginacion" action="plantilla.php" method="post">
			<div class="elegant-aero"><table>
				<div style="margin:auto;width:500px;text-align:center;">
			 		<table border="1px">			
			<?php
		
			header ('Content-type: text/html; charset=utf-8');
			
			//Si se ha pulsado el botón de buscar
			if (isset($_POST['search'])) {
			    //Recogemos las claves enviadas
			    $keywords = $_POST['keywords'];
			
			    //Conectamos con la base de datos en la que vamos a buscar
			    $conexion = mysql_connect("localhost", "root", "2246099955");
			    mysql_select_db("contactos", $conexion);
				
				//  SELECT * FROM amigos WHERE  (nombre LIKE '%karla%' OR paterno LIKE '%karla%' or materno LIKE '%karla%') ORDER BY nombre desc 
				 $query = "SELECT *
			                FROM amigos
			                WHERE (nombre LIKE '%" . $keywords . "%'
			                OR paterno LIKE '%" . $keywords . "%'
							OR materno LIKE '%" . $keywords . "%')
			                ORDER BY nombre desc";
			
				//echo " <br> $query <br>";
			
			    $query_searched = mysql_query($query, $conexion);
			
			    $count_results = mysql_num_rows($query_searched);
			
			    //Si ha resultados
			    if ($count_results > 0) {
			
			        echo 'Se han encontrado '.$count_results.' resultados.';
			
			        echo '<ul>';
					
						/** echo "<table border='1px'>"; */
						echo "<table>";
				 		echo "<tr>
				 			  <th><div class='casoa'>ID</th>
				 			  <th><div class='casoa'>NOMBRE</th>
				 			  <th><div class='casoa'>PATERNO</th>
				 			  <th><div class='casoa'>MATERNO</th>
				 			  <th><div class='casoa'>EDAD</th>
				 			  </tr>";
					
			        while ($row_searched = mysql_fetch_array($query_searched)) {
			            //En este caso solo mostramos el titulo y fecha de la entrada
			            
			           // echo ''.$row_searched['nombre'].''.''.$row_searched['paterno'].'';
											 
							{
							  echo "<tr>";
							  echo "<td><div class='casob'>".$row_searched['id']."</td>";
							  echo "<td><div class='casob'>".$row_searched['nombre']."</td>";
							  echo "<td><div class='casob'>".$row_searched['paterno']."</td>";
							  echo "<td><div class='casob'>".$row_searched['materno']."</td>";
							  echo "<td><div class='casob'>".$row_searched['edad']."</td>";
							    
							  echo "</tr>";
							 }
						echo "</table>";
					}
			        echo '</ul>';
			    }
			    else {
			        //Si no hay registros encontrados
			        echo '<h2>No se encuentran resultados con los criterios de búsqueda.</h2>';
			    }
			}
		?>
					</table>
		 			<br /><br />
	 			<input type="submit" class="buttonregresar" class="transparent" value="REGRESAR" />
	 		</div>
	 	</table></div>
	 </body>
</html>







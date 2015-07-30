<?php
	
	/**
	 * 
	 * @copyright PAGINADOR (AGRUPA REGISTROS DE 5 EN 5)
	 * @copyright fecha:15-06-2015
	 * @author fredy <fredy-199210@hotmail.com> 
	 * 
	 */

?>
	<?php
	
		session_start();
		include("candado.php");
		
		include("include/conexion.php");
		
		 /** require('conexion.php'); */
		 $RegistrosAMostrar=5;
		
		 	//estos valores los recibo por GET
		 	if(isset($_GET['pag'])){
		  		$RegistrosAEmpezar=($_GET['pag']-1)*$RegistrosAMostrar;
		  		$PagAct=$_GET['pag'];
		  		
		  		//caso contrario los iniciamos
		 		}else{
		  			$RegistrosAEmpezar=0;
		  			$PagAct=1;
		 		}
		
					 $Resultado=mysql_query("SELECT * FROM amigos LIMIT $RegistrosAEmpezar, $RegistrosAMostrar",$con);
					 
					 echo "<table border='0'>";
					 echo "<tr>
					 	   <th><div class='casoa'>ID</th>
					 	   <th><div class='casoa'>NOMBRE</th>
					 	   <th><div class='casoa'>PATERNO</th>
					 	   <th><div class='casoa'>MATERNO</th>
					 	   <th><div class='casoa'>EDAD</th>
					 	   <th><div class='casoa'>EDITAR</th>
					 	   <th><div class='casoa'>BORRAR</th>
					 	   </tr>";
						
						 while($MostrarFila=mysql_fetch_array($Resultado)){
										
							$id =  $MostrarFila["id"];
		 					
							echo "<tr>";
							echo "<td><div class='casob'>".$id."</td>";
							echo "<td><div class='casob'>".$MostrarFila['nombre']."</td>";
							echo "<td><div class='casob'>".$MostrarFila['paterno']."</td>";
							echo "<td><div class='casob'>".$MostrarFila['materno']."</td>";
							echo "<td><div class='casob'>".$MostrarFila['edad']."</td>";
							echo "<td><div class='casob'> <a href='plantilla2.php?id=".$id."'> Editar </a> </div>";
							echo "<td><div class='casob'> <a href='seguroborrar.php?id=".$id."'> Borrar </a> </div>";
							echo "</tr>";
							
		 				}
		 					echo "</table>";
		 
		 	//******--------determinar las páginas---------******//
		 	$NroRegistros=mysql_num_rows(mysql_query("SELECT * FROM amigos",$con));
		 	$PagAnt=$PagAct-1;
		 	$PagSig=$PagAct+1;
		 	$PagUlt=$NroRegistros/$RegistrosAMostrar;
		
		 	//verificamos residuo para ver si llevará decimales
		 	$Res=$NroRegistros%$RegistrosAMostrar;
			// si hay residuo usamos funcion floor para que me
			// devuelva la parte entera, SIN REDONDEAR, y le sumamos
			// una unidad para obtener la ultima pagina
		 	if($Res>0) $PagUlt=floor($PagUlt)+1;
		 
				//desplazamiento
				echo "<a onclick=\"Pagina('1')\">Primero</a> ";
					if($PagAct>1) echo "<a onclick=\"Pagina('$PagAnt')\">Anterior</a> ";
						echo "<strong>Pagina ".$PagAct."/".$PagUlt."</strong>";
							if($PagAct<$PagUlt)  echo " <a onclick=\"Pagina('$PagSig')\">Siguiente</a> ";
								echo "<a onclick=\"Pagina('$PagUlt')\">Ultimo</a>";
	
	?>

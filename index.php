<?php

	/**
	 * 
	 * @copyright LOGIN
	 * @copyright 17-06-2015
	 * @author fredy <fredy-199210@hotmail..com> 
	 * 
	 */

?>
<html>
	<head>
		<link rel="stylesheet" href="css/login.css" type="text/css" media="screen" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>INICIAR SESION</title>
	</head>
		<body>
			<div class="container">
				<section id="content">
					<form action="control.php" method="post" id="form">
						<h1>INICIAR SESION</h1>
						<div>
							<input type="text" name="usuario" placeholder="Username" required="" id="usuario" />

						</div>
						<div>
							<input type="password" name="clave" placeholder="Password" required="" id="clave" />
						</div>
						<div>
							<input type="submit" value="INICIAR" />
							<!-- <a href="#">¿OLVIDASTE TU CONTRASEÑA</a> -->
						</div>
					</form>
				</section>
			</div>
		</body>
</html>

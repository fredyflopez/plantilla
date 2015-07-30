<?php

	/**
	 * 
	 * @copyright AUTENTICA SI NO TE REGRESA A INDEX
	 * @copyright fecha:18-06-2015
	 * @author fredy <fredy-199210@hotmail.com> 
	 *
	 */

	session_start();

	if($_SESSION["autentica"] != "SI")
	{
		header("Location: index.php");
	}
	

?>

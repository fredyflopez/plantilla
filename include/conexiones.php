<?php

/**
 * Conexion a BD 
 * fecha:16-05-2015
 * creado:fredy-199210@hotmail.com
 */
 
$servername = "localhost";
$username = "root";
$password = "2246099955";
$db = "contactos";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/** echo "Connected successfully"; */
?> 
<?php

$servidor = "localhost"; 
$usuario = "root";      
$contrasena = "";       
$baseDeDatos = "ExamenFinal";

$conn = new mysqli($servidor, $usuario, $contrasena, $baseDeDatos);

if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

echo "Conexión exitosa a la base de datos 'ExamenFinal'.";


$conn->close();
?>


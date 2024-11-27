<?php
$servername = "localhost"; 
$username = "root";       
$password = "";       

$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    die("Connexion fallida: " . $conn->connect_error);
}

$sql = "CREATE DATABASE ExamenFinal";
if ($conn->query($sql) === TRUE) {
    echo "Base de datos 'ExamenFinal' creada exitosamente.";
} else {
    echo "Error al crear la base de datos: " . $conn->error;
}

$conn->close();
?>


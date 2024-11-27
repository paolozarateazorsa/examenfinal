<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$baseDeDatos = "ExamenFinal";

$conn = new mysqli($servidor, $usuario, $contrasena, $baseDeDatos);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sql = "SELECT * FROM producto";
$resultado = $conn->query($sql);

$conn->close();
?>


<?php

$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$baseDeDatos = "ExamenFinal";

$conn = new mysqli($servidor, $usuario, $contrasena, $baseDeDatos);


if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}


$sql = "SELECT idproducto, nombproducto, (punetario * stock) AS stock_valorado FROM producto";
$resultado = $conn->query($sql);


$conn->close();
?>

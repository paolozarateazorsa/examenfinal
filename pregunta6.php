<?php

$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$baseDeDatos = "ExamenFinal";

$conn = new mysqli($servidor, $usuario, $contrasena, $baseDeDatos);


if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}


$sql = "INSERT  INTO categoria (idcategoria, nombcat) VALUES 
    (1, 'IMPRESORA LASER'),
    (2, 'IMPRESORA INYECCION A TINTA'),
    (3, 'IMPRESORA MATRICIAL'),
    (4, 'MONITOR PANTALLA PLANA'),
    (5, 'TABLET'),
    (6, 'NOTEPAD'),
    (7, 'COMPUTADORA PERSONAL'),
    (8, 'COMPUTADORA PORTATIL')";


if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente.";
} else {
    echo "Error al insertar datos: " . $conn->error;
}

$conn->close();
?>

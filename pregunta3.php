<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$baseDeDatos = "ExamenFinal";

$conn = new mysqli($servidor, $usuario, $contrasena, $baseDeDatos);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sqlCategoria = "CREATE TABLE categoria (
    idcategoria INT(2) NOT NULL AUTO_INCREMENT,
    nombcat VARCHAR(50) NOT NULL,
    PRIMARY KEY (idcategoria)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";


if ($conn->query($sqlCategoria) === TRUE) {
    echo "Tabla 'categoria' creada exitosamente.<br>";
} else {
    echo "Error al crear la tabla 'categoria': " . $conn->error . "<br>";
}

$conn->close();
?>


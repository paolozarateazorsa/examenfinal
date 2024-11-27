<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Productos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Lista de Productos</h1>
    <table>
        <thead>
            <tr>
                <th>idproducto</th>
                <th>Nombre del Producto</th>
                <th>Punitario</th>
                <th>Stock</th>
                <th>Descripción</th>
                <th>Foto</th>
                <th>idcategoria</th>
            </tr>
        </thead>
        <tbody>
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

            if ($resultado->num_rows > 0) {
     
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila['idproducto'] . "</td>";
                    echo "<td>" . $fila['nombproducto'] . "</td>";
                    echo "<td>" . $fila['punitario'] . "</td>";
                    echo "<td>" . $fila['stock'] . "</td>";
                    echo "<td>" . $fila['descripcion'] . "</td>";
                    echo "<td><img src='" . $fila['foto'] . "' alt='Foto' width='60'></td>";
                    echo "<td>" . $fila['idcategoria'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No hay productos registrados</td></tr>";
            }

    
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
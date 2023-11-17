<?php include("encabezado.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla PV</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: red;
        }

        .imagen {
            max-width: 200px; /* Ajusta el tamaño máximo de la imagen según tu preferencia */
            max-height: 200px;
        }

        .espacio-imagen {
            padding-top: 20px; /* Espacio entre la fila de datos y la fila de imágenes */
        }
    </style>
</head>
<body>

<?php
// Establecer la conexión a la base de datos (asegúrate de cambiar las credenciales)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pv";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
}

// Consulta para seleccionar todos los datos de la tabla pv
$sql = "SELECT * FROM pv";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los datos en una tabla HTML
    echo "<table>";
    echo "<tr><th>Deporte Favorito</th><th>Viajes</th><th>Pasatiempos</th><th>Carrera Universitaria</th><th>En 5 Años</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["dep"] . "</td>";
        echo "<td>" . $row["viaj"] . "</td>";
        echo "<td>" . $row["pas"] . "</td>";
        echo "<td>" . $row["carr"] . "</td>";
        echo "<td>" . $row["cme5a"] . "</td>";
        echo "</tr>";

    }
    echo "<img class='imagen' src='futbol.jpg' alt='Imagen'></td>";
    echo "<img class='imagen' src='descarga.jpg' alt='Imagen'></td>";

    echo "</table>";
} else {
    echo "No se encontraron datos en la tabla.";
}

// Cerrar la conexión
$conn->close();
?>

</body>
</html>

<?php include("encabezado.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Mi Pagina</title>
</head>
</html>
<?php
// Establecer la conexión a la base de datos (asegúrate de cambiar las credenciales)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "peliculas";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
}

// Consulta para seleccionar todos los datos de la tabla pv
$sql = "SELECT * FROM antitrust";
$result = $conn->query($sql);




 if ($result->num_rows > 0) {
    // Mostrar los datos en una tabla HTML
    echo "<table>";
    

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["titulo"] . "</td>";
        echo "<td>" . $row["anio_estreno"] . "</td>";
        echo "<td>" . $row["director"] . "</td>";
        echo "<td>" . $row["reparto"] . "</td>";
        echo "<td>" . $row["sinopsis"] . "</td>";
        
        echo "</tr>";

    }

    echo "</table>";
} else {
    echo "No se encontraron datos en la tabla.";
}
$sql = "SELECT * FROM hackers";
$result = $conn->query($sql);




 if ($result->num_rows > 0) {
    // Mostrar los datos en una tabla HTML
    echo "<table>";
    

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["titulo"] . "</td>";
        echo "<td>" . $row["anio_estreno"] . "</td>";
        echo "<td>" . $row["director"] . "</td>";
        echo "<td>" . $row["reparto"] . "</td>";
        echo "<td>" . $row["sinopsis"] . "</td>";
        
        echo "</tr>";

    }

    echo "</table>";
} else {
    echo "No se encontraron datos en la tabla.";
}$sql = "SELECT * FROM ncis";
$result = $conn->query($sql);




 if ($result->num_rows > 0) {
    // Mostrar los datos en una tabla HTML
    echo "<table>";
    

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["titulo"] . "</td>";
        echo "<td>" . $row["anio_estreno"] . "</td>";
        echo "<td>" . $row["director"] . "</td>";
        echo "<td>" . $row["reparto"] . "</td>";
        echo "<td>" . $row["sinopsis"] . "</td>";
        
        echo "</tr>";

    }

    echo "</table>";
} else {
    echo "No se encontraron datos en la tabla.";
}$sql = "SELECT * FROM ralph_breaks_internet";
$result = $conn->query($sql);




 if ($result->num_rows > 0) {
    // Mostrar los datos en una tabla HTML
    echo "<table>";
    

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["titulo"] . "</td>";
        echo "<td>" . $row["anio_estreno"] . "</td>";
        echo "<td>" . $row["director"] . "</td>";
        echo "<td>" . $row["reparto"] . "</td>";
        echo "<td>" . $row["sinopsis"] . "</td>";
        
        echo "</tr>";

    }

    echo "</table>";
} else {
    echo "No se encontraron datos en la tabla.";
}$sql = "SELECT * FROM swordfish";
$result = $conn->query($sql);




 if ($result->num_rows > 0) {
    // Mostrar los datos en una tabla HTML
    echo "<table>";
    

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["titulo"] . "</td>";
        echo "<td>" . $row["anio_estreno"] . "</td>";
        echo "<td>" . $row["director"] . "</td>";
        echo "<td>" . $row["reparto"] . "</td>";
        echo "<td>" . $row["sinopsis"] . "</td>";
        
        echo "</tr>";

    }

    echo "</table>";
} else {
    echo "No se encontraron datos en la tabla.";
    
}
$sql = "SELECT * FROM the_circle";
$result = $conn->query($sql);




 if ($result->num_rows > 0) {
    // Mostrar los datos en una tabla HTML
    echo "<table>";
    

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["titulo"] . "</td>";
        echo "<td>" . $row["anio_estreno"] . "</td>";
        echo "<td>" . $row["director"] . "</td>";
        echo "<td>" . $row["reparto"] . "</td>";
        echo "<td>" . $row["sinopsis"] . "</td>";
        
        echo "</tr>";

    }

    echo "</table>";
} else {
    echo "No se encontraron datos en la tabla.";
}
 
 // Cerrar conexión
 mysqli_close($conn);  
 
 ?>
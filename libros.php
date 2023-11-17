<?php include("encabezado.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Mi Pagina</title>
</head>
<?php

// Conexión a la BD
$servidor = "localhost";
$usuario = "root";
$password = "";
$basededatos = "libros";

$conexion = mysqli_connect($servidor, $usuario, $password, $basededatos);

// Consulta a la tabla books
$query = "SELECT * FROM books";
$resultado = mysqli_query($conexion, $query);

// Mostrar datos en una tabla HTML
echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nombre</th>";
echo "<th>Autor</th>";
echo "<th>Editorial</th>";
echo "</tr>";

while ($fila = mysqli_fetch_array($resultado)) {
  echo "<tr>";
  echo "<td>" . $fila['id'] . "</td>";
  echo "<td>" . $fila['name'] . "</td>";
  echo "<td>" . $fila['author'] . "</td>"; 
  echo "<td>" . $fila['publisher'] . "</td>";
  echo "</tr>";
}

echo "</table>";

// Cerrar conexión
mysqli_close($conexion);

?>
<body>
    <img src="cien.jpg" width="300px" height="300px">
    <img src="prin.jpg" width="300px" height="300px">
    <img src="kam.jpg" width="300px" height="300px">
    <img src="mos.jpg" width="300px" height="300px">
    <div class="reco">
    <h2>Cien años de soledad: Esta obra maestra de Gabriel García Márquez te transportará a Macondo, un pueblo imaginario donde vivirás la historia épica de la familia Buendía. El realismo mágico de García Márquez te hará reflexionar sobre la condición humana.
    </h2>
</div>
</body>
<?php
include('conexion.php');
$pelicula = $_POST["pelicula"];
$genero = $_POST["genero"];

$sql = "INSERT INTO netflix (nombre, clave) VALUES ('$pelicula','$genero')";

mysqli_query($conn, $sql);

$sql1 = "SELECT * FROM netflix";

$resultado = $conn->query($sql1);

while($fila = $resultado->fetch_assoc()){
    echo "<h1>".$fila["nombre"]."</h1> <button>borrar</button>";
    
}

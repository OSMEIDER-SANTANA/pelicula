<?php
include('conexion.php');

$sql1 = "SELECT * FROM peliculas";

$resultado = $conn->query($sql1);

while ($fila = $resultado->fetch_assoc()) {
    echo "
        <div id=" . $fila["id"] . ">
        <h1>" . $fila["pelicula"] . "</h1>
        <button id='borrar'>Borrar</button>
        </div>
        <input type='checkbox'>
    ";
}

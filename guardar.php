<?php

include('conexion.php');

$pelicula = $_POST["pelicula"];
$genero = $_POST["genero"];

$sql = "INSERT INTO netflix (pelicula, genero) VALUES ('$pelicula','$genero')";

mysqli_query($conn, $sql);

include('imprimir.php');

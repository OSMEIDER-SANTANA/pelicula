<?php
include('conexion.php');

$peliculaBorrada = $_POST["id"];

$sql = "DELETE FROM peliculas WHERE id='$peliculaBorrada'";

mysqli_query($conn, $sql);

include('imprimir.php');

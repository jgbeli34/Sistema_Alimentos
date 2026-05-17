<?php
include "conexion.php";

$id = $_GET["id"];
$productos = leerDatos();

$productos = array_filter($productos, fn($p) => $p["id"] != $id);

guardarDatos(array_values($productos));

header("Location: productos.php");
?>
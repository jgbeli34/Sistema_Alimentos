<?php
include "conexion.php";

$productos = leerDatos();

$nuevo = [
"id" => count($productos)+1,
"nombre" => $_POST["nombre"],
"precio" => $_POST["precio"]
];

$productos[] = $nuevo;

guardarDatos($productos);

header("Location: productos.php");
?>
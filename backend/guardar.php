<?php
include "conexion.php";

$nombre = $_POST["nombre"];
$precio = $_POST["precio"];

$conexion->query("INSERT INTO productos (nombre, precio) VALUES ('$nombre', '$precio')");

header("Location: productos.php");
?>
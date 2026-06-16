<?php

// Conexión a MySQL
include "conexion.php";

// Datos recibidos
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];

// Actualización
$conexion->query("
UPDATE productos
SET nombre='$nombre', precio='$precio'
WHERE id=$id
");

// Retornar a productos
header("Location: ../frontend/productos.php");

?>
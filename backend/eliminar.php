<?php

// Conexión a la BD
include "conexion.php";

// Obtener ID
$id = $_GET["id"];

// Eliminar registro
$conexion->query("
DELETE FROM productos
WHERE id=$id
");

// Volver al listado
header("Location: ../frontend/productos.php");

?>
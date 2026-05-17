<?php

include "conexion.php";

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];

$conexion->query("
UPDATE productos
SET nombre='$nombre', precio='$precio'
WHERE id='$id'
");

header("Location: ../frontend/productos.php");

?>
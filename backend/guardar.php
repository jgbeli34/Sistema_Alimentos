<?php

include "conexion.php";

// Capturar datos del formulario
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];

// Insertar producto
$sql = "INSERT INTO productos(nombre, precio)
VALUES('$nombre', '$precio')";

$conexion->query($sql);

header("Location: ../frontend/productos.php");

?>
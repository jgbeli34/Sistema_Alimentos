<?php

// Conexión a la base de datos
include "conexion.php";

// Captura de datos del formulario
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];

// Inserción del producto
$conexion->query("INSERT INTO productos(nombre, precio)
VALUES('$nombre','$precio')");

// Regreso al módulo de productos
header("Location: ../frontend/productos.php");

?>
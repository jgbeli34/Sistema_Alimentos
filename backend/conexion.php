<?php

// Conexión a MySQL
$conexion = new mysqli(
    "localhost",
    "root",
    "",
    "sistema_alimentos"
);

// Validación de conexión
if($conexion->connect_error){
    die("Error de conexión");
}

?>
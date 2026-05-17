<?php

$conexion = new mysqli(
    "localhost",
    "root",
    "",
    "sistema_alimentos"
);

if($conexion->connect_error){
    die("Error de conexión");
}

?>
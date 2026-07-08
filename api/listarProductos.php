<?php

header("Content-Type: application/json");

include "conexion.php";

$sql = "SELECT * FROM productos";

$resultado = $conexion->query($sql);

$productos = array();

while($fila = $resultado->fetch_assoc()){
    $productos[] = $fila;
}

echo json_encode($productos);

?>
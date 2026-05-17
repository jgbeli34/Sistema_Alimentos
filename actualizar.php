<?php
include "conexion.php";

$id = $_POST["id"];
$productos = leerDatos();

foreach($productos as &$p){
if($p["id"] == $id){
$p["nombre"] = $_POST["nombre"];
$p["precio"] = $_POST["precio"];
}
}

guardarDatos($productos);

header("Location: productos.php");
?>
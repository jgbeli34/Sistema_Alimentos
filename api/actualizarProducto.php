<?php

header("Content-Type: application/json");

include "conexion.php";

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];

$sql = "UPDATE productos
SET nombre='$nombre',
precio='$precio'
WHERE id='$id'";

if($conexion->query($sql)){

    echo json_encode([
        "estado"=>"ok",
        "mensaje"=>"Producto actualizado"
    ]);

}else{

    echo json_encode([
        "estado"=>"error",
        "mensaje"=>"No se pudo actualizar"
    ]);

}

?>
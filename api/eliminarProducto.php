<?php

header("Content-Type: application/json");

include "conexion.php";

$id = $_POST["id"];

$sql = "DELETE FROM productos WHERE id='$id'";

if($conexion->query($sql)){

    echo json_encode([
        "estado"=>"ok",
        "mensaje"=>"Producto eliminado"
    ]);

}else{

    echo json_encode([
        "estado"=>"error",
        "mensaje"=>"No se pudo eliminar"
    ]);

}

?>
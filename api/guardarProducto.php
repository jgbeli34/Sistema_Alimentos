<?php

header("Content-Type: application/json");

include "conexion.php";

$nombre = $_POST["nombre"];
$precio = $_POST["precio"];

$sql = "INSERT INTO productos(nombre,precio)
VALUES('$nombre','$precio')";

if($conexion->query($sql)){

    echo json_encode([
        "estado"=>"ok",
        "mensaje"=>"Producto registrado"
    ]);

}else{

    echo json_encode([
        "estado"=>"error",
        "mensaje"=>"No se pudo registrar"
    ]);

}

?>
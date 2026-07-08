<?php

header("Content-Type: application/json");

include "conexion.php";

// Verificar que lleguen los datos
if (!isset($_POST["usuario"]) || !isset($_POST["password"])) {
    echo json_encode([
        "estado" => "error",
        "mensaje" => "Faltan parámetros."
    ]);
    exit();
}

$usuario = trim($_POST["usuario"]);
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

// Verificar si el usuario ya existe
$verificar = $conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario'");

if ($verificar->num_rows > 0) {

    echo json_encode([
        "estado" => "error",
        "mensaje" => "El usuario ya existe"
    ]);
    exit();

}

// Registrar usuario
$sql = "INSERT INTO usuarios(usuario,password)
VALUES('$usuario','$password')";

if ($conexion->query($sql)) {

    echo json_encode([
        "estado" => "ok",
        "mensaje" => "Usuario registrado correctamente"
    ]);

} else {

    echo json_encode([
        "estado" => "error",
        "mensaje" => "No fue posible registrar el usuario"
    ]);

}

?>
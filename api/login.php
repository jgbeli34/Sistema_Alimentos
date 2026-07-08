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

$usuario = $_POST["usuario"];
$password = $_POST["password"];

// Buscar usuario
$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {

    $fila = $resultado->fetch_assoc();

    if (password_verify($password, $fila["password"])) {

        echo json_encode([
            "estado" => "ok",
            "mensaje" => "Autenticación satisfactoria"
        ]);

    } else {

        echo json_encode([
            "estado" => "error",
            "mensaje" => "Contraseña incorrecta"
        ]);

    }

} else {

    echo json_encode([
        "estado" => "error",
        "mensaje" => "El usuario no existe"
    ]);

}
?>
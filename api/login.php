<?php
session_start();

include "conexion.php";

$usuario = $_POST["usuario"];
$password = $_POST["password"];

// Buscar usuario
$sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";

$resultado = $conexion->query($sql);

if($resultado->num_rows > 0){

    $fila = $resultado->fetch_assoc();

    if(password_verify($password,$fila["password"])){

        $_SESSION["login"] = true;
        $_SESSION["usuario"] = $usuario;

        // Ir al sistema principal
        header("Location: ../frontend/dashboard.php");
        exit();

    }else{

        echo "<script>
        alert('Contraseña incorrecta');
        window.location='index.html';
        </script>";

    }

}else{

    echo "<script>
    alert('El usuario no existe');
    window.location='index.html';
    </script>";

}
?>
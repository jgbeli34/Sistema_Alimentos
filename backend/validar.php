<?php
session_start();

$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

if($usuario == "admin" && $clave == "1234"){

    $_SESSION["login"] = true;

    header("Location: ../frontend/dashboard.php");

}else{

    echo "
    <script>
    alert('Usuario o contraseña incorrectos');
    window.location='../frontend/login.php';
    </script>
    ";

}
?>
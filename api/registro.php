<?php

include "conexion.php";

$usuario = $_POST["usuario"];
$password = password_hash($_POST["password"],PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios(usuario,password)
VALUES('$usuario','$password')";

if($conexion->query($sql)){

    echo "<script>
    alert('Usuario registrado correctamente');
    window.location='index.html';
    </script>";

}else{

    echo "<script>
    alert('El usuario ya existe');
    window.location='index.html';
    </script>";

}
?>
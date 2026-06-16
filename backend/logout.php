<?php

session_start();

// Destruir sesión
session_destroy();

// Volver al login
header("Location: ../frontend/login.php");

?>
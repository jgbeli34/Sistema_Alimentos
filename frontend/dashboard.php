<?php
session_start();

// Verificar sesión
if(!isset($_SESSION["login"])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="estilos.css">

</head>

<body class="bg-light">

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-dark shadow">

<div class="container">

<span class="navbar-brand fw-bold">
Sistema de Alimentos
</span>

<a href="../backend/logout.php"
class="btn btn-danger">
Cerrar Sesión
</a>

</div>

</nav>

<!-- CONTENIDO -->
<div class="container mt-5">

<h2 class="text-center mb-5">
Panel Principal
</h2>

<div class="row g-4">

<!-- TARJETA PRODUCTOS -->
<div class="col-md-4">

<div class="card shadow-lg border-0 card-hover h-100">

<div class="img-hover">
<img src="../img/img1.jpg"
class="card-img-top"
style="height:250px; object-fit:cover;">
</div>

<div class="card-body text-center">

<h4 class="mb-3">
Productos
</h4>

<p>
Administra productos alimenticios,
precios y registros.
</p>

<a href="productos.php"
class="btn btn-primary w-100">
Entrar
</a>

</div>
</div>
</div>

<!-- TARJETA CLIENTES -->
<div class="col-md-4">

<div class="card shadow-lg border-0 card-hover h-100">

<div class="img-hover">
<img src="../img/comida2.jpg"
class="card-img-top"
style="height:250px; object-fit:cover;">
</div>

<div class="card-body text-center">

<h4 class="mb-3">
Clientes
</h4>

<p>
Gestión de clientes registrados
del sistema.
</p>

<button class="btn btn-secondary w-100">
Próximamente
</button>

</div>
</div>
</div>

<!-- TARJETA PEDIDOS -->
<div class="col-md-4">

<div class="card shadow-lg border-0 card-hover h-100">

<div class="img-hover">
<img src="../img/comida3.jpg"
class="card-img-top"
style="height:250px; object-fit:cover;">
</div>

<div class="card-body text-center">

<h4 class="mb-3">
Pedidos
</h4>

<p>
Control y seguimiento
de pedidos realizados.
</p>

<button class="btn btn-warning w-100">
Próximamente
</button>

</div>
</div>
</div>

</div>

</div>

<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php
session_start();
if(!isset($_SESSION["login"])) header("Location: login.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="estilos.css">
</head>

<body>

<nav class="navbar navbar-dark bg-dark">
<div class="container">
<span class="navbar-brand">Panel Principal</span>
<a href="logout.php" class="btn btn-danger">Salir</a>
</div>
</nav>

<div class="container mt-4">
<div class="row">

<div class="col-md-4">
<div class="card shadow card-hover">
<div class="img-hover">
<img src="img/comida1.jpg">
</div>
<div class="card-body text-center">
<h5>Productos</h5>
<a href="productos.php" class="btn btn-primary">Entrar</a>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card shadow card-hover">
<div class="img-hover">
<img src="img/comida2.jpg">
</div>
<div class="card-body text-center">
<h5>Clientes</h5>
<button class="btn btn-secondary">Próximamente</button>
</div>
</div>
</div>

</div>
</div>

</body>
</html>
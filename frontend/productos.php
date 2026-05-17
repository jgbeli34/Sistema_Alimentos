<?php
session_start();
if(!isset($_SESSION["login"])) header("Location: login.php");

include "conexion.php";

$resultado = $conexion->query("SELECT * FROM productos");
?>

<!DOCTYPE html>
<html>
<head>
<title>Productos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-dark bg-dark">
<div class="container">
<a href="dashboard.php" class="btn btn-light">⬅ Volver</a>
<a href="logout.php" class="btn btn-danger">Salir</a>
</div>
</nav>

<div class="container mt-4">

<h3>Gestión de Productos</h3>

<form action="guardar.php" method="POST" class="mb-3">
<input type="text" name="nombre" class="form-control mb-2" placeholder="Nombre" required>
<input type="number" name="precio" class="form-control mb-2" placeholder="Precio" required>
<button class="btn btn-success">Guardar</button>
</form>

<table class="table table-bordered">
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Precio</th>
<th>Acciones</th>
</tr>

<?php while($p = $resultado->fetch_assoc()): ?>
<tr>
<td><?= $p["id"] ?></td>
<td><?= $p["nombre"] ?></td>
<td><?= $p["precio"] ?></td>
<td>
<a href="eliminar.php?id=<?= $p["id"] ?>" class="btn btn-danger btn-sm">Eliminar</a>
</td>
</tr>
<?php endwhile; ?>

</table>

</div>
</body>
</html>
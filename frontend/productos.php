<?php
session_start();

if(!isset($_SESSION["login"])){
    header("Location: login.php");
}

include "../backend/conexion.php";

$resultado = $conexion->query("SELECT * FROM productos");
?>

<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Productos</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f5f5f5;
}

.card{
border:none;
border-radius:20px;
}

.table{
background:white;
border-radius:15px;
overflow:hidden;
}

</style>

</head>

<body>

<nav class="navbar navbar-dark bg-dark">
<div class="container">

<a href="dashboard.php" class="btn btn-light">
⬅ Volver
</a>

<a href="../backend/logout.php" class="btn btn-danger">
Cerrar sesión
</a>

</div>
</nav>

<div class="container mt-5">

<div class="card shadow p-4">

<h2 class="mb-4">Gestión de Productos</h2>

<form action="../backend/guardar.php" method="POST">

<div class="row">

<div class="col-md-5">
<input type="text" name="nombre" class="form-control" placeholder="Nombre producto" required>
</div>

<div class="col-md-5">
<input type="number" name="precio" class="form-control" placeholder="Precio" required>
</div>

<div class="col-md-2">
<button class="btn btn-success w-100">
Guardar
</button>
</div>

</div>

</form>

<hr>

<input type="text" id="buscador" class="form-control mb-3" placeholder="Buscar producto...">

<table class="table table-bordered table-hover text-center" id="tabla">

<thead class="table-dark">

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Precio</th>
<th>Acciones</th>
</tr>

</thead>

<tbody>

<?php while($fila = $resultado->fetch_assoc()): ?>

<tr>

<td><?= $fila["id"] ?></td>

<td><?= $fila["nombre"] ?></td>

<td>$<?= $fila["precio"] ?></td>

<td>

<button
class="btn btn-warning btn-sm"
data-bs-toggle="modal"
data-bs-target="#editar<?= $fila['id'] ?>">
Editar
</button>

<a
href="../backend/eliminar.php?id=<?= $fila['id'] ?>"
class="btn btn-danger btn-sm">
Eliminar
</a>

</td>

</tr>

<!-- MODAL EDITAR -->

<div class="modal fade" id="editar<?= $fila['id'] ?>">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">
<h5>Editar Producto</h5>
<button class="btn-close" data-bs-dismiss="modal"></button>
</div>

<form action="../backend/actualizar.php" method="POST">

<div class="modal-body">

<input type="hidden" name="id" value="<?= $fila['id'] ?>">

<label>Nombre</label>
<input
type="text"
name="nombre"
class="form-control mb-3"
value="<?= $fila['nombre'] ?>"
required>

<label>Precio</label>
<input
type="number"
name="precio"
class="form-control"
value="<?= $fila['precio'] ?>"
required>

</div>

<div class="modal-footer">

<button class="btn btn-success">
Actualizar
</button>

</div>

</form>

</div>
</div>
</div>

<?php endwhile; ?>

</tbody>

</table>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>

const buscador = document.getElementById("buscador");

buscador.addEventListener("keyup", function(){

let texto = buscador.value.toLowerCase();
let filas = document.querySelectorAll("#tabla tbody tr");

filas.forEach(fila => {

let contenido = fila.textContent.toLowerCase();

fila.style.display = contenido.includes(texto)
? ""
: "none";

});

});

</script>

</body>
</html>

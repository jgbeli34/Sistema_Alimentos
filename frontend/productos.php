<?php
session_start();

// Verificar sesión
if(!isset($_SESSION["login"])){
    header("Location: login.php");
}

include "../backend/conexion.php";

// Consultar productos
$resultado = $conexion->query("SELECT * FROM productos");
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Productos</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Iconos -->
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>

body{
    background: #f4f6f9;
    font-family: Arial, Helvetica, sans-serif;
}

/* NAVBAR */
.navbar{
    box-shadow: 0px 3px 10px rgba(0,0,0,0.2);
}

/* CARD */
.card{
    border: none;
    border-radius: 20px;
}

/* TABLA */
.table{
    background: white;
    border-radius: 15px;
    overflow: hidden;
}

/* BOTONES */
.btn{
    border-radius: 10px;
    transition: 0.3s;
}

.btn:hover{
    transform: scale(1.05);
}

/* INPUT */
.form-control{
    border-radius: 10px;
}

/* TITULO */
.titulo{
    font-weight: bold;
    color: #333;
}

/* MODAL */
.modal-content{
    border-radius: 20px;
}

</style>

</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-dark">

<div class="container">

<a href="dashboard.php" class="btn btn-light">
<i class="fa fa-arrow-left"></i> Volver
</a>

<a href="../backend/logout.php" class="btn btn-danger">
<i class="fa fa-right-from-bracket"></i> Cerrar sesión
</a>

</div>

</nav>

<!-- CONTENIDO -->
<div class="container mt-5">

<div class="card shadow-lg p-4">

<h2 class="titulo mb-4">
<i class="fa fa-burger"></i>
Gestión de Productos
</h2>

<!-- FORMULARIO -->
<form action="../backend/guardar.php" method="POST">

<div class="row g-3">

<div class="col-md-5">

<input type="text"
name="nombre"
class="form-control"
placeholder="Nombre del producto"
required>

</div>

<div class="col-md-5">

<input type="number"
name="precio"
class="form-control"
placeholder="Precio"
required>

</div>

<div class="col-md-2">

<button class="btn btn-success w-100">

<i class="fa fa-save"></i>
Guardar

</button>

</div>

</div>

</form>

<hr>

<!-- BUSCADOR -->
<input type="text"
id="buscador"
class="form-control mb-4"
placeholder="Buscar producto...">

<!-- TABLA -->
<div class="table-responsive">

<table class="table table-bordered table-hover text-center align-middle"
id="tabla">

<thead class="table-dark">

<tr>

<th>ID</th>
<th>Nombre</th>
<th>Precio</th>
<th>Acciones</th>

</tr>

</thead>

<tbody>

<?php while($p = $resultado->fetch_assoc()): ?>

<tr>

<td><?= $p["id"] ?></td>

<td><?= $p["nombre"] ?></td>

<td>$<?= $p["precio"] ?></td>

<td>

<!-- ELIMINAR -->
<a href="../backend/eliminar.php?id=<?= $p['id'] ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('¿Eliminar producto?')">

<i class="fa fa-trash"></i>
Eliminar

</a>

<!-- EDITAR -->
<button class="btn btn-primary btn-sm"
data-bs-toggle="modal"
data-bs-target="#editar<?= $p['id'] ?>">

<i class="fa fa-pen"></i>
Editar

</button>

</td>

</tr>

<!-- MODAL EDITAR -->
<div class="modal fade"
id="editar<?= $p['id'] ?>"
tabindex="-1">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header bg-primary text-white">

<h5 class="modal-title">

Editar Producto

</h5>

<button class="btn-close btn-close-white"
data-bs-dismiss="modal">
</button>

</div>

<form action="../backend/actualizar.php"
method="POST">

<div class="modal-body">

<input type="hidden"
name="id"
value="<?= $p['id'] ?>">

<label>Nombre</label>

<input type="text"
name="nombre"
class="form-control mb-3"
value="<?= $p['nombre'] ?>"
required>

<label>Precio</label>

<input type="number"
name="precio"
class="form-control"
value="<?= $p['precio'] ?>"
required>

</div>

<div class="modal-footer">

<button type="button"
class="btn btn-secondary"
data-bs-dismiss="modal">

Cancelar

</button>

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

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- BUSCADOR -->
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
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login | Sistema Alimentos</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="estilos.css">

</head>

<body class="bg-dark d-flex justify-content-center align-items-center vh-100">

<div class="container">
<div class="row justify-content-center">

<div class="col-md-4">

<div class="card shadow-lg border-0 rounded-4 p-4">

<div class="text-center mb-4">
<h2 class="fw-bold">Sistema Alimentos</h2>
<p class="text-muted">Iniciar Sesión</p>
</div>

<form action="../backend/validar.php" method="POST">

<div class="mb-3">
<input 
type="text" 
name="usuario" 
class="form-control form-control-lg"
placeholder="Usuario"
required>
</div>

<div class="mb-3">
<input 
type="password" 
name="clave" 
class="form-control form-control-lg"
placeholder="Contraseña"
required>
</div>

<button class="btn btn-dark w-100 btn-lg">
Ingresar
</button>

</form>

</div>

</div>

</div>
</div>

</body>
</html>

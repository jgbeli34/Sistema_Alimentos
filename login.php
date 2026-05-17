<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="estilos.css">
</head>

<body class="bg-login d-flex align-items-center">

<div class="container">
<div class="row justify-content-center">
<div class="col-md-4">

<div class="card p-4 shadow glass">
<h3 class="text-center">Sistema Alimentos</h3>

<form action="validar.php" method="POST">
<input type="text" name="user" class="form-control mb-2" placeholder="Usuario" required>
<input type="password" name="pass" class="form-control mb-3" placeholder="Contraseña" required>
<button class="btn btn-dark w-100">Ingresar</button>
</form>

</div>

</div>
</div>
</div>

</body>
</html>
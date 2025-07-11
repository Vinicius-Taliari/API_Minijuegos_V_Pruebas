<?php 
require_once 'header.php';
?>

<div class="container mt-5" style="max-width: 400px;">
    <h1 class="text-center">Crear cuenta</h1>
    <form action="../server/api_crear_cuenta.php" method="POST" class="mt-4">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="apellidos" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" pattern="[0-9]{9}" required>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="comunicaciones" name="comunicaciones">
            <label class="form-check-label" for="comunicaciones">Quiero recibir comunicaciones.</label>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Crear cuenta</button>
    </form>
</div>
<div>
    <p class="text-center mt-3">¿Ya tienes cuenta? <a href="login.php">Iniciar sesión</a></p>
</div>
<?php 
require_once 'footer.php';
?>
<?php 
session_start();

if(isset($_SESSION['id_usuario'])){
    header("Location: ../views/inicio.php");
    exit();
}

require_once 'header.php';


?>

<div class="container mt-5" style="max-width: 400px;">
    <h1 class="text-center">Iniciar sesión</h1>
    <form action="../server/api_iniciar_sesion.php" method="POST" class="mt-4">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
    </form>
</div>
<div>
    <p class="text-center mt-3">¿No tienes cuenta? <a href="crear_cuenta.php">Crear cuenta</a></p>
</div>
<?php 
require_once 'footer.php';
?>
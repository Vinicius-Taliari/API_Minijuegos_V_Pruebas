<?php

require_once './connection.php';

session_start();

if($_POST){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $datos = $db->select('usuarios', ['id', 'email', 'pass'], [
        'email' => $email,
    ]);
    if(count($datos) > 0){
        if(password_verify($password, $datos[0]['pass'])){
            $_SESSION['id_usuario'] = $datos[0]['id'];
            header("Refresh: 2; URL=../views/inicio.php");
            echo "Inicio de sesión exitoso.";
        } else {
            header("Refresh: 2; URL=../views/login.php");
            echo "Contraseña incorrecta.";
        }
    } else {
        header("Refresh: 2; URL=../views/login.php");
        echo "Email no encontrado.";
    }
}

?>
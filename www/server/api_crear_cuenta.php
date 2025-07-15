<?php

require_once './connection.php';

session_start();

function encriptar($password) {
    return password_hash($password, PASSWORD_BCRYPT);
}

function verificarDatosDuplicados($email, $telefono) {
    global $db;
    $datos = $db->select('usuarios', ['email'], [
        'email' => $email,
    ]);
    $datosTelefono = $db->select('usuarios', ['telefono'], [
        'telefono' => $telefono,
    ]);
    if (count($datos) > 0 || count($datosTelefono) > 0) {
        return true; // Email o telefono ya existe
    }else{
        return false; // Email y telefono no existe
    }
}

if($_POST){
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $nombre = $_POST['nombre'] ?? '';
    $apellidos = $_POST['apellidos'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $comunicaciones = isset($_POST['comunicaciones']) ? 1 : 0;

    if(empty($email) || empty($password) || empty($nombre) || empty($apellidos) || empty($telefono)){
        echo "Todos los campos son obligatorios.";
    } else {
        global $db;
        if(verificarDatosDuplicados($email, $telefono)){
            header("Refresh: 5; URL=../views/crear_cuenta.php");
            echo "El email o el telefono ya están en uso.";
            exit();
        } else { 
            $db->insert("usuarios", [
                "email" => $email,
                "pass" => encriptar($password),
                "nombre" => $nombre,
                "apellidos" => $apellidos,
                "telefono" => $telefono,
                "comunicaciones" => $comunicaciones
            ]);
            $id_user = $db->select("usuarios", [
                "id"
            ], [
                "email" => $email
            ]);
            $_SESSION['id_usuario'] = $id_user[0]['id'];
            header("Refresh: 2; URL=../views/inicio.php");
            echo "Cuenta creada correctamente.";
        }
    }
} else {
    echo "No se han recibido datos.";
}


?>
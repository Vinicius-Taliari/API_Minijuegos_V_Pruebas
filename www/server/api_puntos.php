<?php

session_start();

$id_jugador = $_SESSION['id_usuario'];

require_once 'connection.php';


header("Access-Control-Allow-Origin: http://localhost:8000");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Credentials: true");

  $data = json_decode(file_get_contents('php://input'), true);

  if($data){
    $puntos = $data['pt'];
    $id_juego = $data['id_juego'];
    echo "Puntos recibidos: $puntos\n";
    $db->insert("puntos", [
        "id_user" => $id_jugador,
        "juego" => $id_juego,
        "puntos" => $puntos,
        "fecha" => date("Y-m-d H:i:s")
    ]);
    echo "Puntos insertados correctamente.";
  }

  echo "Hola";
?>
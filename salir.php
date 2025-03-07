<?php

session_start();

if (isset($_SESSION['nombre']) && !empty($_SESSION['nombre'])) {
    
    $ultimaPartida = array(
        "tipo" => $_SESSION['tipo'],
        "nombre" => $_SESSION['nombre'],
        "edad" => $_SESSION['edad'],
        "energia" => $_SESSION['energia'],
    );

    $json = json_encode($ultimaPartida);
    file_put_contents("ultimaPartida.json", $json);

    header("Location: index.html");

    session_destroy();
}

?>
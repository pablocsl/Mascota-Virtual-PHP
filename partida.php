<?php

// Incluimos la clase Mascota
include "classMascota.php";
include "assets/forms/forms.php";

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Creamos la mascota
    $tipo = $_POST['tipo'];
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $energia = 50; // Por defecto

    // Creamos la mascota
    if ($tipo === "perro") {
        $mascota = new Perro($nombre, $edad, $energia);
    } elseif ($tipo === "gato") {
        $mascota = new Gato($nombre, $edad, $energia);
    }

    $_SESSION['tipo'] = $tipo;
    $_SESSION['nombre'] = $mascota->getNombre();
    $_SESSION['edad'] = $mascota->getEdad();
    $_SESSION['energia'] = $mascota->getEnergia();

    // Redirigimos a la partida
    interfazMascota();

} elseif (file_exists("ultimaPartida.json")) {
        
    // Cargamos los datos de la mascota
    $json = file_get_contents("ultimaPartida.json");
    $ultimaPartida = json_decode($json, true);

    // Aplicamos los datos a las variables
    $tipo = $ultimaPartida["tipo"];
    $nombre = $ultimaPartida["nombre"];
    $edad = $ultimaPartida["edad"];
    $energia = $ultimaPartida["energia"];

    // Creamos la mascota
    if ($tipo === "perro") {
        $mascota = new Perro($nombre, $edad, $energia);
    } elseif ($tipo === "gato") {
        $mascota = new Gato($nombre, $edad, $energia);
    }

    $_SESSION['tipo'] = $tipo;
    $_SESSION['nombre'] = $mascota->getNombre();
    $_SESSION['edad'] = $mascota->getEdad();
    $_SESSION['energia'] = $mascota->getEnergia();

    // Redirigimos a la partida
    interfazMascota();
}

?>
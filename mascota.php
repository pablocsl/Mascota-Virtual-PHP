<?php

// Incluimos los formularios
include "assets/forms/forms.php";

session_start();

// Buscamos si existe una partida guardada
if (file_exists("ultimaPartida.json")) {

    // Formulario para continuar la partida
    formPartida();

} else {

    // Formulario para crear una nueva mascota
    formMascota();
}

?>
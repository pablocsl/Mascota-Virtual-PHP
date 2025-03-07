<?php

session_start();

if (file_exists("ultimaPartida.json")) {
    header("Location: mascota.php");
    unlink("ultimaPartida.json");
    session_destroy();
}

?>
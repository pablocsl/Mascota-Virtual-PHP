<?php

session_start();

function formPartida() {
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tamagochi V2.0 - Restaurar Partida</title>
        <link rel="stylesheet" href="assets/styles/style.css">
    </head>
    <body>
        <div class="parent">
            <div class="div1">
                <div class="autor">Pablo Casal</div>
                <div class="horizontal-line1"></div>
                <div class="accent-dot1"></div>
                <div class="corner-geometry"></div>
                <div class="version-mark">2025</div>
            </div>
            
            <div class="div2">
                <div class="logo-container">
                    <h1 class="title">Última Partida</h1>
                    <p class="subtitle">TAMAGOCHI V2.0</p>
                </div>
            </div>
            
            <div class="div3">
                <a href="partida.php" <button class="start-btn" id="continuar-btn">Continuar Partida</button></a>
                <a href="nuevaPartida.php" <button class="start-btn" id="nueva-partida-btn">Nueva Partida</button></a>
            </div>
        </div>
    </body>
    </html>';
}

function formMascota() {
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tamagochi V2.0 - Crear Mascota</title>
        <link rel="stylesheet" href="assets/styles/style.css">
    </head>
    <body>
        <div class="parent">
            <div class="div1">
                <a href="https://github.com/pablocsl">
                    <div class="autor">@pablocsl</div>
                </a>
                <div class="horizontal-line2"></div>
                <div class="accent-dot2"></div>
                <div class="corner-geometry"></div>
                <div class="version-mark">TAMAGOCHI V2.0</div>
            </div>
            
            <div class="div2">
                <div class="logo-container">
                    <h1 class="title">Crear Mascota</h1>
                    <p class="subtitle">TAMAGOCHI V2.0</p>
                </div>
            </div>
            
            <div class="div3">
                <form class="pet-form" action="partida.php" method="POST">
                    <div class="form-group">
                        <label class="form-label">Tipo de Mascota</label>
                        <div class="radio-group">
                            <label class="radio-option">
                                <input type="radio" name="tipo" value="perro" class="radio-input" checked>
                                <span class="radio-custom"></span>
                                <span class="radio-label">Perro</span>
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="tipo" value="gato" class="radio-input">
                                <span class="radio-custom"></span>
                                <span class="radio-label">Gato</span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-input" placeholder="Nombre de la mascota" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="edad">Edad</label>
                        <input type="number" id="edad" name="edad" class="form-input number-input" min="1" max="20" value="1">
                    </div>
                    
                    <button type="submit" class="create-btn">Crear Nueva Mascota</button>
                </form>
            </div>
        </div> 
    </body>
    </html>';
}

function interfazMascota() {
    echo '<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tamagochi V2.0 - Mascota</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/styles/style.css">
    </head>
    <body>
        <div class="parent">
            <div class="div1">
                <a href="https://github.com/pablocsl">
                    <div class="autor">@pablocsl</div>
                </a>
                <div class="horizontal-line2"></div>
                <div class="accent-dot2"></div>
                <div class="corner-geometry"></div>
                <div class="version-mark">TAMAGOCHI V2.0</div>
            </div>
    
            <div class="pet-container">
                <h1 class="pet-name">' . $_SESSION['nombre'] . '</h1>
                <div class="pet-display">';
                
                if ($_SESSION['tipo'] === 'perro') {
                    echo '<div class="pet-dog" style="display: block;">
                            <img src="assets/img/perro.png" alt="perro">
                        </div>';
                } elseif ($_SESSION['tipo'] === 'gato') {
                    echo '<div class="pet-cat" style="display: block;">
                            <img src="assets/img/gato.png" alt="gato">
                        </div>';
                }
                
                echo '

                </div>
                <div class="energy-bar-container">
                    <div class="energy-bar" style="width: ' . $_SESSION['energia'] . '%;"></div>
                </div>
                <div class="energy-label">ENERGÍA</div>
            </div>
            
            <div class="actions-container">
                <button class="action-btn">COMER</button>
                <button class="action-btn">JUGAR</button>
                <button class="action-btn">BAÑAR</button>
                <button class="action-btn">DESCANSAR</button>';
                if ($_SESSION['tipo'] === 'perro') {
                    echo '<button class="action-btn">LADRAR</button>';
                } elseif ($_SESSION['tipo'] === 'gato') {
                    echo '<button class="action-btn">MAULLAR</button>';
                }
                echo '
            </div>
            
            <div class="navigation">
                <a href="salir.php"
                    <button class="nav-btn">SALIR</button>
                </a>
            </div>
        </div>

        <script src="src/main.js"></script>

    </body>
    </html>';
}

?>
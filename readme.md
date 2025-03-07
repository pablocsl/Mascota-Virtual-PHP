# Mascota Virtual (PHP)

En este proyecto trataremos de crear a través del lenguaje PHP, una mascota virtual con la que podamos interactuar.
Para ello, deberemos de desarrollar las clases necesarias para cada caso y sus respectivos métodos que ayudarán a interactuar con nosotros.

Aclarar que este proyecto se va a dividir en dos fases : una primera en la cual se va a desarrollar toda la lógica de la mascota virtual sin muchas complicaciones y en terminal, mientras que en la segunda fase lo intentaremos llevar mas allá con una interfaz gráfica, una sesión de juego que guardará el estado de la mascota para cuando volvamos a entrar en ella y además de una interfaz algo más gráfica y amigable.

- Primera Fase -- Tamagochi v1.0 :
    - Diagrama de clases
    - Creación de las clases
    - Desarrollo de los métodos
    - Implementación de los métodos
    - Terminal
- Segunda Fase -- Tamagochi v2.0 : 
    - Sesión de juego
    - Algún nuevo método (bañar)
    - Interfaz gráfica

## Diagrama de clases

![Diagrama de clases](assets/diagrama/diagrama.png)

## Estructura

```
└── 📁assets
    └── 📁diagrama
        └── diagrama.png
    └── 📁forms
        └── forms.php
    └── 📁img
        └── gato.png
        └── perro.png
    └── 📁styles
        └── style.css
└── 📁src
    └── main.js
└── classMascota.php
└── index.html
└── mascota.php
└── nuevaPartida.php
└── partida.php
└── readme.md
└── salir.php
└── ultimaPartida.json
```

## Requisitos

* PHP 7.4.x o superior

## Instalación

1. Clonar el repositorio
2. Lanzar con php el archivo mascota.php
3. Si todo va bien, se mostrará un menú interactivo con las opciones que se indican en el archivo mascota.php
4. Y ya podremos crear e interactuar con nuestra mascota virtual

## Autor

[Pablo Casal - @pablocsl](https://github.com/pablocsl)
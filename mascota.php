<?php

// Clase base Mascota
class Mascota {
    protected $nombre;
    protected $edad;
    protected $energia;

    public function __construct($nombre,$edad,$energia) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->energia = $energia;
    }

    // Métodos getter
    public function getNombre() {
        return $this->nombre;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function getEnergia() {
        return $this->energia;
    }

    // Métodos setter
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function setEnergia($energia) {
        $this->energia = $energia;
    }

    // Método comer
    public function comer() {
        $comer = $this->energia + 5;
        $this->setEnergia($comer);
    }

    // Método jugar
    public function jugar() {
        $jugar = $this->energia - 10;
        $this->setEnergia($jugar);
    }

    // Método descansar
    public function descansar() {
        $descansar = $this->energia + 10;
        $this->setEnergia($descansar);
    }
}

// Clase Perro que hereda de Mascota
Class Perro extends Mascota {
    public function __construct($nombre,$edad,$energia) {
        parent::__construct($nombre,$edad,$energia);
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->energia = $energia;
    }

    // Método ladrar
    public function ladrar() {
        echo "¡¡ Guau, guau !!";
        $ladrar = $this->energia - 1;
        $this->setEnergia($ladrar);
    }
}

// Clase Gato que hereda de Mascota
Class Gato extends Mascota {
    public function __construct($nombre,$edad,$energia) {
        parent::__construct($nombre,$edad,$energia);
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->energia = $energia;
    }

    // Método maullar
    public function maullar() {
        echo "¡¡ Miuauu !!";
        $maullar = $this->energia - 1;
        $this->setEnergia($maullar);
    }
}

$mascota = 0;
$tipo = 0;
$nombre = "";
$edad = 0;
$energia = 0;
$var1 = 0 ;
$i=0;

echo "Has accedido al tamagochi v1.0";

while (true) {

echo "\n";

// Si existe mascota
if ($mascota) {
    // Comprobamos energia
    $energia = $mascota->getEnergia();
    if ($energia <= 0) {
        echo "'" . $mascota->getNombre() . "' se ha quedado sin energía y ha muerto. \n";
        echo "Prueba a crear una nueva mascota. \n";
        exit;
    } elseif ($energia >= 100) {
        $mascota->setEnergia(100);
    }
    
    // Pintamos perro
    if ($tipo === "perro") {
        $perro = fopen("./"."perro.txt","r");
        while(! feof($perro)) {
            $lineap = fgets($perro);
            echo "$lineap";
        }
        fclose($perro);
    }
    // Pintamos gato
    if ($tipo === "gato") {
        $gato = fopen("./"."gato.txt","r");
        while(! feof($gato)) {
            $lineag = fgets($gato);
            echo $lineag;
        }
        fclose($gato);
    }

    // Pintamos Nombre
    echo "\n";
    echo strtoupper($mascota->getNombre()) . "\n";

    // Pintamos Energía
    if ($var1 == 1) {
        $barra_energia = ">>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>==================================================";
    } elseif ($var1 == 2) {
        // Le sumamos 5 a la barra de energia
        $barra_energia = substr($barra_energia, 0, 95);
        $barra_energia = ">>>>>" . $barra_energia;
    } elseif ($var1 == 3) {
        // Le restamos 10 a la barra de energia
        $barra_energia = substr($barra_energia, 10);
        $barra_energia = $barra_energia . "==========";
    } elseif ($var1 == 4) {
        // Le sumamos 10 a la barra de energia
        $barra_energia = substr($barra_energia, 0, 90);
        $barra_energia = ">>>>>>>>>>" . $barra_energia;
    } else if ($var1 == 5) {
        // Le restamos 1 a la barra de energia
        $barra_energia = substr($barra_energia, 1);
        $barra_energia = $barra_energia . "=";
    }
    echo $barra_energia . " " . $mascota->getEnergia() . " % \n";
}

// Pintamos menú interactivo
echo "\n";
echo "1. Crea tu mascota \n";
echo "2. Alimentar a tu mascota \n";
echo "3. Jugar con tu mascota \n";
echo "4. Permitir que descanse \n";
echo "5. Escuchar el sonido de tu mascota \n";
echo "6. Salir \n";
echo "\n";
echo "Introduzca al opción que le interese : ";
$opcion1 = trim(fgets(STDIN));
echo "\n";

// Definimos los posibles casos para el menú
switch ($opcion1) {
    case "1":
        // Control de error, en el caso de que se haya creado la mascota
        if ($mascota) {
            echo "Ya has creado una mascota.\n";
            break;
        }
        
        // Tipo de mascota
        start:
        echo "Tipo de mascota (Perro/Gato) : ";
        $tipo = trim(fgets(STDIN));
        switch ($tipo) {
            case "Perro":
            case "perro":
            case "PERRO":
                $tipo = "perro";
                break;
            case "Gato":
            case "gato":
            case "GATO":
                $tipo = "gato";
                break;
            default:
                echo "La opción introducida no está disponible, vuelve a intentarlo. \n";
                goto start;
        }

        // Nombre mascota
        echo "Nombre de la mascota : ";
        $nombre = trim(fgets(STDIN));

        // Edad mascota
        echo "Edad de la mascota (1-20) : ";
        $edad = trim(fgets(STDIN));
        if ($edad <= 0) {
            $edad = 1;
        } elseif ($edad > 20) {
            $edad = 20;
        }

        // Energía por defecto
        $energia = 50;
        
        // Pregunta de seguridad
        echo "¿Tu mascota es un " . $tipo . " llamado '" . $nombre . "' que tiene " . $edad . " año(s)? (s/N) : ";
        $opcion2 = trim(fgets(STDIN));
        switch ($opcion2) {
            case "":
            case "Si":
            case "si":
            case "SI":
            case "s":
            case "S":
                break;
            default:
                echo "Si te has equivocado en los datos sobre tu mascota, puedes volver a intentarlo de nuevo. \n";
                echo "\n";
            goto start;
        }

        // Creamos el objeto
        if ($tipo === "perro") {
            $mascota = new Perro ($nombre,$edad,$energia);
        } elseif ($tipo === "gato") {
            $mascota = new Gato ($nombre,$edad,$energia);
        }

        $var1 = 1;
        break;
    case "2":
        // Si se ha creado una mascota
        if ($mascota) {
            // Y su energia es menor que 100
            if ($energia < 100) {
                echo "'" . $mascota->getNombre() . "' está comiendo ..."; 
                $mascota->comer();
            } else {
                echo "Tu mascota '" . $mascota->getNombre() . "' ya tiene el máximo de energía. \n";
                echo "Prueba a jugar un poco con ella. \n";
            }
        } else {
            echo "Aún no has creado ninguna mascota. \n";
            echo "Prueba a crear tu primera mascota con la 1º opción del menú. \n";
        }
        
        $var1 = 2;
        break;
    case "3":
        // Si se ha creado una mascota
        if ($mascota) {
            // Y su energia es mayor que 0
            if ($energia > 0) {
                echo "Has decidido jugar con '" . $mascota->getNombre() . "'. \n";
                echo "Su energía disminuirá. \n";
                $mascota->jugar();
            }
        } else {
            echo "Aún no has creado ninguna mascota. \n";
            echo "Prueba a crear tu primera mascota con la 1º opción del menú. \n";
        }

        $var1 = 3;
        break; 
    case "4":
        // Si se ha creado una mascota
        if ($mascota) {
            // Y su energia es menor que 100
            if ($energia < 100) {
                echo "'" . $mascota->getNombre() . "' está descansando ..."; 
                $mascota->descansar();
            } else {
                echo "Tu mascota '" . $mascota->getNombre() . "' ya tiene el máximo de energía. \n";
                echo "Prueba a jugar un poco con ella. \n";
            }
        } else {
            echo "Aún no has creado ninguna mascota. \n";
            echo "Prueba a crear tu primera mascota con la 1º opción del menú. \n";
        }

        $var1 = 4;
        break;
    case "5":
        // Si se ha creado una mascota
        if ($mascota) {
            // Si su energia es mayor que 0
            if ($energia > 0) {
                // Y si su tipo es perro
                if ($tipo === "perro") {
                    $mascota->ladrar();
                } else {
                    $mascota->maullar();
                }
            }
        } else {
            echo "Aún no has creado ninguna mascota. \n";
            echo "Prueba a crear tu primera mascota con la 1º opción del menú. \n";
        }

        $var1 = 5;
        break;
    case "6":
        // Salida del bucle infinito
        echo "Saliendo ... \n";
        exit;
    default:
        // Para los valores distintos de los definidos en el menu
        echo "La opción introducida no se encuentra definida en el menú del programa. \n";
        echo "Vuelve a intentarlo. \n";
        $var1 = 0;
}
}

?>
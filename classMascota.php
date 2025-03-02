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

    // Método bañar
    public function bañar() {
        $bañar = $this->energia + 5;
        $this->setEnergia($bañar);
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

?>
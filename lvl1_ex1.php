<?php 

abstract class Animal{

    public string $nombre;

    public function __construct($nombre){

        $this->nombre = $nombre;
        
    }

    abstract public function makeSound();

}

class Perro extends Animal{

    public string $sonido = "Guau, guau!";

    public function makeSound(){

        return $this->nombre . " es un perro y hace: " . $this->sonido;
        
    }

}

class Serpiente extends Animal{

    public string $sonido = "Hola cuñado, el domingo voy a comer a tu casa.";

    public function makeSound(){

        return $this->nombre . " es una serpiente y hace: " . $this->sonido;
        
    }

}

$perro = new Perro("Ronin");

echo $perro->makeSound();

echo "<br>";

$serpiente = new Serpiente("Lidia");

echo $serpiente->makeSound();
?>
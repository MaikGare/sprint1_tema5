<?php

    interface Shape{

        public function area();
    }

    class Rectangle implements Shape{

        public $base;
        public $altura;

        public function __construct($base, $altura){
           
            $this->base = $base;
            $this->altura = $altura;

        }

        public function area(){
            return $this->base * $this->altura;
        }
    }

    class Triangle implements Shape{

        public $base;
        public $altura;

        public function __construct($base, $altura){
           
            $this->base = $base;
            $this->altura = $altura;

        }

        public function area(){
            return ($this->base * $this->altura) / 2;
        }
    }

    class Cercle implements Shape{

        public $radi;
        public const PI = 3.1415;

        public function __construct($radi){
           
            $this->radi = $radi;

        }

        public function area(){
            return ($this->radi * $this->radi) * self::PI;
        }
    }

    $rectangle = new Rectangle(6,5);
    echo $rectangle->area();

    echo "<br>";

    $triangle = new Triangle(8,5);
    echo $triangle->area();

    echo "<br>";

    $cercle = new Cercle(4);
    echo $cercle->area();
?>
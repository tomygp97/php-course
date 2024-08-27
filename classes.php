<?php
declare(strict_types = 1);

class SuperHero {
    // propiedades y métodos

    // promoted properties deesde PHP 8
    // readonly necesita pasar el tipo de dato y no se puede reasignar
    public function __construct(readonly public string $name, public array $powers, public string $planet) {}

    public function attack() {
        return "¡$this->name ataca!";
    }

    public function show_all() {
        return get_object_vars($this);
    }

    public function description() {
        // implode transforma un arreglo en una cadena. El primer argumento es el separador y el segundo es el arreglo
        //* implode es como el join de javascript y explode es como el split
        // se puede utilizar la palabra join para utilizar implode ya que la palabra join es alias de implode
        $powers = implode(", ", $this->powers);
        return "$this->name es un superhéroe que viene de $this->planet y sus poderes son: $powers.";
    }

    public static function random() {
        $names = ["Superman", "Batman", "Spiderman", "Thor", "Ironman", "Hulk", "Captain America"];
        $powers = [["fuerza", "velocidad"], ["agua", "fuego", "tierra", "aire"], ["Fuerza", "Velocidad", "Resistencia"], ["Volar", "Rayos X"], [" Cambio de forma"]];
        $planets = ["Krypton", "Jupiter", "Marte", "Tierra", "Venus", "Asgard"];

        $name = $names[array_rand($names)];
        $power = $powers[array_rand($powers)];
        $planet = $planets[array_rand($planets)];

        // echo "El superhéroe $name viene de $planet y sus poderes son: " . implode(", ", $power);
        return new self($name, $power, $planet);
    }
}

// metodo estatico
// SuperHero::random(); // con :: podemos acceder a los métodos estáticos sin crear un objeto

$hero = SuperHero::random();
echo $hero->description();

// instanciar
// $hero = new SuperHero("Superman", ["fuerza", "velocidad"], "Krypton");
// echo $hero->description();
// var_dump($hero->show_all());

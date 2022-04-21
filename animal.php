<?php

class Animal {
    public string $foodType;
    public string $height;
    public string $weight;
    public string $name;

    private int $position = 0;

    public function __construct(string $name, string $weight, string $height)
    {
        $this->name = $name;
        $this->weight = $weight;
        $this->height = $height;
    }

    final public function move(int $time, int $speed = 50) : void
    {
        $this->position += $time * $speed;
    }

    public function getPosition() : int
    {
         return $this->position;
    }

    public function eat() : void
    {

    }
}

class Bird extends Animal
{
    public function fly(int $time, int $speed = 10) : void
    {
        $this->move($time, $speed);
    }
}

final class Fish extends Animal
{
    public function swim(int $time, int $speed = 5) : void
    {
        $this->move($time, $speed);
    }
}

 
$pike = new Fish('pike', 5, 20);
$pike->swim(1, 10);
echo $pike->getPosition();

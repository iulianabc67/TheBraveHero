<?php

class Beast extends Player
{
    function __construct(string $name)
    {
        $this->life = rand(55, 80);
        $this->power = rand(50, 80);
        $this->defence = rand(35, 55);
        $this->speed = rand(40, 60);
        $this->luck = rand(25, 40);

        $this->name = $name;
    }
}

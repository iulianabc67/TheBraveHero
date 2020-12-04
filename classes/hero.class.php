<?php

class Hero extends Player
{
    function __construct(string $name)
    {
        $this->life = rand(65, 95);
        $this->power = rand(60, 70);
        $this->defence = rand(40, 50);
        $this->speed = rand(40, 50);
        $this->luck = rand(10, 30);

        $this->name = $name;
    }
}

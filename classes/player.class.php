<?php

class Player
{
    protected $life;
    protected $power;
    protected $defence;
    protected $speed;
    protected $luck;

    public function getName()
    {
        return $this->name;
    }

    public function getLife()
    {
        return $this->life;
    }

    public function setLife($life)
    {
        $this->life = $life;
    }

    public function getPower()
    {
        return $this->power;
    }

    public function getDefence()
    {
        return $this->defence;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getLuck()
    {
        return $this->luck;
    }
}

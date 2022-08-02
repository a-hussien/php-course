<?php

/*
 - Abstraction And Polymorphism Pillars
 - interface, implements keyword
 - interface can't define properties
 - have only public methods without body
*/
interface Shape
{
    public function getAria($x, $y);
    public function getShadow(getAria $aria, $z);
}

class Square implements Shape
{
    public function getAria($x, $y)
    {
        return $x * $y;
    }

    public function getShadow($aria, $z)
    {
        return $aria - $z;
    }
}

$square = new Square;

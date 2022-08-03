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
}

class Square implements Shape
{
    public function getAria($x, $y)
    {
        return $x * $y;
    }
}

$square = new Square;

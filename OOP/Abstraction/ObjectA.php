<?php

/*
 - Abstraction pillar
 - Polymorphism pillar
*/

abstract class ObjectA
{
    protected $unit;
    abstract public function randomUnit(mixed $val);

}

class Obj extends ObjectA
{
    public function randomUnit($val)
    {
        return $this->unit = ($val - 5) * 2 . ' Px';
    }
    
}

class Objx extends ObjectA
{
    public function randomUnit($val)
    {
        return $this->unit = ($val[0] / $val[1]) * 3 . ' Cm';
    }
    
}

$obj = new Obj;

var_dump($obj->randomUnit(15));

$objx = new Objx;

var_dump($objx->randomUnit([15, 3]));



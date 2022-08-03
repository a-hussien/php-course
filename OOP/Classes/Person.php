<?php

/*
 - Override and Final Keyword
 - We can Override methods from the child class 
 - Final Keyword prevent Overriding methods or even classes
*/
class Person
{
    protected $type;

    // this method will be Overriding in the child classes
    protected function getType()
    {
        return $this->type;
    }

    // use final keyword to prevent Overriding this method
    Final public function shortType(string $val)
    {
        return $this->type = ucfirst($val);
    }
}

class Male extends Person
{
    public function getType()
    {
        return $this->type = 'Male';
    }
}

class Female extends Person
{
    public function getType()
    {
        return $this->type = 'Female';
    }
}

$male = new Male;
$female = new Female;

var_dump($male->getType());
var_dump($female->getType());
var_dump($male->shortType('m'));
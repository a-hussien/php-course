<?php

class User
{
    // Constractor Property Promotion 
    public function __construct(protected ?string $name = 'Ahmed')
    {
        //
    }

    public function getName()
    {
        return $this->name;
    }

    public function profile()
    {
        return new Profile;
    }
}
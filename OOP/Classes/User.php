<?php

/*
- declare Class "User"
- Access modifiers ['public', 'private', 'protected']
- Properties
- self and static Keywords
- Methods
*/

class User 
{
    // Properties
    public $firstName, $lastName;
    public ?string $major = 'Dev';
    protected $gender = 'Male';

    // static Property
    public static string $location = 'Ismailia';
    
    // Method
    public function setName($first, $last)
    {
        $this->firstName = $first;
        $this->lastName = $last;
    }

    // Method
    public function getFullName()
    {
        return ucfirst($this->firstName). ' ' .ucfirst($this->lastName);
    }

    // static method
    public static function getLocation()
    {
        return self::$location;
    }

}
<?php

class Person
{
    //Properties
    
    public $name;
    private $age;
    
    //Constructor
    
    public function __construct($name)
    {
        $this->name = $name;
    }
    
    //Setters
    
    public function setAge($age)
    {
        if($age < 18)
            throw new InvalidArgumentException("Must be 18 or older.");
        
        $this->age = $age;
    }
}

?>
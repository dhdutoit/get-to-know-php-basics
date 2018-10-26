<?php

class SuperHero
{
    private $name;

    // constructors are always 'public'
    // they are called when you create an instance (object) of the class
    function __construct($superName)
    {
        $this->name = $superName;
    }

    // method declaration
    public function sayMyName()
    {
        echo $this->name . "\n";
    }
}

// instantiate an instance of the class
$hero = new SuperHero("SUPERMAN");

// call a method of the class via the class object
$hero->sayMyName();

<?php

class SimpleClass
{
    // method declaration
    public function sayHello()
    {
        echo "Hello There!\n";
    }
}

// instantiate an instance of the class
$simple = new SimpleClass();

// call a method of the class via the class object
$simple->sayHello();

<?php

class SimpleClass
{
    // public is accessable from outside the class
    public $pub = 'a public default value';
    // private is only accessable within the class
    private $priv = 'a private default value';
    // protected is accessable from within the class and inheriting or parent classes
    protected $prot = 'a protected default value';

    // properties that do/may not change
    const CONSTANT = 'constant value';

    // method declaration
    public function sayHello()
    {
        echo $this->priv . "\n";
    }

    public function whatIsTheConstant()
    {
        echo self::CONSTANT . "\n";
    }
}

$simple = new SimpleClass();

$simple->sayHello();

// unless specified as private or protected all attribites are concidered public
$simple->whatIsTheConstant();

// can access public attributes directly
echo $simple->pub . "\n";

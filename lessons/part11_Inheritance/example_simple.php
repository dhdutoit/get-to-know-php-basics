<?php

class Base
{
    public $myName;

    public function __construct()
    {
        $this->myName = "THE PARENT";
    }

    public function sayMyName()
    {
        echo $this->myName . "\n";
    }
}

class Inherriting extends Base
{
    public $myName;

    public function __construct()
    {
        parent::__construct();
    }

    public function setMyName($name)
    {
        $this->myName = $name;
    }
}

$object = new Inherriting();
$object->sayMyName();
$object->setMyName('THE CHILD');
$object->sayMyName();

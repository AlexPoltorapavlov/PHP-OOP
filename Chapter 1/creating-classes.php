<?php

class SomeClass
{
    /**__construct allows you to make some operations and inicialise some properties
     * before anything operations. All arguments in construct need to inicialise
     * when the object is created.
    */
    public function __construct(public $id, public $variable) 
    {
/** there is you can make anything that must be made the first */
    }

    public function methodExample($divisior = 1, $multiplier = 1)
    {
        $id = $this->id;
        $variable = $this->variable * $multiplier;
        return "id ".$id." variable ".$variable;
    }
}

$someObject = new SomeClass(id:0, variable:1); # there is construct arguments
var_dump($someObject->methodExample());
die();
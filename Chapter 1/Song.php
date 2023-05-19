<?php
/**
 * all primitive types:
 * boolean
 * integer
 * float
 * string
 * object
 * resource
 * array
 * null
 */

class Song
{
    public $name;
    public $numberOfPlays;
// you can explicity get the property type:
    public function __construct(string $name, int $numberOfPlays)
    {
        $this->name = $name;
        $this->numberOfPlays = $numberOfPlays;

    }
}
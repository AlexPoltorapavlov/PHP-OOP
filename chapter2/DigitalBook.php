<?php

require_once 'Book.php';

class DigitalBook extends Book
{
    public int $filesize;
    public function __construct(
        string $title, 
        string $author, 
        int $price,
        int $filesize
        )
        {
            parent::__construct($title, $author, $price);
            $this->filesize = $filesize;
        }

    public function getWeight(): int
    {
        return $this->filesize;
    }

    public function print(): string
    {
        return "{$this->title}, {$this->author}, file-size: {$this->filesize}";
    }
}
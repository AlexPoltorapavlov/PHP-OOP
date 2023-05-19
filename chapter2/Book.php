<?php

abstract class Book // create abstract class
{
    public $title;
    public $author;
    public $price;


    public function __construct(
        string $title, 
        string $author, 
        int $price,
        )
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
    public function getAuthor(): string
    {
        return $this->author;
    }
    public function getPrice(): int
    {
        return $this->price;
    }

    abstract protected function write(): string; // more abstractions for God of abstractions
}
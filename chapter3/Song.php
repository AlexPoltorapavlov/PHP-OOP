<?php

class Song
{
    private string $author;
    private int $id;
    private int|float $rating = 0;
    
    public function __construct(string $author, int $id)
    {
        $this->author = $author;
        $this->id = $id;
    }

    public function print(): string
    {
        return "{$this->author}, {$this->id}";
    }

    public function setRating(int|float $rating): int|float
    {
        if ($rating < 0)
        {
            $this->rating = 0;
        }
        elseif ($rating >5)
        {
            $this->rating = 5;
        }
        else
        {
            $this->rating = $rating;
        }

        return $this->rating;
    }

    public function getRating(): int|float
    {
        return $this->rating;
    }

}
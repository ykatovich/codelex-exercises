<?php

class MovieCollection
{
    private array $movieCollection = [];

    public function addMovie(Movie $movie): void
    {
        $this->movieCollection[] = $movie;
    }

    public function getPG(): array
    {
        $PGarray = [];
        foreach ($this->movieCollection as $value) {
            if ($value->getRating() === "PG") {
                array_push($PGarray, $value);
            }
        }
        return $PGarray;
    }
}
<?php

class DogCollection
{
    private array $dogs = [];

    public function addDog(Dog $dog)
    {
        $this->dogs[] = $dog;
    }
}

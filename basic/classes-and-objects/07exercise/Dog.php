<?php

class Dog
{
    private string $name;
    private string $sex;
    private ?Dog $mother;
    private ?Dog $father;

    public function __construct(string $name, string $sex, ?Dog $mother, ?Dog $father)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }

    public function getFathersName(): string
    {
        if (!is_null($this->father)) {
            return $this->father->name;
        } else {
            return "Unknown";
        }
    }

    public function hasSameMotherAs(Dog $otherDog): bool
    {
        if ($this->mother === $otherDog->mother) {
            return true;
        } else {
            return false;
        }
    }


}
<?php

class Video
{
    private string $title;
    private bool $flag;
    private float $rating;
    private array $averageUserRating = [];

    public function __construct(string $title, bool $flag = true)
    {
        $this->title = $title;
        $this->flag = $flag;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getFlag(): string
    {
        if ($this->flag === false) {
            return "Rented";
        } else {
            return "In store";
        }
    }

    public function setFlag(int $flag): void
    {
        $this->flag = $flag;
    }

    public function rating(float $rating): void
    {
        if ($this->rating >= 0 || $this->rating <= 10) {
            $this->averageUserRating[] = $rating;
        }
    }


    public function getAverageRating(): int
    {
        return number_format(array_sum($this->averageUserRating) / count($this->averageUserRating), 2);
    }


}
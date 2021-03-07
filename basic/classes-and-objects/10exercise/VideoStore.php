<?php

class VideoStore
{
    private array $videos = [];

    public function addVideo(Video $video)
    {
        $this->videos[] = $video;
    }


    public function checkOutVideo(string $filmName): string
    {
        foreach ($this->videos as $value) {
            if ($value->getTitle() === $filmName) {
                return $value->getFlag();
            }
        }
        return "We dont have '$filmName'";
    }

    public function rentVideo(string $filmName): void
    {
        foreach ($this->videos as $value) {
            if ($value->getTitle() === $filmName) {
                $value->setFlag(0);
            }
        }
    }

    public function returnVideo(string $filmName): void
    {
        foreach ($this->videos as $value) {
            if ($value->getTitle() === $filmName) {
                $value->setFlag(1);
            }
        }
    }

    public function movieRating(string $videoTitle, int $rating): void
    {
        foreach ($this->videos as $value) {
            if ($value->getTitle() === $videoTitle) {
                $value->rating($rating);
                $value->getAverageRating();
            }
        }
    }

    public function printAllVideosInStore(): void
    {
        foreach ($this->videos as $value) {
            echo "Name: " . $value->getTitle() . " Status: " . $value->getFlag() . PHP_EOL;
        }
    }

}
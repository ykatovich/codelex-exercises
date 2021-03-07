<?php

require_once 'VideoStore.php';
require_once 'Video.php';

class Application
{
    function run(VideoStore $video)
    {
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->addMovies($video);
                    break;
                case 2:
                    $this->rentVideo($video);
                    break;
                case 3:
                    $this->returnVideo($video);
                    break;
                case 4:
                    $this->listInventory($video);
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
            echo PHP_EOL;
        }
    }

    private function addMovies(VideoStore $video): void
    {
        $video->addVideo(new Video(readline("Input a name of movie: ")));
    }

    private function rentVideo(VideoStore $video): void
    {
        $filmName = readline("Which film you want to rent? ");
        $video->rentVideo($filmName);
    }

    private function returnVideo(VideoStore $video)
    {
        $filmName = readline("Which film you want to return? ");
        $rating = readline("Thanks. What is your rating? ");
        $video->returnVideo($filmName);
        $video->movieRating($filmName, $rating);
    }

    private function listInventory(VideoStore $video)
    {
        $video->printAllVideosInStore();
    }
}

$films = new VideoStore();

$films->addVideo($matrix = new Video("The Matrix"));
$films->addVideo($godfather2 = new Video("Godfather II"));
$films->addVideo($starWars = new Video("Star Wars Episode IV: A New Hope"));


$app = new Application();
$app->run($films);

<?php

require_once 'Movie.php';
require_once 'MovieCollection.php';

$movies = new MovieCollection();
$movies->addMovie(new Movie("Casino Royale", "Eon Productions", "PG13"));
$movies->addMovie(new Movie("Glass", "Buena Vista International", "PG13"));
$movies->addMovie(new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG"));

foreach($movies->getPG() as $value){
    print_r($value);
}
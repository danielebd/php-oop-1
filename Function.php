<?php
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Type.php';
require_once __DIR__ . '/db.php';

$results = [];

foreach($movies as $movie){
    array_push($results, 
    new Movie($movie['title'], $movie['type'], $movie['duration'], $movie['director'] ));
};
var_dump($results);

?>

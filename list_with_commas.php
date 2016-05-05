<?php

 // Converts array into list n1, n2, ..., and n3
 function humanizedList($array, $alphabet = true) {

    if ($alphabet == true) {

        asort($array);
    }

    $lastOne = array_pop($array);
    $newString = implode(', ', $array);

    $lastString = ($newString . ' and ' . $lastOne);

    return $lastString;

 }

 // List of famous peeps
 $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

 // TODO: Convert the string into an array
 $physicistsArray = explode(', ', $physicistsString);

 // Humanize that list
 $famousFakePhysicists = humanizedList($physicistsArray);

 // Output sentence
  echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;

 





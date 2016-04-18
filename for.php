<?php


fwrite(STDOUT, "Please enter starting number and ending number\n");

$firstNum = trim(fgets(STDIN));

$endNum = trim(fgets(STDIN));

$increment = trim(fgets(STDIN));
// // if (($argc == 2) && is_numeric($argv[1]) && is_numeric($argv[2])) {
    
// //     $start = $argv[1];

// //     $end = $argv[2];

// // }else   {

// //     echo "Please add a start/end value\n";

// //      exit();

//  }

for ($a = $firstNum; $a <= $endNum; $a += $increment)   {

echo "$a\n";

}
<?php


// $test = 5;

// while ($test <= 15) {

//     echo "$test\n";

//     $test++;

// }



$number = 99;

do {


if  ($number >= 3)    {

    echo "{$number} bottles of beer on the wall, {$number} bottles of beer.\n";

    $nextNumber= $number-1;

    echo "Take one down pass it around {$nextNumber} bottles of beer on the wall.\n";
    
}elseif ($number == 1) {
    
    echo "{$number} bottle of beer on the wall, {number} bottle of beer. Take one down and pass it around, no more bottles of beer on the wall.\n";

} else    {

  echo   "No more bottles of beer on the wall, no more bottles of beer. 
        Go to the store and buy some more, 99 bottles of beer on the wall.\n";
}$number--;  sleep(3);
}while (true);  
<?php

$number = 99;

echo "What do you drink?  ";

$drink = trim(fgets(STDIN));

do {


    if  ($number >= 3)    {

        echo "{$number} bottles of {$drink} on the wall, {$number} bottles of {$drink}.\n";

        $nextNumber= $number-1;

        echo "Take one down pass it around {$nextNumber} bottles of {$drink} on the wall.\n";
        
    }elseif ($number == 1) {
        
        echo "{$number} bottle of {$drink} on the wall, {number} bottle of {$drink}. Take one down and pass it around, no more bottles of {$drink} on the wall.\n";

    } else    {

      echo   "No more bottles of {$drink} on the wall, no more bottles of {$drink}. 
            Go to the store and buy some more, 99 bottles of {$drink} on the wall.\n";
    }$number--;  sleep(3);
}while (true);  
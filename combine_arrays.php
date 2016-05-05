<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


function combine_arrays($array1, $array2)   {

$newArray = [];


   foreach ($array1 as $index => $value) {

      if  (array_search($value, $array2) !== false)  {
       
        array_push($newArray, $value); 

       } else {
        array_push($newArray, $array1[$index], $array2[$index]);
       }
   }
   return $newArray;
}

print_r (combine_arrays($names, $compare));














<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];



$query = 'Tina';

$result = array_search($query, $names, false);

var_dump($result);


$query2 = 'Bob';

$result = array_search($query2, $names, false);

var_dump($result);



$count = 0;

foreach ($names as $value) {

    if (array_search($value, $compare) !== false) {
        
      $count++;

    }
}
var_dump($count);




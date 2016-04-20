<?php


$y = 0;
$x = 30;

function add($a, $b)
{
    if (is_numeric($a)  && is_numeric($b))  {
    return $a + $b;
    }else{

        return "{$a} and {$b} are not numeric\n";
    }
}

function subtract($a, $b)
{
    if (is_numeric($a)  && is_numeric($b))  {
    return $a - $b;
    }else{

        return "{$a} and {$b} are not numeric\n";
    }
}

function multiply($a, $b)
{   if (is_numeric($a)  && is_numeric($b))  {
    return $a * $b;
    }else{

        return "{$a} and {$b} are not numeric\n";
    }   
}

function divide($a, $b) {

// {   if (0 != ($a)  && 0 != ($b))  {
    throwErrorMessage($a,$b);    
    return $a / $b;
    // }else      {

        // return " NO zeros allowed {$a}  {$b} \n";
    // }   
}
function modulus($a, $b)
{   if ( 0 != ($a)  && 0 != ($b))  {
    return $a % $b;
    }else{

        return " NO zeros allowed {$a}  {$b} \n";
    }   
}
function throwErrorMessage($a, $b)  {

    // if (!is_numeric($a)  || !is_numeric($b)){
    //     return "{$a} and {$b} are not numeric\n";
    // }else {

       if  (0 == ($a)  || 0 == ($b)){
        return " NO zeros allowed {$a}  {$b} \n";
    }

}

// Add code to test your functions here
echo add($x, $y) . PHP_EOL;
echo subtract($x, $y) . PHP_EOL;
echo multiply($x, $y) . PHP_EOL;
echo divide(5, 0) . PHP_EOL;
echo modulus($x, $y) . PHP_EOL;
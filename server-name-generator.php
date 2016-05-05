

<?php
// $input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
// $rand_keys = array_rand($input, 2);
// echo $input[$rand_keys[0]] . "\n";
// echo $input[$rand_keys[1]] . "\n";





function random1() {

    $adjectivesArray = ["good", "new", "first", "last", "long", "bad", "same", "next","same","few"];

    $rand_keys = array_rand($adjectivesArray);

return $adjectivesArray[$rand_keys];
}   

 random1();

function random2()   {

$nounsArray = ["jam", "soil", "star", "wallet", "screen", "leg", "child", "sand", "room", "dancer"];

    $rand_keys = array_rand($nounsArray);

    return $nounsArray[$rand_keys];

}
    random2();


function output()   {

    $firstString = random1();
    $secondString = random2();

    echo "Your server name is " . $firstString . "-" . $secondString . "\n";

}
output();
    










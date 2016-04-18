<?php





for ($i = 1; $i <= 100; $i++) {


    if (0 == $i % 15)   {

        echo "FIZZBUZZ\n";
    
    }elseif (0 == $i % 5)    {

        echo "Buzz\n";

    }elseif (0 == $i % 3)   {

        echo "Fizz\n";

    }else  {
        
        echo "$i\n";    
    }

}
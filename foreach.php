<?php


$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);



foreach ($things as $multiple) {

    if (is_int($multiple))  {

        echo "{$multiple}\n ";

    }elseif (is_float($multiple))  {

        echo "{$multiple}\n ";

    }elseif (is_bool($multiple))  {

        echo "{$multiple}\n ";

    }elseif (is_array($multiple))  {
            
            foreach ($multiple as $single) {
                echo "{$single} ";

            }
        
    }elseif (is_null($multiple))  {

        echo "{$multiple}\n ";

    }elseif (is_string($multiple))  {

        echo "{$multiple}\n ";

    }else   {

        echo "it is nothing\n";
    }
}
    
foreach ($things as  $valueScale) {

    if (is_scalar($valueScale)) {

        echo "{$valueScale}\n";

    }
}






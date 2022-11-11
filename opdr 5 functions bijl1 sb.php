<?php

function check_vote()
{
    $name = "Tomi";
    $age = 35;
    if ($age >= 18) {
        echo $name . ", je bent oud genoeg om te stemmen.";
    }  else {
        echo $name . ", je bent niet oud genoeg om te stemmen.";
    }   

}
check_vote();

?>
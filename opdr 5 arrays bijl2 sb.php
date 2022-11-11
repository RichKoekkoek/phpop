<?php
//Write a PHP script that displays the highest temperature that day and which city this was in.

$weeklyTemps = [
    "Maandag" => [ 
    	"Groningen" => 25,
        	"Assen" => 12,
       	 "Emmen" => 19
    ],
     "Dinsdag" => [ 
    	"Groningen" => 26,
        "Assen" => 28,
        "Emmen" => 19
    ],
     "Woensdag" => [ 
    	"Groningen" => 16,
        "Assen" => 30,
        "Emmen" => 35
    ]
];

foreach($weeklyTemps as $x => $x_value) {
    echo "$x <br>";   
    echo max(0,1,2);
;
}

foreach($weeklyTemps as $max) {
    echo $max;
}

/*
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}  */


//De hoogste temperatuur op maandag was 25 graden in Groningen etc

?>
<?php 
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
            
            foreach($weeklyTemps as $key => $array_places){
                $max = 0 ; 
                $place_tmp ; 
                foreach($array_places as $kplace => $temp){
                    if($temp > $max){
                        $max = $temp ; 
                        $place_tmp = $kplace; 
                    }
                }

                echo "De hoogste temperatuur op $key was $max in $place_tmp <br> "; 
            }

    ?>
        
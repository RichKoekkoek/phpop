<?php
//Make a class of meowing cats verbal personal excercise Tomi.

class Cats {
    //properties
    public $race;
    public $coat;
    
    //methods
    function __construct($race, $coat) {
        $this->race = $race;
        $this->coat = $coat;
    }
    function get_race() {
        return $this->race;
    }
    function get_coat() {
        return $this->coat;
    }
}
//coat = lenght of fur.
$abbyssinion = new Cats("abyssinion", "medium");
echo $abbyssinion->get_race();
echo "<br>";
echo $abbyssinion->get_coat();
echo "<br>";
echo "Meowwww!!!!";
echo "<br>";
$britishShorthair = new Cats("britishShorthair", "short");
echo $britishShorthair->get_race();
echo "<br>";
echo $britishShorthair->get_coat();
echo "<br>";
echo "Meowww!!!!"

/*output:
abyssinion
medium
Meowwww!!!!
britishShorthair
short
Meowww!!!!
*/
?>

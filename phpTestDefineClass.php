<?php

//test  VSC <> Git ombouw voorbeeld w3schools

class arms {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$longbow= new arms();
$crossbow = new arms();
$longbow->set_name('longbow');
$crossbow->set_name('crossbow');

echo $longbow->get_name();
echo "<br>";
echo $crossbow->get_name();
?>
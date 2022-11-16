<?php

//Write a PHP calculator class which will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request.

class MyCalculator {
private $FirstNumber, $SecondNumber;
public function __construct( $Value1, $Value2 ) {
$this->FirstNumber = $Value1;
$this->SecondNumber = $Value2;
}
public function Addition() {
return $this->FirstNumber + $this->SecondNumber;
}
public function Subtraction() {
return $this->FirstNumber - $this->SecondNumber; 
}
public function Multiplication() {
return $this->FirstNumber * $this->SecondNumber;
}
public function Division() {
return $this->FirstNumber / $this->SecondNumber;
}
}
$mycalc = new MyCalculator(12, 6); 
echo $mycalc-> Addition()."\n"; // Displays 18 
echo $mycalc-> Multiplication()."\n"; // Displays 72
echo $mycalc-> Subtraction()."\n"; // Displays 6
echo $mycalc-> Division()."\n"; // Displays 2
?>


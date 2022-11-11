<?PHP
echo "Good morning" .'<br>' ;
?>
<br>
<br>

<?PHP
echo "Hi";
?>

<?php  
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>  
<br>
<br>
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>
<br>
<br>
<?php
// case-sensitive constant name
define("GREETING", "Hello Groningen!");
echo GREETING;
?> 

<br>
<br>
<?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[1];
?> 
<br>
<br>
<?php
$x = 200;  
$y = "200";

var_dump($x === $y); // returns false because types are not equal
?>  
<br>
<br>
<?php
$x = 40;  
echo++$x;
?>  
<br>
<br>
<?php
$txt1 = "hoi stad";
$txt2 = " aan de rivier";
echo $txt1 . $txt2;
?> 
<br>
<br>

<?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
}
?>

<?php
$t = date("H");
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";

if ($t < "10") {
  echo "Have a coffee!";
} elseif ($t < "20") {
  echo "Have a milk!";
} else {
  echo "Have a beer!!";
}
?>
<br>
<br>
<?php
$x = 1;

while($x <= 15) {
  echo "The number is: $x <br>";
  $x++;
}
?>
<br>
<br>

<?php
function writeMessage(){
  echo "Hi Gorilla!";
}
writeMessage();  //call the function
?>




</body>
</html>
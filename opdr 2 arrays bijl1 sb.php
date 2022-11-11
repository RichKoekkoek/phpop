<?php
$color = array('white', 'green', 'red');
foreach ($color as $c)

sort($color);
echo "<ul>";
foreach ($color as $y)
{
echo "<li>$y</li>";
}
echo "</ul>";
?>
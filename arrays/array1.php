<?php 
$planets = array("mercury", "venus", "earth", "mars", 10, 20);
echo "The value at 2 is " . $planets[2] . "<br>";

// Assigning or Replacing values
$planets[6] = "tara";

echo "<ol>";

foreach ($planets as $value) {
    echo " <li> Planet: " . $value . "<br> </li>";
}

echo"</ol>";
?>

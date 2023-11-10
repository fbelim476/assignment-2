<?php

$myArray = ['apple', 'banana', 'cherry', 'date', 'fig', 'grape'];

// Get a single random value from the array
$randomKey = array_rand($myArray);
$randomValue = $myArray[$randomKey];

echo "Random value: $randomValue\n";

// Get multiple random values from the array
$randomKeys = array_rand($myArray, 3); // Get 3 random keys
$randomValues = [];

foreach ($randomKeys as $key) {
    $randomValues[] = $myArray[$key];
}
 echo "<br>";
echo "Random values: " . implode(', ', $randomValues) . "\n";

?>
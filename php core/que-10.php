<?php

$originalArray = [1, 2, 2, 3, 4, 4, 5];

// Remove duplicates using array_unique
$uniqueArray = array_unique($originalArray);

// Convert the result back to a re-indexed array if needed
$uniqueArray = array_values($uniqueArray);

// Output the unique array
echo "<pre>";
print_r($uniqueArray);
echo "</pre>";


?>
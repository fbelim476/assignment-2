<?php

$jsonString = '{"name": "Alice", "age": 25, "city": "Los Angeles"}';

// Convert JSON string to an associative array
$decodedArray = json_decode($jsonString, true);

if ($decodedArray !== null) {
    // Now, $decodedArray is an associative array
    echo "Name: " . $decodedArray["name"] . "<br>";
    echo "Age: " . $decodedArray["age"] . "<br>";
    echo "City: " . $decodedArray["city"] ;
} else {
    echo "Invalid JSON string.";
}

?>
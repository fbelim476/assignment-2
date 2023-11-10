<?php

$jsonString = '{
    "name": "John",
    "age": 30,
    "city": "New York",
    "isStudent": false,
    "hobbies": ["Reading", "Gaming", "Swimming"]
}';

// Decode the JSON string into a PHP associative array
$dataArray = json_decode($jsonString, true);

if ($dataArray === null) {
    echo "Failed to decode JSON string.";
} else {
    // Print the decoded data
    echo "Name: " . $dataArray['name'] . "<br>";
    echo "Age: " . $dataArray['age'] . "<br>";
    echo "City: " . $dataArray['city'] . "<br>";
    echo "Is Student: " . ($dataArray['isStudent'] ? 'Yes' : 'No') . "<br>";

    echo "Hobbies: ";
    foreach ($dataArray['hobbies'] as $hobby) {
        echo $hobby . " ";
    }
}
?>


?>
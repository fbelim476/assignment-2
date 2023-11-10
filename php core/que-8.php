<?php

$number = 11; // Replace this with your number

$isEven = ($number & 1) === 0;

if ($isEven) {
    echo "$number is even.";
} else {
    echo "$number is odd.";
}



?>
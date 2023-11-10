<?php


function isArmstrong($number) {
    $num_str = (string)$number;
    $num_digits = strlen($num_str);
    $sum = 0;

    for ($i = 0; $i < $num_digits; $i++) {
        $digit = (int)$num_str[$i];
        $sum += $digit ** $num_digits;
    }

    return $sum == $number;
}

$number = (int)readline("Enter a number: ");

if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
?>

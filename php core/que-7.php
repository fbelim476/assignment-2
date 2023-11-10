<?php 

$a = '1';
$b = &$a;
$b = "2$b";
echo "$b";


$number = 3; // Replace with the number you want to check

$parity = array("Even", "Odd");
echo "$number is " . $parity[$number & 1] . ".";


?>

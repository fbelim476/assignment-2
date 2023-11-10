<?php
$numbers = [10, 20, 30, 40, 50];
$total = 0;

for ($i = 0; $i < count($numbers); $i++) {
    $total += $numbers[$i];
}

echo "The total is: $total";

?>
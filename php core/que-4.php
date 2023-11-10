<?php
$rows = 5; // Change this value to adjust the number of rows

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($i == 1 || $i == $rows || $j == 1 || $j == 5) {
            echo "* ";
        } else {
            echo "<br> ";
        }
    }
    echo "\n";
}
?>

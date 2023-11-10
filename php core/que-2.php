<?php
$startYear = 1901;
$endYear = 2016;

echo "Leap Year Between $startYear to $endYear <br>";
if (!is_numeric($startYear)) {
    echo "is not number please enter a number <br>";

}else{
        for ($year = $startYear; $year <= $endYear; $year++) {
        
        if ($year % 4 == 0) {
            if ($year % 100 != 0 || ($year % 100 == 0 && $year % 400 == 0)) {
                echo "$year is a leap year.<br>";
            }
        }
    }
}

?>

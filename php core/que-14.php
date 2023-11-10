<?php
$balances = array(
    array(1.2, 2.3, 3.4, 4.5, 5.6),
    array(6.7, 7.8, 8.9, 9.0, 10.1),
    array(11.2, 12.3, 13.4, 14.5, 15.6)
);

foreach ($balances as $value) {
    foreach ($value as $value1) {
        echo $value1 ;
    }
    echo "<br>";
}
?>
<?php
$first =$_GET['no1'];
$second =$_GET['no2'];
$third =$_GET['no3'];

if ($first > $second && $first > $third) {
	echo "Largest Of Between $first , $second and $third = ". $first;
}elseif ($second > $first && $second > $third) {
	echo "Largest Number of Between $first , $second and $third = $second";
}elseif ($third > $first && $third > $second) {
	echo "Largest Number of Between $first , $second and $third = $third";
}else{
	echo "all equal";
}
?>
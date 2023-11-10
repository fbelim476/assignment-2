<?php
/*
Pattern 1

*
**
***
****
*****

*/



// for($i=1;$i<=5;$i++){
// 	echo "* ";
// 	for ($a=0; $a <=4; $a++) { 
// 		echo "*";
// 	}
// 	echo "<br>";
// }




/* 

Pattern 2


Write a program for this Pattern:
	
	*****
	*
	*
	*
	*****

*/

$n=5;
for($i=1;$i<=$n;$i++){
	for($j=1;$j<=$n;$j++){
		if($i==1 || $i==$n){
			echo "*";
		}else{
			if($j==1){
				echo "*";
			}else{
				echo "&nbsp;&nbsp;";
			//remove spave between & and nbsp
			}
		}
	}
	echo '</br>';
}










// $originalArray = array(1, 2, 2, 3, 4, 4, 5, 6, 6);

// // Remove duplicate values
// $uniqueArray = array_unique($originalArray);

// // If you want to re-index the array, you can use array_values
// $uniqueArray = array_values($uniqueArray);

// // Print the result
// echo "<pre>";
// print_r($uniqueArray);
// echo "</pre>";





?>
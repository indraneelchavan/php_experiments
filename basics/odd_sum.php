<?php
	$count=1;
	$odd=1;
	$sum=0;
	while($odd<=10){ //without using the odd number counter, use double of the number of odd numbers 
		
		if($count%2 != 0){
			
			$sum =$sum + $count;
			$odd=$odd+1;
		}
		$count++;
		
		
	}
		echo 'Sum of first 10 odd number is '. $sum;
?>
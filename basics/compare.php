<?php
	$a=8;
	$b=9;
	$c=10;

	if($a>$b && $a>$c){
		echo 'a is the greatest number';
	}
	else if($b>$a && $b>$c){
		echo 'b is the greatest number';
	}
	else{
		echo 'c is the greatest number';
	}




	if($a>$b){
		if($a>$c){
			echo 'a is the greatest number';
		}
		else{
			echo 'c is the greatest number';
		}
		}
		else{
			if($b>$c){
				echo 'b is the greatest number';
			}
			else{
				echo 'c is the greatest number';
			}}
	
	

?>
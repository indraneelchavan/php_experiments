<?php
	$a=5;
	$b=6;
	$choice='mul';

	switch($choice){
		case 'add':
			$c=add($a,$b);
			echo "The ".$choice." is ".$c."<br/>";
			break;

		case 'sub':
			$c=sub($a,$b);
			echo "The ".$choice." is ".$c."<br/>";
			break;

		case 'mul':
			$c=mul($a,$b);
			echo "The ".$choice." is ".$c."<br/>";
			break;

		case 'div':
			$c=div($a,$b);
			echo "The ".$choice." is ".$c."<br/>";
			break;

		default:
			echo "Enter a valid option";
	}

	function add($a,$b){
		return $a+$b;
	}

	
	function sub($a,$b){
		return $a-$b;
	}

	
	function mul($a,$b){
		return $a*$b;
	}

	
	function div($a,$b){
		return $a/$b;
	}
?>
<?php
	$a=array(array(1,2,3,4),
					array(10,20,30,40),
					array('abc','xyz','pqr'));

	echo "<pre>";
	print_r($a);
	

	for($i=0;$i<count($a);$i++){
		for($j=0;$j<count($a[$i]);$j++){
			echo $a[$i][$j]."<br/>";
		}
	}
?>
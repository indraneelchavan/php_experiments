<?php
	echo "<pre>";

	$a = array(1,'abc',4.5,true,'x');

	print_r($a);
	$b='abcd';
	var_dump($b);
	echo "<hr/>";

	echo 'The value stored at index 4 is '.$a[4]."<br/>";
	echo 'The length of the array is '.sizeof($a)."<br/>";
        
	echo "<hr/>Displaying complete array with loop<hr/>";

	for($i=0;$i<count($a);$i++){
		echo "The values stored at index ".$i." is ". $a[$i]."<br/>";
	}
?>
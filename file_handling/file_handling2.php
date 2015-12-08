<?php
	$d= scandir('indra');
	echo "<pre>";

	print_r($d);

	var_dump(in_array('desert.jpg',$d));

	foreach($d as $f){
		if($f != '.' && $f != '..'){
			echo "<img src='indra/$f' height='100px' width='100px'/>&emsp;";
		}
	}
?>
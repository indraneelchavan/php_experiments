<?php
	$d= scandir('kapil');
	echo "<pre>";

	print_r($d);

	var_dump(in_array('desert.jpg',$d));

	foreach($d as $f){
		if($f != '.' && $f != '..'){
			echo "<img src='kapil/$f' height='100px' width='100px'/>&emsp;";
		}
	}
?>
<?php
	echo getcwd();
	if(!file_exists('kapil')){
		mkdir('kapil');
	}

	echo "<hr/>";

	$d= dir('kapil');

	while($f = $d->read()){
		echo $f."<br/>";
	}

	$d->rewind();
	while($f=$d->read()){
		if($f !='.' && $f !='..'){
			echo "<img src='kapil/$f' height='100px' width='100px' />&emsp;";
		}
	}

	$d->close();
?>
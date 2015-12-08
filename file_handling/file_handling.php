<?php
	echo getcwd();
	if(!file_exists('indra')){
		mkdir('indra');
	}

	echo "<hr/>";

	$d= dir('indra');

	while($f = $d->read()){
		echo $f."<br/>";
	}

	$d->rewind();
	while($f=$d->read()){
		if($f !='.' && $f !='..'){
			echo "<img src='indra/$f' height='100px' width='100px' />&emsp;";
		}
	}

	$d->close();
?>
<?php
	$b= simplexml_load_file("books.xml");

	echo "<pre>";

	print_r($b);

	echo "<hr/>Get single value<br/>";
	echo $b->book[1]->author;

	echo "<hr/>Get all values<br/>";
	foreach($b as $i){
		foreach($i as $j){
			echo $j->getName()." = ".$j."<br/>";
		}
	}

	echo "<hr/>Get Title Only<br/>";
	foreach($b as $i){
		echo $i->title."<br/>";
	}

?>
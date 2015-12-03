<?php
	$xml = simplexml_load_file("books.xml");

	$title = $_REQUEST['title'];
	$author = $_REQUEST['author'];
	$price = $_REQUEST['price'];
	
	$ch = $xml->addChild('book');

	$ch->addChild('title',$title);
	$ch->addChild('author',$author);
	$ch->addChild('price',$price);

	$xml->asXml('books.xml');

	foreach($xml as $i){
		foreach($i as $j){
			echo $j->getName()." = ".$j."<br/>";
		}
		echo "<br/>";
	}


	echo "<a href='form.html'>Back</a>";
?>



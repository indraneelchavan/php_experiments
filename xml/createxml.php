<?php
	$d = new DomDocument();
	$root = $d->createElement('employees');
	$node = $d->createElement('emp');

	$eid= $d->createElement('eid');
	$value=$d->createTextNode(1);
	$eid->appendChild($value);
	$node->appendChild($eid);

	$ename= $d->createElement('ename');
	$value=$d->createTextNode('Amir');
	$ename->appendChild($value);
	$node->appendChild($ename);

	$esal= $d->createElement('esal');
	$value=$d->createTextNode(50000);
	$esal->appendChild($value);
	$node->appendChild($esal);

	$root->appendChild($node);
	$d->appendChild($root);
	$d->save('emp.xml');

	$d= simplexml_load_file('emp.xml');

	foreach($d as $i){
		foreach($i as $j){
			echo $j->getName()." = ".$j."<br/>";
		}
		echo "<br/>";
	}
?>
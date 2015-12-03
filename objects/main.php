<?php
	$eid= $_REQUEST['id'];
	$ename= $_REQUEST['name'];
	$ebsal= $_REQUEST['bsal'];
	$edesig= $_REQUEST['desig'];

	if($edesig == 'Select'){
		echo "Please enter the designation<br/>";
		echo "<a href='index.html'>Back</a>";
	}
	else if($edesig == "Developer"){
		include('developer.php');
		$d = new developer($eid,$ename,$ebsal,$edesig);
		$d->calsal();
		$d->display();
	}
	else if($edes == "Manager"){
		include('manager.php');
		$m = new manager($eid,$ename,$ebsal,$edesig);
		$m->calsal();
		$m->display();
	}
?>
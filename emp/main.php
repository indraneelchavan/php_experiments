<?php
	$eid= $_REQUEST['id'];
	$ename= $_REQUEST['name'];
	$ebsal= $_REQUEST['bsal'];
	$edes= $_REQUEST['desig'];

	if($edes == 'Select'){
		echo "Please enter the designation<br/>";
		echo "<a href='index.html'>Back</a>";
	}
	else if($edes == "Developer"){
		include('developer.php');
		$d = new developer($eid,$ename,$ebsal,$edes);
		$d->calsal();
		$d->display();
	}
	else if($edes == "Manager"){
		include('manager.php');
		$d = new manager($eid,$ename,$ebsal,$edes);
		$d->calsal();
		$d->display();
	}
?>
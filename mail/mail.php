<?php
	$to = $_REQUEST['to'];
	$from = 'from:' . $_REQUEST['from'];
	$sub = $_REQUEST['sub'];
	$msg = $_REQUEST['msg'];

	if(mail($to,$sub,$msg,$from)){
		echo "mail sent...";
	}
	else{
		echo "mail not sent...";
	}
?>
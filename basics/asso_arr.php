<?php
	$a=array('sachin'=>55,'sehwag'=>78,'sharma'=>45,'raina'=>105,'yuvraj'=>15);

	echo "<pre>";
	print_r($a);
	echo 'The runs scored by Sehwag are '.$a['sehwag']."<br/><hr/>";

	foreach($a as $k=>$i){
		echo "The key is <b>".$k."</b> and the value is <b>".$i."</b><br/>";
	}

?>
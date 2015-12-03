<?php

	if (isset($_REQUEST['calculate'])){
		
		$name= $_REQUEST['name'];
		$sub1= $_REQUEST['sub1'];
		$sub2= $_REQUEST['sub2'];
		$sub3= $_REQUEST['sub3'];
		$total = $sub1+$sub2+$sub3;
		$perc=($total/300)*100;

		$myfile = fopen('scorecard.txt','w+') or exit("Unable to open file");

		fwrite($myfile,"Name: $name\n Subject1: $sub1\n Subject2: $sub2\n Subject3: $sub3\n Total: $total\n Percentage Score: $perc%\n");

		rewind($myfile);

		while(!feof($myfile)){

			echo fgets($myfile)."<br/>";
		}
		fclose($myfile);

	}


?>
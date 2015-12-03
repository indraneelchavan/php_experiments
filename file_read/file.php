<?php

	if(file_exists('f1.txt')){
		echo 'The file is found<br/>';
	}
	else{
		echo 'File not found<br/>';
	}

	copy('f1.txt','f2.txt');
	rename('f2.txt','f3.txt');
	unlink('f3.txt');


	$fp = @fopen('f1.txt','r') or exit('Unable to open the file');
	echo 'The file is open for reading<br/>';

	while(!feof($fp)){
		echo fgetc($fp)."<br/>";
	}

	rewind($fp);

	while(!feof($fp)){
		echo fgets($fp)."<br/>";
	}

	fseek($fp,3);
	echo fread($fp,3);

	rewind($fp);
	echo "<hr/>";

	$str=file_get_contents('f1.txt');
	echo $str;

	echo "<br/>";

	$size=filesize('f1.txt');
	echo "The file size is $size";
?>
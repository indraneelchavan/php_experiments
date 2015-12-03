<?php

$folder_name=$_REQUEST['alb_name'];

if(!file_exists($folder_name)) // if dir not already exists
{
	mkdir($folder_name);       // create directory
}

foreach($_FILES as $i)
	{
		$name=$i['name'];
		$nm=explode(".",$name);// var for ext of file uploaded
		$type=$i['type'];
		$size=($i['size']/1024);
		
		if(($type=='image/jpeg'||$type=='image/png'||$type=='image/gif') && ($size <=80))
		// only imgs of type jpeg,png & gif and size<=80 are uploaded
			{
				$src=$i['tmp_name'];
				$dest= "$folder_name/$name";
				if(!file_exists($dest))
				{  //if filename does not exists in folder then move it
					move_uploaded_file($src,$dest);
				}
				else
				{	// if the file name already exist in folder then 
					// using "rand()" function rename it and move it
					$dest= $folder_name."/".$nm[0].rand(1,10).".".$nm[1];
					move_uploaded_file($src,$dest);
				}
			}
			else
			{
			echo "inavlid file cause <b>type is $type and  size is $size</b><br/>";
			}
	}


$d= scandir($folder_name);

foreach($d as $f)
	{
		if($f !='.'&& $f !='..')
		echo "<img src='$folder_name/$f' height='100px'width='100px'/>&emsp;";
	}

?>
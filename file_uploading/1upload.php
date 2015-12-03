<?php
echo"<pre>";
print_r($_FILES); // "$_FILES" is multi-dim. assoc. array
echo"<hr>";
/* foreach($_FILES as $i)
	{
		foreach($i as $j=>$k)
		{
			echo $j."::".$k."<br/>";
		}
	}
*/

foreach($_FILES as $i)
	{
		echo "Name of file is <b>".$i['name']."</b><br/>";
		echo "Type of file is <b>".$i['type']."</b><br/>";
		echo "Size of file is <b>".$i['size']."</b><br/>";
		echo "Temp. path of file is <b>".$i['tmp_name']."</b><br/>";
		echo "Error of file is <b>".$i['error']."</b><br/>";
	}

	$name=$_FILES['f1']['name'];
	$src=$_FILES['f1']['tmp_name'];
	$dest='uploads/'.$name;// same as uploaded file name
							// or $dest="uploads/1.jpg";

	move_uploaded_file($src,$dest); // moving file frm tmp dir to define folder
										// ie "upload" folder	
?>
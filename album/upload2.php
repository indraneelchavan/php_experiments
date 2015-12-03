<?php
	
	foreach($_FILES as $i){
		$name=$i['name'];
		$nm= explode(".".$name);
		$type=$i['type'];
		$size=($i['size']/1024);

		if(($type == 'image/jpeg' || $type=='image/pjpeg' || $type=='image/png' || $type=='image/gif')&&
			($size<=80)){
			$src=$i['tmp_name'];
			$dest="$folder_name/$name";

			if(!file_exists($dest)){
				move_uploaded_file($src,$dest);
			}
			else{
				$dest=$folder_name."/".$nm[0].rand(1,10)."."$nm[1];
				move_uploaded_file($src,$dest);
			}
			
		}
		else{
			echo "invalid file because the type is $type and the size is $size<br/>";
		}
	}

?>
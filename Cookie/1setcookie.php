<?php

setcookie('f1','test'); 

if(isset($_COOKIE['f1']))         
{
	echo "hello ".$_COOKIE['f1']; 
}
else                             
{
echo "hello friend";			
}
?>
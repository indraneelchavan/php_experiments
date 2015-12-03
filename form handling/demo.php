<?php
	if(isset($_REQUEST['submit']))
	{
		

		echo '<pre>';
	

		/*foreach($_REQUEST as $i)
		{
			echo $i."<br/>";
		}*/

		$p = '/(^[A-Z]{1,1})+([a-z]{1,10})$/';
		$p1 = '/(^[987]{1,1})+([0-9]{9,9})$/';
		$p2 = '/(^[1-9]{1,1})+([0-9]{0,1})$/';
		$fn=$_REQUEST['fn'];
		$ln=$_REQUEST['ln'];
		$mob=$_REQUEST['mob'];
		$age=$_REQUEST['age'];

		if(empty($fn)){
			echo "Please enter the first name<br/>";
		}
		else if(!preg_match($p,$fn)){
			echo "Please enter a valid first name<br>";
			
		}
		
		else if(empty($ln)){
			echo "Please enter the last name<br/>";
		}
		else if(!preg_match($p,$ln)){
			echo "Please enter a valid last name<br>";
			
		}
		
		else if(empty($mob)){
			echo "Please enter the mobile number<br/>";
		}
		else if(!preg_match($p1,$mob)){
			echo "Please enter a valid mobile number<br>";
			
		}
		
		else if(empty($age)){
			echo "Please enter the age<br/>";
		}
		else if(!preg_match($p2,$age)){
			echo "Please enter a valid age<br>";
			
		}
		else if(!isset($_REQUEST['gender'])){
			echo "Please select your gender";
		}
		
		else if(!isset($_REQUEST['hobby'])){
			echo "Please select a hobby";
		}
		else{

			echo "The first name is ".$_REQUEST['fn']."<br/>";
			echo "The last name is ".$_REQUEST['ln']."<br/>";
			echo "The mobile number is ".$_REQUEST['mob']."<br/>";
			echo "The age is ".$_REQUEST['age']."<br/>";
			echo "The gender is ".$_REQUEST['gender']."<br/>";
			echo "The hobby/s is/are ".implode(",",$_REQUEST['hobby'])."<br/>";
	}}
	else{
		echo 'please submit the form';
	}
	
?>
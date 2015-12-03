<?php
	if (isset($_REQUEST['submit'])){
		echo "Form submitted successfully";
		echo "<hr/>";


		$exp1 ="/(^[A-Z]{1,1})+([a-z]{1,10})+([ ]{1,1})+([A-Z]{1,1})+([a-z]{1,10})$/"; 
		$exp2 ="/(^[a-z]{1,1})+([a-z0-9]{0,20})+([._]{0,1})([a-z0-9]{1,10})+([@]{1,1})([a-z0-9]{2,10})+([.]{1,1})([a-z]{1,2})+([.]{0,1})([a-z]{1,3})$/"; 
		$exp3 ="/(^[a-z0-9@#$%^&]{3,15})$/"; 

		$nm= $_REQUEST['name']; 
		$pw= $_REQUEST['password'];
		$em= $_REQUEST['email'];


		if(empty($nm)){
			echo "Please enter your first and last names <br/>";
			}
		else if(!preg_match($exp1,$nm)){
			echo "Please enter a valid name <br/>";
			}
		else if(empty($em)){
			echo "Please enter your email address <br/>";
		}
		else if (!preg_match($exp2,$em)){
			echo "Please enter a valid email id <br/>";
		}
		else if(empty($pw)){
			echo "Please enter the password <br/>";
		}
		else if (!preg_match($exp3,$pw)){
			echo "Please enter a valid password <br/>";
		}
		else if(!isset($_REQUEST['gender'])){
			echo "plz select gender <br/>";
		}
		else if (!isset($_REQUEST['hobby'])){
			echo "plz select hobby <br/>";
		}
		else if($_REQUEST['city'] == "Select"){
			echo "Please select your city<br/>";
		}

		else{

			echo "The Name is ".$_REQUEST['name']."<br/>";
			echo "The Email Address is ".$_REQUEST['email']."<br/>";
			echo "The Gender is ".$_REQUEST['gender']."<br/>";
			echo "The Hobbies are ".implode(",",$_REQUEST['hobby'])."<br/>";
			echo "The City is ".$_REQUEST['city']."<br/>";
		}
		}
	else{
	 		echo "Form not submitted. Access Denied";
	}


?>
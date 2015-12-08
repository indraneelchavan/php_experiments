<?php
if(isset($_REQUEST['submit'])) 
{
	$user = $_REQUEST['username'];
	$pwd = $_REQUEST['pwd'];

	if($user=='indra' && $pwd=='indra')
	{
		if (isset($_REQUEST['rem'])) 							 
		{		
			setcookie('user',$user,time()+60*60*24);
			setcookie('pwd',$pwd,time()+60*60*24);
		}		
		session_start();
		$_SESSION['user']=$user;
		echo "HELLO ".$_SESSION['user']."<br/>";
		echo "<a href='home1.php'>HOME</a>";
	}
	else
	{
		header('location:login.php?err=2');
	}
}
else
{
	header('location:login.php?err=1');
}
?>
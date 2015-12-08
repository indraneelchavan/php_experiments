<?php
session_start();
if(isset($_SESSION['user']))
{
	echo "HELLO ".$_SESSION['user']."<br/>";
	echo "<a href='logout.php'>LOGOUT</a>";
}
else
{
	header('location:login.php?err=1');
}
?>
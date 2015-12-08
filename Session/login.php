<html>
<body>
<form method="post" action="logincheck.php">

<label>Username:</label>
<input type="text" name="username" <?php if (isset($_COOKIE['user'])){?>
 value="<?php echo $_COOKIE['user']; ?>"<?php } ?>> <br/><br/> 

<label>Password:</label>
<input type="password" name="pwd" <?php if (isset($_COOKIE['pwd'])){?>
 value="<?php echo $_COOKIE['pwd']; ?>"<?php } ?>> <br/><br/> 

<label>Remember Me:</label>
<input type="checkbox" name="rem" value="123"> <br/><br/> 

<label>Login:</label>
<input type="submit" name="submit" value="LOGIN"> <br/><br/> 

<?php
	if (isset($_REQUEST['err']))
	{
		if($_REQUEST['err']==1)
		{
			echo "<i> YOU ARE NOT LOGGED IN </i>";
		}
		else if($_REQUEST['err']==2)
		{
			echo "<i> INVALID USERNAME OR PASSWORD </i>";
		}
		else if($_REQUEST['err']==1)
		{
			echo "<i> YOU ARE LOGGED OUT </i>";
		}
	}
?>
</form>
</body>
</html>
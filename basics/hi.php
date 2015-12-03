<html>
<body>
<h1>First PHP program</h1>

<?php
echo 'hello demo programme<br/>';
print('Hello with print');
?>

<p>Outside paragraph in HTML</p>
<div>
	This is <?php
		echo "hi in PHP<br/>";
	?>
	This is outside again
<?php
	$a= 5;

	echo '<br/>The value of a is $a<br/>';
	echo "The value of a is $a<br/>";

	define('abc','Seed Infotech');
	echo 'abc<br/>';
	echo "abc<br/>";
	?>
</div>
</body>
</html>
<html>
	<head>
		<title>Exception Handling</title>
	</head>
	
	<body>
		<form method="get">
			Number1:<input type="text" name="num1" required><br/><br/>
			Number2:<input type="text" name="num2" required><br/><br/>
			<input type="submit" name="sub" value="submit">
		</form>
	
	</body>
</html>
<?php
	if(isset($_REQUEST['sub'])){
		try{
			$num1 = $_REQUEST['num1'];
			$num2 = $_REQUEST['num2'];
			if($num2==0){
				throw new ce('Num2 should not be zero');
			}		
			else{
				$div=$num1/$num2;
				echo "The division of two numbers is $div<br/>";
			}
		}

		catch(ce $e){
			echo $e->dis();
		}
	}

	class ce extends Exception{
		function __construct($a){
			parent::__construct($a);
		}

		function dis(){
			echo "The error: <b>".$this->getMessage()."</b><br/>";
			echo "In file: <b>".$this->getFile()."</b><br/>";
			echo "On Line: <b>".$this->getLine()."</b><br/>";
		}
	}
?>
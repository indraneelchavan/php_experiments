<?php

	if (isset($_REQUEST['calculate'])){
		class calc
			{
			public $name;
			public $sub1;
			public $sub2;
			public $sub3;

			public function calc($a,$b,$c,$d)
				{						 
					$this->name=$a;		
					$this->sub1=$b;    
					$this->sub2=$c;	
					$this->sub3=$d;
				}


			public function getValue()
				{
					echo $this->name."'s score:<br/><br/>";
					echo "Subject 1 score: ".$this->sub1."<br/>";
					echo "Subject 2 score: ".$this->sub2."<br/>";
					echo "Subject 3 score: ".$this->sub3."<br/><br/>";
					$sum = $this->sub1 + $this->sub2 + $this->sub3;
					echo "The total is ".$sum."<br/>";
					$perc =($sum/300)*100;
					echo "The percentage score is ".$perc."%<br/>";
					echo "<br/>";
				}
			}

		$obj= new calc($_REQUEST['name'],$_REQUEST['sub1'],$_REQUEST['sub2'],$_REQUEST['sub3']);
		$obj->getValue(); 

	}
	else{
		echo "Form not submitted. Access Denied";
	}


?>
<?php
	include('per_interface.php');

	class student implements per{
		private $sub1;
		private $sub2;
		private $sub3;

		function __construct($a,$b,$c){
			$this->sub1 = $a;
			$this->sub2 = $b;
			$this->sub3 = $c;
		}

		function total(){
			$total = ($this->sub1 + $this->sub2 +$this->sub3);
			return $total;
		}

		function per(){
			$per = $this->total()/3;
			return $per;
		}

		function display(){
			echo "The percentage score is ".$this->per();
		}

	
	}

		$stud1 = new student(12,12,12);
		$stud1->display();
?>
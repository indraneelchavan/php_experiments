<?php
	abstract class employee{
		protected $eid;
		protected $ename;
		protected $ebsal;
		protected $etsal;
		protected $edesig;

		function __construct($a,$b,$c,$d){
			$this->eid = $a;
			$this->ename = $b;
			$this->ebsal = $c;
			$this->edesig = $d;
		}

		function display(){
			echo "The employee ".$this->edesig."<br/><br/>";
			echo "The employee id is ".$this->eid."<br/>";
			echo "The employee name is ".$this->ename."<br/>";
			echo "The employee basic sal is ".$this->ebsal."<br/>";
			echo "The employee total sal is ".$this->etsal."<br/>";
		}

		abstract function calsal();
	}
?>
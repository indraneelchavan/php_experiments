<?php
	include('employee.php');
	class developer extends employee{
		private $no_of_hours = 60;
		private $incentive_per_hour = 150;

		function __construct($a,$b,$c,$d){
			parent::__construct($a,$b,$c,$d);
		}

		public function calsal(){
			$this->etsal = ($this->ebsal + ($this->no_of_hours * $this->incentive_per_hour));
		}
	}
?>
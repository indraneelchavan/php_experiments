<?php
	include('employee.php');
	class manager extends employee{
		private $no_of_projects = 60;
		private $incentive_per_project = 150;

		function __construct($a,$b,$c,$d){
			parent::__construct($a,$b,$c,$d);
		}

		public function calsal(){
			$this->etsal = ($this->ebsal + ($this->no_of_hours * $this->incentive_per_hour));
		}
	}
?>
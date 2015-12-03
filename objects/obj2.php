<?php
class book{
		private $id;
		private $name;
	
	 private $author;

		public function book($a,$b,$c){
			$this->id = $a;
			$this->name = $b;
			$this->author = $c;
		}

		public function getValue(){
			echo $this->id."<br/>";
			echo $this->name."<br/>";
			echo $this->author."<br/>";


	}}

	$obj=new book(1,'abc','xyz');
	$obj->getValue();

	
?>

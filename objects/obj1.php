<?php
	class book{
		public $id;
		public $name;
		public $author;

		public function setValue($a,$b,$c){
			$this->id = $a;
			$this->name = $b;
			$this->author = $c;
		}

		public function getValue(){
			echo $this->id."<br/>";
			echo $this->name."<br/>";
			echo $this->author."<br/>";
		}
	}

	$obj=new book();
	$obj->setValue(1,'harry potter','J.K. Rowling');
	$obj->getValue();

	
	$obj1=new book();
	$obj1->setValue(2,'wings of fire','A.P.J Abdul Kalam');
	$obj1->getValue();
?>
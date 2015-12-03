<?php
	$a= array('emp1'=>array('id'=>1,'name'=>'Indraneel','designation'=>'developer'),
					'emp2'=>array('id'=>2,'name'=>'Kapil','designation'=>'developer'),
					'emp3'=>array('id'=>3,'name'=>'Sneha','designation'=>'developer')
					);
	
	foreach($a as $i=>$j){
		echo $i." info:<br/>";
		foreach($j as $k=>$l)
		{
			echo "The ".$k." is ".$l."<br/>";
		}
			
		echo "<hr/>";
		
	}
?>
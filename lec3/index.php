<?php 
	


	function xValue($a,$b,$x){
		$min = min($a,$b);
		$max = max($a,$b);
		if($min < $x && $max > $x){
			return true;
		}
		return false;
	}
	// var_dump(xValue(1,3,2));



	// swapping values
	// list($a,$b) = array($b,$a); 

<?php
$arr=[1,2,3,4,5,6,7,80,9,10];

$min =null;
$max = null;
foreach($arr as $item){
	if($min == null || $item < $min){
		$min = $item;
	}
	if($max == null || $item > $max){
		$max = $item;
	}
}
echo $min.'<br>'.$max;
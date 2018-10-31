<?php


function sum($x,$y){
	$a = $x * $y;

	if($a == 10){
		return $x + $y;
	}else{
		return $x - $y;
	}
}

// echo sum(5,3);


function counted($spend){
	if($spend>100){
		return $spend - $spend * 1/10;
	}else{
		return $spend;
	}
}

// echo counted(120);



function fun($a,$n,$d = 3){
	$arr = [];
	for($i = 0;$i < $n; $i++){
		array_push($arr,$a + $i * $d);
	}
	return $arr;
}
// print_r(fun(1,4));


function isPrime($n,$primeNumbers){
	foreach($primeNumbers as $primeNumber){
		if(($n % $primeNumber) === 0){
			return false;
		}
		return true;
	}
}
function findPrimeNumbers($n){
	$primeNumbers = [2];
	$i = 3;
	while(true){
		if(isPrime($i,$primeNumbers)){
			array_push($primeNumbers,$i);
			if($n === count($primeNumbers)){
				break;
			}
		}
		$i++;
	}
	return $primeNumbers;
}

$primeNumbers = findPrimeNumbers(100);
// print_r($primeNumbers); 



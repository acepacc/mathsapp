<?php 


$GLOBALS['space'] = $space = "</br>";

//$numSet=[$num1, $num2, $num3, $num4, $num5];

function genNumbers(){



$num1 = mt_rand(1,500);
$num2 = mt_rand(1,500);
$num3 = mt_rand(1,500);
$num4 = mt_rand(1,500);
$num5 = mt_rand(1,500);

	$numSet=[$num1, $num2, $num3, $num4, $num5];
	$GLOBALS['unique'] = $unique = array_unique($numSet);

	//print_r($unique);
	return $unique;
	unset($numSet);
}


genNumbers();

//print_r($unique);

function displayNumbers($unique, $space){



	//print_r($unique);


$slice = array_slice($unique, 3);

$numSorted = arsort($slice);


$count = count($slice);

if ($count< 2){

	genNumbers();
	displayNumbers($unique, $space);

}else{


//print_r($slice);

	foreach ($slice as $key => $value) {
		# code...
		echo $value;
		echo $space;
		reset($slice);
	}




echo "</br>";
echo $count;

echo $space;
echo "****************************";
echo $space;
echo "****************************";
echo $space;
echo $space;

}



}

displayNumbers($unique, $space);




//running mutiple sums
for($i=0; $i<50; $i++){

	//echo "hello";
	$sumNumber += 1;
	echo "Question: " . $sumNumber;
	echo $space;
	//echo "Hello";
	displayNumbers($unique, $space);
	echo $space;
}
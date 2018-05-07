<?php

error_reporting(0);

$numbers = [];

$num1= rand(1,4);
$num2= rand(1,4);
$num3= rand(1,4);
$num4= rand(1,4);



$numbers=["$num1"];

function newSet(){

$new = array_push($numbers, $num2, $num3, $num4);

}

echo $numbers[0];
echo "</br>";
echo $numbers[1];
echo "</br>";
echo $numbers[2];
echo "</br>";
echo $numbers[3];
echo "</br>";


if($numbers[0] == $numbers[1] or $numbers[0] == $numbers[2] or $number[0] == $number[3] or $numbers[1] == $numbers[2] or $numbers[1] == $numbers[3] or $numbers[2] == $numbers[3]){

		echo "Duplicate vales";
		newSet();

	}else{
		echo "no Duplicate";
	}






//print_r($numbers);
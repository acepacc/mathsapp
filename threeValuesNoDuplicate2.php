<?php


$num1= rand(1,3);
$num2= rand(1,3);
$num3= rand(1,3);






echo $num1;

function noEqual($num1, $num2, $num3){


	if($num1 !== $num2 && $num2 !== $num3 && $num3 !== $num1)

	{
		//displayValue($num1, $num2);
		echo $num1;
		echo "</br>";
		echo $num2;
		echo "</br>";
		echo $num3;
		reset($num1);
	}

	else 

	{
		# code...
		//noEqual($num1,$num2, $num3);
		
		$num1;
		echo $num1;
	}



}



noEqual($num1, $num2, $num3);
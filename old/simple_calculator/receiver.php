<?php
	$num1=$_GET['num1'];
	$num2=$_GET['num2'];

	function sum($num1,$num2)
	{
		$result=$num1+$num2;
		return $result;
	}

	echo sum($num1,$num2);
	
?>
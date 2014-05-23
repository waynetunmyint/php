<?php

	$method=$_GET['method'];
	$num1=$_GET['num1'];
	$num2=$_GET['num2'];

	if($method=='add')
	{
		echo $num1+$num2;
	}
	else if($method=="minus")
	{
		echo $num1-$num2;
	}
	else if($method=="multiply")
	{
		echo $result=$num1*$num2;
	}

	else
	{
		echo $num1/$num2;
	}
?>
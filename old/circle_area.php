<?php

	function area_of_circle($r)
	{
		$result=3.14 *($r *$r);
		return $result;
	}

	echo 'Area of Circle is : '.area_of_circle(3);
<?php
	$fruits=array('apple','mango','orange');


	$students=array('mg mg','ma ma','ko ko');
	rsort($students);

	foreach($students as $s)
	{
		echo $s.'<br>';
	}

?>
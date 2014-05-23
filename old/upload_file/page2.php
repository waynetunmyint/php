
<?php
	echo "hello!";
		$name=$_FILES["cover"]["name"];
		$tmp=$_FILES["cover"]["tmp_name"];
		move_uploaded_file($tmp,$name);

?>


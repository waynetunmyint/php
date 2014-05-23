<?php
	//directory_delete.php?id=3 
	$directory_id=$_GET['id'];
	$connection=mysqli_connect('localhost','root','','database_demo');
	mysqli_query($connection,"DELETE FROM directories WHERE id='$directory_id';");
?>

<script>
	window.location='directory_list.php';
</script>
<link rel="stylesheet" href="./../bootstrap.css">
<form action="directory_add.php" method="post">

	<label>Directory Name</label>
	<input type="text" name="directory_name"><br>
	<label>Directory Phone</label>
	<input type="tel" name="directory_phone"><br>
	<label>Directory Address</label>
	<textarea name="directory_address"></textarea><br>
	<input type="submit" value="Insert Directory" class="btn btn-success">
</form>

<style>
	input
	{
		min-height:30px;
		border-radius: 10px;
		margin-bottom:10px;
	}
</style>

<?php
	if($_POST)
	{
		echo $directory_name=$_POST['directory_name'];
		echo $directory_phone=$_POST['directory_phone'];
		echo $directory_address=$_POST['directory_address'];

		$connection=mysqli_connect('localhost','root','','database_demo');
		mysqli_query($connection,"INSERT INTO 
									directories(name,address,phone_number)
								VALUES 
								('$directory_name','$directory_address','$directory_phone')");
		echo "<script> 
				window.location='directory_list.php'
			</script>";

	}

?>

<?php
	//directory_view.php?id=3

	$directory_id=$_GET['id'];

	$connection=mysqli_connect('localhost','root','','database_demo');
	$sql_statement="SELECT * FROM directories WHERE id='$directory_id';";
	$result=mysqli_query($connection,$sql_statement);

	while($row=mysqli_fetch_array($result))
	{
		?>
		<label>ID : </label><?php echo $row['id']; ?><br>
		<label>Name : </label><?php echo $row['name']; ?><br>
		<label>Address :</label><?php echo $row['address']; ?><br>
		<label>Phone Number :</label><?php echo $row['phone_number']; ?><br>
		<?php
	}
?>
<a href="directory_list.php" class="btn btn-primary">Get back to List</a>
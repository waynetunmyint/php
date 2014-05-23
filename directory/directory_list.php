<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="./../bootstrap.css">
<!--php/bootstrap.css -->

<hr>
	<a href="directory_add.php" class="btn btn-primary">Create New Directory Contact</a>
<hr>

<nav class="nav nav-inverse">
</nav>
<table class="table table-striped">
	<tr>
		<th> Id</th>
		<th> Name </th>
		<th> Address </th>
		<th> Telephone </th>
		<th></th>
		<th></th>
	</tr>
<?php

	$connection=mysqli_connect('localhost','root','','database_demo');
	$sql_statment='SELECT * FROM directories ORDER BY id DESC;';
	$result=mysqli_query($connection,$sql_statment);
	

	while($row=mysqli_fetch_array($result))
	{
		echo '<tr>';
			echo '<td>'.$row['id'].'</td>';
			echo '<td>'.$row['name'].'</td>';
			echo '<td>'.$row['address'].'</td>';
			echo '<td>'.$row['phone_number'].'</td>';
			?>
				<!-- <a href="directroy_delete.php?id=3">Delete</a> -->
				<td>
					<a href="directory_delete.php?id=<?php echo $row['id'];?>">
						 Delete
					</a>
				</td>
				<td>
					<a href="directory_view.php?id=<?php echo $row['id'];?>">
						 View
					</a>
				</td>
				
			<?php
		echo '</tr>';
	}




?>
</table>

<style>
	td
	{
		text-align: left;
		border:1px solid greens;
	}
</style>
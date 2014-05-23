<html>
	<head>
		<title>Sender </title>
		<link rel="stylesheet" href="bootstrap.css">
	</head>
	<body>
		<form action="sender.php" method="GET" role="form">
			<div class="form-group">
				<label for="user_name">User Name</label>
				<input type="text" id="user_name" name="user_name" class="form-control" placeholder="enter your username"><br>
			</div>

			<div class="form-group">
				<label>Email</label>
				<input type="email" name="user_email" class="form-control" placeholder="enter your email address"><br>
				<input type="submit" class="btn btn-success">
				<input type="submit" class="btn btn-danger" value="delete">
			</div>
		</form>
	</body>
</html>

<?php
	if($_GET)
	{
		echo $_GET['user_name'].'<br>';
		echo $_GET['user_email'].'<br>';
		//echo "<script>window.location='sender.php';</script>";

	}
	

?>

<script>
	//window.location="sender.php";
</script>

<style>
	body
	{
		padding:10px;
	}
</style>


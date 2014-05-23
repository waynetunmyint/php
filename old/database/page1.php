<html>
	<head>
		<title>Page1</title>
				<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
	</head>
	<body>
		<form action="page2.php" method="get">
			<label> Name </label>
			<input type="text" name="name" class="form-control"><br>
			<label> Father Name </label>
			<input type="text" name="father_name" class="form-control"><br>
			<label> Email </label>
			<input type="text" name="email" class="form-control"><br>
			<label> Address </label>
			<textarea name="address" class="form-control"></textarea>
			<input type="submit" value="add new student" class="btn btn-primary">
		</form>
	</body>
</html>
<style>
	body
	{
		width:400px;
	}
</style>
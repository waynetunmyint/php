
<html>
	<head>
		<title> Data Sending Example</title>
	</head>
	<body>
<!-- 		<form action="receiver.php" method="get">
			<label>Person Name</label>
			<input type="text" name="person_name"><br>
			<label>Father Name</label>
			<input type="text" name="father_name" placeholder="father name"><br>
			<input type="submit" value="send">
		</form> -->
		<form action="receiver.php" method="GET">
			<label>Student Name </label>
			<input type="text" name="student_name"><br>
			<label>Father Name </label>
			<input type="text" name="father_name"><br>
			<input type="submit" value="send student info">
		</form>
	</body>
</html>


<style>
	input
	{
		margin-bottom: 10px;
		border-radius: 5px;
		height:30px;
	}
</style>
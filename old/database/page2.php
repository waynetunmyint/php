<html>
	<head>
		<title>Page 2</title>
		<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
	</head>
	<body>
		<?php
			// echo $name=$_GET['name'];
			// echo $father_name=$_GET['father_name'];
			// echo $email=$_GET['email'];
			// echo $address=$_GET['address'];

			// /* Connection with MySQL */
			// //mysql_connect('location','db_username','db_password');
			// //mysqli_connect('location','db_username','db_password','database_name');
			 $connection=mysqli_connect('localhost','root','','demo_test_database');

			// $sql_statement="INSERT INTO students
			// 				(name,father_name,email,address)
			// 				VALUES
			// 			( ,'$father_name','$email','$address');";

			// mysqli_query($connection,$sql_statement);

		?>
		<hr>
		<?php
			$sql_statement="SELECT * FROM students;";

			$result=mysqli_query($connection,$sql_statement);
			//var_dump($result);
			while($row=mysqli_fetch_array($result))
			{
				echo $row['name'].'<br>';
			}
		?>
		<a href="page1.php" class="btn btn-primary"> Go back to Page1 </a>
	</body>
</html>
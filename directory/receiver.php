<?php

	echo $company_name=$_GET['company_name'];
	echo '<br>';
	echo $company_address=$_GET['company_address'];
	echo '<br>';
	echo $company_tel=$_GET['company_tel'];

	//mysqli_connect('sql_server_location','sql_username','sql_password','database_name');
	$connection=mysqli_connect('localhost','root','','database_demo');
	mysqli_query($connection,"INSERT INTO directories
					(company_name,address,phone)
				VALUES
					('$company_name','$company_address','$company_tel');");



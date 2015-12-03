<?php
	$response = array();

	if(empty($_POST["name"]) && empty($_POST["phone"]) && empty($_POST["address"]) && empty($_POST["details"]))
		$response['status'] = 'empty';
	else
	{
		$server = "localhost";
		$username = "chennai";
		$password = "chennai";
		$database = "chennai";

		$connection = mysqli_connect($server, $username, $password, $database);
		if (mysqli_connect_errno())
			$response['status'] = 'error';
		else
		{
			$name = mysqli_real_escape_string($connection, $_POST['name']);
			$phone = mysqli_real_escape_string($connection, $_POST['phone']);
			$address = mysqli_real_escape_string($connection, $_POST['address']);
			$details = mysqli_real_escape_string($connection, $_POST['details']);

			$sql = "INSERT INTO help (name, phone, address, details) VALUES ('$name', '$phone', '$address', '$details')";
			if (mysqli_query($connection,$sql))
				$response['status'] = 'success';
			else
				$response['status'] = 'error';
		}	
		mysqli_close($connection);
	}

	echo json_encode($response);
	
?>
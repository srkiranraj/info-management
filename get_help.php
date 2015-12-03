<?php
	$server = "localhost";
	$username = "chennai";
	$password = "chennai";
	$database = "chennai";

	$response = array();

	$connection = mysqli_connect($server, $username, $password, $database);
	if (mysqli_connect_errno())
		$response['status'] = 'error';
	else
	{
		$response['status'] = 'success';
		$sql = "SELECT * FROM help ORDER BY timestamp DESC";
		$result = mysqli_query($connection, $sql);
		$rows = array();
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
			$row["address"] = nl2br($row["address"]);
			$row["details"] = nl2br($row["details"]);
			$rows[] = $row;
		}
		$response['help'] = $rows;

		$sql = "SELECT * FROM helper ORDER BY timestamp DESC";
		$result = mysqli_query($connection, $sql);
		$rows = array();
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
			$row["details"] = nl2br($row["details"]);
			$rows[] = $row;
		}
		$response['helper'] = $rows;
	}
	mysqli_close($connection);

	echo json_encode($response);
	
?>
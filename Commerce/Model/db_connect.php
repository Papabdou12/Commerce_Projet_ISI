<?php
	function getConnection()
	{
		$host = "localhost";
		$user = "root";
		$password = "";
		$db_name = "commerce";
		$connect = mysqli_connect($host, $user, $password, $db_name);
		return $connect;
	}
	function closeConnection($connect)
	{
		mysqli_close($connect);
	}
?>
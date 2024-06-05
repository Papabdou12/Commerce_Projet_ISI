<?php
	require_once 'db_connect.php';
	function insertcreditf($idEnt,$montantcreditf)
	{
		$sql = "INSERT INTO creditf VALUES('$idEnt','$montantcreditf' )";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}
	function listcreditf()
	{
		$sql = "SELECT idEnt, SUM(montantcreditf) FROM creditf GROUP BY idEnt";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}
	function insertcreditcli($idPart,$montantcreditcli)
	{
		$sql = "INSERT INTO creditcli VALUES('$idPart','$montantcreditcli' )";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}
	function listcreditcli()
	{
		$sql = "SELECT idPart, SUM(montantcreditcli) FROM creditcli GROUP BY idPart ";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}
	?>
<?php
	require_once 'db_connect.php';
	function insertclient($prenom,$nom,$adrPart,$telPart)
	{
		$sql = "INSERT INTO particulier VALUES('','$prenom','$nom','$adrPart','$telPart')";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}
	function listclient()
	{
		$sql = "SELECT * FROM particulier";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}

	function deleteclient($idPart)
	{
		$sql = "DELETE FROM particulier WHERE idPart=$idPart";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}

	function updateclient($idPart,$prenom,$nom,$adrPart,$telPart)
	{
		$sql = "UPDATE particulier SET prenom='$prenom', nom='$nom', adrPart='$adrPart',telPart='$telPart' WHERE idPart=$idPart";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}	

	function getclientbyid($idPart)
	{
		$sql = "SELECT * FROM particulier WHERE idPart=$idPart";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}

?>
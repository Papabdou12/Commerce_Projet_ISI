<?php
	require_once 'db_connect.php';
	function insertfournisseur($raisonS,$adrEnt,$telEnt)
	{
		$sql = "INSERT INTO entreprise VALUES('','$raisonS','$adrEnt','$telEnt')";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}
	function listfournisseur()
	{
		$sql = "SELECT * FROM entreprise";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}

	function deletefournisseur($idEnt)
	{
		$sql = "DELETE FROM entreprise WHERE idEnt=$idEnt";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}

	function updatefournisseur($idEnt,$raisonS,$adrEnt,$telEnt)
	{
		$sql = "UPDATE entreprise SET raisonS='$raisonS', adrEnt='$adrEnt', telEnt='$telEnt' WHERE idEnt=$idEnt";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}	

	function getfournisseurbyid($idEnt)
	{
		$sql = "SELECT * FROM entreprise WHERE idEnt=$idEnt";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}

?>
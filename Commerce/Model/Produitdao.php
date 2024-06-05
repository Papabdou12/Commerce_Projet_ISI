<?php
	require_once 'db_connect.php';
	function insertproduit($designation,$prix,$qtstock)
	{
		$sql = "INSERT INTO produit VALUES('','$designation','$prix','$qtstock')"; 
		$connect = getConnection();
		$result = mysqli_query($connect,$sql);
		return $result; 
	}

	function listproduit()
	{
		$sql = "SELECT * FROM produit";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}

	function deleteproduit($code)
	{
		$sql = "DELETE FROM produit WHERE code=$code";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}

	function updateproduit($code,$designation,$prix,$qtstock)
	{
		$sql = "UPDATE produit SET designation='$designation', prix='$prix', qtstock='$qtstock' WHERE code=$code";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}	
	function updateqstock($code,$quantite)
	{
		$sql = "UPDATE produit SET qtstock=qtstock+$quantite WHERE code=$code";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}
	function getproduitbycode($code)
	{
		$sql = "SELECT * FROM produit WHERE code=$code";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}
?>
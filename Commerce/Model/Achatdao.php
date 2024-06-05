<?php
	require_once 'db_connect.php';
	function insertfacture($code,$prixF,$quantite,$montant,$reglement)
	{
		$sql = "INSERT INTO facture VALUES('','$code','$prixF','$quantite','$montant','$reglement' )";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}
	function insertfournir($code,$idEnt,$quantite)
	{
		$sql = "INSERT INTO fournir VALUES( '$code','$idEnt','$quantite' )";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}
	function listfacture()
	{
		$sql = "SELECT* FROM facture";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}
	function getachatparprod()
	{
		$sql = "SELECT designation,SUM(montant) FROM facture, produit WHERE produit.code=facture.code AND montant=(prix-5000)*quantite GROUP BY designation" ;

		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}
	?>
<?php
require_once 'db_connect.php';
function getventeparprod()
	{
		$sql = "SELECT designation,SUM(montant) FROM facture, produit WHERE produit.code=facture.code AND montant=prix*quantite GROUP BY designation" ;

		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}
	function updateqstockapresachat($code,$quantite)
	{
		$sql = "UPDATE produit SET qtstock=qtstock-$quantite WHERE code=$code";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}
	function insertacheter($code,$idPart,$quantite)
	{
		$sql = "INSERT INTO acheter VALUES( '$code','$idPart','$quantite' )";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}
?>
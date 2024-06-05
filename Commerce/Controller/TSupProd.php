<?php
	require_once '../Model/Produitdao.php';
	if (isset($_GET['code'])) 
	{
		$code = $_GET['code'];
		$result = deleteproduit($code);
		if ($result) 
		{
			header("location:../Views/Lproduit.php");
		}
	}
?>
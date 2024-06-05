<?php
	require_once '../Model/Produitdao.php';
	if (isset($_POST['envoyer'])) 
	{
		$code = $_POST['code'];
		$designation = $_POST['designation'];
		$prix = $_POST['prix'];
		$qtstock = $_POST['qtstock'];
		$result = updateproduit($code,$designation,$prix,$qtstock);
		if ($result) 
		{
			header('location:../Views/Lproduit.php');
		}

	}
?>
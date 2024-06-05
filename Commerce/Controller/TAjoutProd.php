<?php
	require_once '../Model/Produitdao.php';
	if (isset($_POST['envoyer'])) 
	{
		$designation = $_POST['designation'];
		$prix= $_POST['prix'];
		$qtstock= $_POST['qtstock'];
		$result = insertproduit($designation,$prix,$qtstock);
		if ($result) 
		{
			header('location:../Views/Lproduit.php');
		}

	}
?>
<?php
	require_once '../Model/Fournisseurdao.php';
	if (isset($_GET['idEnt'])) 
	{
		$idEnt = $_GET['idEnt'];
		$result = deletefournisseur($idEnt);
		if ($result) 
		{
			header("location:../Views/Lfournisseur.php");
		}
	}
?>
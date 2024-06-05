<?php
	require_once '../Model/Clientdao.php';
	if (isset($_POST['envoyer'])) 
	{
		$prenom= $_POST['prenom'];
		$nom = $_POST['nom'];
		$adrPart = $_POST['adrPart'];
		$telPart = $_POST['telPart'];
		$result = insertclient($prenom,$nom,$adrPart,$telPart);
		if ($result) 
		{
			header('location:../Views/Lclient.php');
		}

	}
?>
<?php
	require_once '../Model/Clientdao.php';
	if (isset($_POST['envoyer'])) 
	{
		$idPart= $_POST['idPart'];
		$prenom= $_POST['prenom'];
		$adrPart = $_POST['adrPart'];
		$nom = $_POST['nom'];
		$telPart = $_POST['telPart'];
		$result = updateclient($idPart,$prenom,$nom,$adrPart,$telPart);
		if ($result) 
		{
			header('location:../Views/Lclient.php');
		}

	}
?>
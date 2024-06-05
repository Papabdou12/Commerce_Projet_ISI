<?php
	require_once '../Model/Fournisseurdao.php';
	if (isset($_POST['envoyer'])) 
	{
		$idEnt= $_POST['idEnt'];
		$raisonS= $_POST['raisonS'];
		$adrEnt = $_POST['adrEnt'];
		$telephone = $_POST['telephone'];
		$result = updatefournisseur($idEnt,$raisonS,$adrEnt,$telephone);
		if ($result) 
		{
			header('location:../Views/Lfournisseur.php');
		}

	}
?>
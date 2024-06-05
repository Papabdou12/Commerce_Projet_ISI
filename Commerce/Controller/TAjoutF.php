<?php
	require_once '../Model/Fournisseurdao.php';
	if (isset($_POST['envoyer'])) 
	{
		$raisonS = $_POST['raisonS'];
		$adrEnt= $_POST['adrEnt'];
		$telEnt= $_POST['telEnt'];
		$result = insertfournisseur($raisonS,$adrEnt,$telEnt);
		if ($result) 
		{
			header('location:../Views/Lfournisseur.php');
		}

	}
?>
<?php
	require_once '../Model/Achatdao.php';
	require_once '../Model/Produitdao.php';
	require_once '../Model/creditfdao.php';
	if (isset($_POST['envoyer'])) 
	{
		$code = $_POST['code'];
		$Prix = getproduitbycode($code);
		$tab = mysqli_fetch_row($Prix);
		$prix = $tab[2];
		$prixF = $prix-5000;
		$idEnt= $_POST['idEnt'];
		$quantite= $_POST['quantite'];
		$reglement= $_POST['reglement'];
		$montant = $prixF*$quantite;
		if ($quantite < 0 ) {
			header('location:../Views/achat.php?ok=0');
			}
		else{
		$fact = insertfacture($code,$prixF,$quantite,$montant,$reglement);
		$result = insertfournir($code,$idEnt,$quantite);
		$misajour = updateqstock($code,$quantite);
		if ($reglement=='credit') {
			$montantcreditf=$montant;
			$creditf=insertcreditf($idEnt,$montantcreditf);
		}
		if ($fact) 
		{
			if ($result) 
		  {
		  	if ($misajour) 
			{
				
			header('location:../Views/Lproduit.php');
			
			}
		  }
		}	
		}
	}
?>
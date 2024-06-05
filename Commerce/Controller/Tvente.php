<?php
	require_once '../Model/Ventedao.php';
	require_once '../Model/Achatdao.php';
	require_once '../Model/Produitdao.php';
	require_once '../Model/creditfdao.php';
	if (isset($_POST['envoyer'])) 
	{
		$code = $_POST['code'];
		$Prix = getproduitbycode($code);
		$tab = mysqli_fetch_row($Prix);
		$prix = $tab[2];
		$qtstock = $tab[3];
		$idPart= $_POST['idPart'];
		$quantite= $_POST['quantite'];
		$reglement= $_POST['reglement'];
		$montant = $prix*$quantite;
		if ($quantite>$qtstock||$quantite<0 ) {
			header('location:../Views/vente.php?ok=0');
			}
		else{
		 $fact = insertfacture($code,$prix,$quantite,$montant,$reglement);
		$result = insertacheter($code,$idPart,$quantite);
		$misajour = updateqstockapresachat($code,$quantite);
		if ($reglement=='liquide') {
			$montantcreditcli=$montant;
			$creditcli=insertcreditcli($idPart,$montantcreditcli);
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
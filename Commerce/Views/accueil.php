<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/bootstrap-cerulean.min.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
<div id="point">
<?php
$f=fopen("tmp.csv","r");

	while($row=fgetcsv($f,1000,";"))
	{
		$l=$row[0]; $p=$row[1];			
	}
	?>
	
</div>
 <div class="container col-lg-12">
<table>
<tr><td><?php echo  "<FONT COLOR='CYAN' > Connexion De: <FONT COLOR='PINK' size='4'  '> <b> ".$l." ".$p; "</FONT></b>"?></td>
<td><img src="img/logo.png" width="100" height="60"></td> <td><h1><FONT COLOR='white' >SIS ( SOCIETE  IMMOBILIERE  DE  SAFCO )</FONT></h1></td>
</tr>
</table>

<nav class="navbar navbar-inverse">
    <div class="nav navbar-nav">
			<li><a href="accueil.php"><img src="img/home.png">ACCUEIL</a></li>
			<li><a href="Lfournisseur.php">GESTION DES FOURNISSEURS</a></li>
			<li><a href="Lclient.php">GESTION DES CLIENTS</a></li>
			<li><a href="Lproduit.php">GESTION DES PRODUITS</a></li>
			<li><a href="achat.php">S'APPROVISIONNER</a></li>
			<li><a href="vente.php">VENDRE</a></li>

    </div>
    <div class="nav navbar-nav">
			<li><a href="creditF.php">CREDIT FOURNISSEUR</a></li> 
		    <li><a href="Stock.php">STOCK PRODUIT</a></li>
			<li><a href="creditCli.php"> DETTE CLIENT</a></li>
			<li><a href="Histogramme.php">HISTOGRAMME DES VENTES</a></li>
			<li><a href="venteparprod.php">VENTE PAR PRODUIT</a></li>
			<li><a href="achatparprod.php">ACHAT PAR PRODUIT</a></li>
			<li><a href="facture.php">FACTURE</a></li>
			<li><div class="btn btn-danger btn-sm"><a href="Fdeconnection.php">DECONNEXION</a></div></li>	
    </div>
    </nav>
 <p>SIS ( SOCIETE  IMMOBILIERE  DE  SAFCO ) EST UNE ENTREPRISE SPECIALISEE DANS LA VENTE ET L'ACHAT DES PRODUITS IMMOBILIERS.
 NOS PRODUITS SONT DE DIFFERENTE NATURE, DE BONNE QUALITE ET MOINS CHERS. 

 </p>
 <table class="table-bordered" align="center">
 <tr>
 <th class="text text-warning text-center">MEUBLE POUR SALON</th>
 <th class="text text-warning text-center" >MEUBLE POUR CHAMBRE</th>
 <th class="text text-warning text-center">MEUBLE POUR SALLE A MANGER</th>
 <th class="text text-warning text-center">LIT POUR ENFANT</th> 
 </tr>
 <tr>
 <td><img src="img/ms.jpg" width="200" height="200" class="img-circle"></td>
 <td><img src="img/mch.jpg" width="200" height="200" class="img-circle"><img src="img/mch1.jpg" width="200" height="200" class="img-circle"></td>
 <td><img src="img/msm.jpg" width="200" height="200" class="img-circle"></td>
 <td><img src="img/litE.jpg" width="200" height="200" class="img-circle"></td>
 </tr>
 
 </table>
 
</div>
</body>
</html>
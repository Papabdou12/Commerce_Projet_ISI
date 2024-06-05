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
    <div class="container col-md-6 col-md-offset-3 marge">
		<div class="panel panel-info">
			<div class="panel-heading">ACHAT PAR PRODUIT</div>
				<div class="panel-body">
					<table class="table table-bordered table-striped">
						<tr>
							<th class="text text-center">Produit</th>
							<th class="text text-center">Montant acheté </th>					
						</tr>
						<?php
							require_once '../Model/Achatdao.php';
							require_once '../Model/Produitdao.php';
							$result = getachatparprod();
							while ( $tab = mysqli_fetch_row($result)) 
							{
								echo "<tr>";
									echo "<td class='text text-center'>$tab[0]</td>";
									echo "<td class='text text-center'>$tab[1]</td>";	
								echo "</tr>";
							}
						?>
					</table>
				</div>
		</div>
	</div>
	</div>
</body>
</html>
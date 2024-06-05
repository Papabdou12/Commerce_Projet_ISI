<html>
<head>
<title>choix</title>
<link rel="stylesheet" href="deroulante.css"/>
</head>
<body>  

<div id="englobe">
<div id="point">
<?php
$f=fopen("tmp.csv","r");

	while($row=fgetcsv($f,1000,";"))
	{
		$l=$row[0]; $p=$row[1];			
	}
	?>
	<table align="left" >
<tr><td><?php echo  "<FONT COLOR='CYAN' > Connexion De: <FONT COLOR='PINK' size='4'  '> <b> ".$l." ".$p; "</FONT></b>"?></td></tr>
</table>
</div>
<div id="recherche">

	
				<form method="POST" action="rechercheparidclient.php">
		
				<table cellpadding="3" cellspacing="2">

					<tr>
						<td> <b><font color="CYAN" size="3"  family="sans-serif" >ID DU CLIENT</FONT></b></td>
						<td><input type="password" name="numero"/></td>
					<tr/>
					
		
					<tr>
					<td> </td>
						<td><input type="submit" value="RECHERCHER" name="Envoyer"/></td>
						</tr>

				</table>

		</form>




</div>
<div id="barre">

</div>

<center>


<div id="deroul">

<ul id="menu">
	<li><a href="#">Client</a>
		<ul>
			<li><a href="achatclient.php">Au comptant</a></li>
				<li><a href="avance.php">Avance</a></li>
			<li><a href="credit.php">Credit</a></li>

		</ul>
	</li>
	<li>
	<a href="#">Entreprise</a>
		<ul>
					<li><a href="achat_comptantentreprise.php">Au comptant</a></li>
			<li><a href="avance_entreprise.php">Avance</a></li>
				<li><a href="credit_entreprise.php">Credit</a></li>
		</ul>
	</li>
	<li>
	<a href="#">Informations</a>
		<ul>
			<li><a href="affichagestocke.php">Stock Produit</a></li>
			<li><a href="#">Crédits fournisseurs</a></li>
			<li><a href="affichagecreance2.php">Créances client</a></li>
			<li><a href="#">Afficher l’histogramme</a></li>
			<li><a href="affichagefacturemag.php">Montant de vente </a></li>
			<li><a href="affichagefacturemag.php">Montant d'achat</a></li>
			<li><a href="#">Impression </a></li>
		</ul>
	</li>
		<li><a href="connexionadmin.php"> Administrateur</a>
		<ul>
			<li><a href="indexadmin.php">Administrateur</a></li>
		
		</ul>
	</li>
</ul>
</div>


</center>

<div id="text">

<img   src="5.jpg">
</div>
<div id="pub">
<table>
<tr>
<ul>
              <td id="tete" ><li> <a href="affichagefacture.php">Imprimer facture</a></li></td>
			  </tr><tr>
			       <td id="tete" ><li> <a href="affichageclient2.php">Voir tous les clients</a></li></td>
                         </tr>
<tr>
						 <td id="tete" ><li> <a href="affichagecreance2.php">Voir les creanciers</a></li></td>
                                                 
</tr>
	<tr>

	<td id="tete" ><li> <a href="index.php">Se deconnecter</a></li></td>
	</ul>
</tr>
</table>
</div>





</div>

<footer> 
<center><b>Copyright&copy; Fallou FALL 2016 </b></center>
</footer> 
</body>

</html>
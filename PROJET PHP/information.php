<html>
<head>
<title>choix</title>
<link rel="stylesheet" href="deroulanteb.css"/>


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
		<table align="left" width="400" height="10">
<tr><td><?php echo  "<FONT COLOR='CYAN' > Connexion De: <FONT COLOR='PINK' size='4'  '> <b> ".$l." ".$p."<font color=cyan> As Admin"."</FONT></b>";?></td></tr>
</table>
</div>


	<table align="right" width="400" height="10">
<tr> <td><?php echo  "<FONT COLOR='CYAN' > RECHERCHER <FONT COLOR='PINK' size='4'  '> ";?></td>

						<td>ID</td>
						<td><input type="text" size="25" required  name="nom"/></td>
					<td>Go</td>
						<td><input type="text" size="25" required  name="nom"/></td>

</tr>
</table>

<div id="barre">

</div>
<center>


<div id="deroul">
<ul id="menu">
	<li><a href="#">Gestion</a>
		<ul>
			<li><a href="affichageclient2.php">Voir les clients</a></li>
				<li><a href="affichagecreance2.php">Voir les creanciers</a></li>
			<li><a href="affichagefacturemag2.php">Voir les transactions</a></li>

		</ul>
	</li><li><a href="#">Commander</a>
		<ul>
					<li><a href="affichagestocke.php">Voir le stocke</a></li>
			<li><a href="affichagecommande.php">Commande Effectues</a></li>
				<li><a href="fournisseurclient.php">Commander produits</a></li>
		</ul>
	</li>
	<li><a href="#">Informations</a>
		<ul>
			<li><a href="creditfournisseur.php">Les crédits fournisseurs</a></li>
			<li><a href="montantdachat.php">Montant d'achat par produit</a></li>
			<li><a href="montantdevente.php">Montant de vente par produit</a></li>
			<li><a href="affichagefacturemag2.php">Montant d'achat par produit</a></li>
	
		</ul>
	</li>
		<li><a href="#">Controle</a>
		<ul>
			<li><a href="affichageuser.php">Le personel</a></li>
			<li><a href="affichageconnexion.php">Historique de connexion</a></li>
			<li><a href="affichagelisterouge.php">Liste Rouge</a></li>
		   	<li><a href="pchart/histogramme.php">Histogramme</a></li>
	
		</ul>
	</li>
</ul>
</div>


</center>

<div id="text">

<img   src="3.jpg" height="10">
<center>
<section="classe">
<span class=" loader loader-quart"> </span>
    CHARGEMENT....................
</section>
</center>
</img>
</div>
<div id="pub">
<table>
<ul>
<tr>

              <td id="tete" ><li> <a href="impression.php">Imprimer facture</a></li></td>
			  </tr>
<tr>
<tr>

              <td id="tete"><li><a href="loupe.php">Vision Global</a></li></td>
			  </tr>
<tr>

              <td id="tete" ><li> <a href="choix.php">Espace de vente</a></li></td>
			  </tr>

	<tr>

	<td id="tete" ><li> <a href="index.php">Se deconnecter</a></li></td>

</tr>
</ul>
</table>
</div>





</div>

<footer> 
<center><b>Copyright&copy; Fallou FALL 2016 </b></center>
</footer> 
</body>

</html>
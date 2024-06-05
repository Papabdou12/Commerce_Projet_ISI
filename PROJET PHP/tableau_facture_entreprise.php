<html>
<head>
<title>liste des ventes</title>
<link rel="stylesheet" href="admin.css"/>
</head>
<body >
<div id="englobe">
<br><br>

<center><p id="pp">FACTURE DELIVRE PAR GES_TECH INFORMATIQUE</p></center>
<br>
	<table >
	<tr>
			<td id="tete">RAISON SOCIALE</td>
				<td id="tete">ADRESSE</td>
           	<td id="tete">TELEPHONE</td>
							
				<td id="tete">ORDINATEURS</td>
				<td id="tete">SCANNERS</td>
           	<td id="tete">IMPRIMANTE</td>
				<td id="tete">TOTAL</td>
			
		</tr>
		<tr>
			<?php
		            	$f = fopen("facture_entreprise.csv","r");
			while($tab= fgetcsv($f,1000,";"))
			{
				echo "<tr>";
				for($i=0;$i<count($tab);$i++)
					echo "<td>".$tab[$i]."</td>";
				echo "</tr>";
			}
			?>
		</tr>
</table>

<footer> 
<div id="text">
<a href="tableau_facture_entreprise.php">retour au menu</a>
</div>
<center><p>Copyright&copy; Fallou FALL 2016 </p></center>
</footer> 

</div>
</body>
</html>
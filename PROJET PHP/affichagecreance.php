<html>
<head>
<title>liste des ventes</title>
<link rel="stylesheet" href="admin.css"/>
</head>
<body >
<br><br>
<div id="englobe">
<br><br>
	<table >
	<tr>

		            	<td id="tete" >TYPE</td>
				<td  id="tete">NOM</td>
				<td id="tete">PRENOM</td>
           	<td id="tete">ADRESSE</td>
			<td id="tete">TELEPHONE</td>
							<td  id="tete">DATE</td>
				<td id="tete">HEURE</td>
				<td  id="tete">ORDINATEURS</td>
				<td id="tete">SCANNERS</td>
           	<td id="tete">IMPRIMANTES</td>
				<td id="tete" >AVANCE</td>
					<td id="tete" >RESTE</td>
					<td id="tete" >A PAYER</td>
			
		</tr>
		<tr>
			<?php
		            	$f = fopen("creance.csv","r");
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


<table>
<tr>
              <td id="tete" ><li> <a href="affichagefacture.php">Voir le facture</a></li></td>
			       <td id="tete" ><li> <a href="affichageclient.php">Voir tous les clients</a></li></td>
                           <td id="tete" ><li> <a href="affichagecreance.php">Voir les creanciers</a></li></td>
                                                       <td id="tete" ><li> <a href="choix.php">Retour au menu</a></li></td>
</tr>
</table>
</div>
<footer> 

<center><p>Copyright&copy; Fallou FALL 2016 </p></center>
</footer> 

</div>
</body>
</html>
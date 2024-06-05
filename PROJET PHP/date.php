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
				<td  id="tete">PRENOM</td>
				<td id="tete">ADRESSE</td>
           	<td id="tete">TELEPHONE</td>
		
				<td  id="tete">ORDINATEURS</td>
				<td id="tete">SCANNERS</td>
           	<td id="tete">IMPRIMANTES</td>
				<td id="tete" >AVANCE</td>
					<td id="tete" >RESTE</td>
					<td id="tete" >TOTAL</td>
			
		</tr>
		<tr>
			<?php
		            	$f = fopen("facturemag.csv","r");
			while($tab= fgetcsv($f,1000,";"))
			{
			           for($j=0;$j<count($tab);$j++)
			{
				echo "<tr>";
			
					echo "<td >".$tab[$j]."</td>";
				echo "</tr>";
			}
			}
			?>
		</tr>
</table>
<div id="texte">

<table>
<tr>
               <td id="tete"><li> <a href="affichagefacture.php">Voir le facture</a></li></td>
			    <td id="tete" ><li> <a href="affichageclient.php">Voir tous les clients</a></li></td>
                        <td  id="tete"><li> <a href="affichagecreance.php">Voir les creanciers</a></li></td>
                                                       <td id="tete"><li> <a href="choix.php">Retour au menu</a></li></td>
</tr>
</table>
</div>
</div>

<footer> 

<center><p>Copyright&copy; Fallou FALL 2016 </p></center>
</footer> 


</body>
</html>
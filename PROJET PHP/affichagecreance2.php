<html>
<head>
<title>liste des ventes</title>
<link rel="stylesheet" href="admin.css"/>
</head>
<body >


<div id="englobe">
<br><br>

<div id="pp">
<P>LISTE DES CREANCE DE GESTECH SENEGAL</P>
</div>
<br><br>
	<table >
	<tr>
	<td id="tete" >ID</td>
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
			$id=1;
		            	$f = fopen("creance.csv","r");
			while($tab= fgetcsv($f,1000,";"))
			{
				echo "<tr>";
					   echo   	"<td >".$id."</td>";
				for($i=0;$i<count($tab);$i++)
					echo "<td>".$tab[$i]."</td>";
				
				echo "</tr>";
					$id=$id+1;
			}
			
			
			?>
		</tr>
</table>


<table>
<tr>
           
			       <td id="tete" ><li> <a href="affichageclient2.php">Voir tous les clients</a></li></td>
                           <td id="tete" ><li> <a href="affichagecreance2.php">Voir les creanciers</a></li></td>
                                                       <td id="tete" ><li> <a href="information.php">Retour au menu</a></li></td>
</tr>
</table>		<div id="impression">
<a id="aimp" title="print screen" alt="print screen"
onclick="window.print(); "target="_blank"
style="cursor:pointer;"><b>IMPRIMMER  </b></a></div>
<br><br><br>
<footer> 

<center><b>Copyright&copy; Fallou FALL 2016 </b></center>
</footer> 
</div>


</div>
</body>
</html>
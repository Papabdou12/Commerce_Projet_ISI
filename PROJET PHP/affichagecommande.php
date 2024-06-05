<html>
<head>
<title>liste des ventes</title>
<link rel="stylesheet" href="admin.css"/>
</head>
<body >

<div id="englobe">
<br>
<div id="pp"><CENTER>
<P>COMMANDES EFFECTUES PAR GESTECH SENEGAL</P></center>
</div><br><br>
	<table >
	<tr>
                	<td id="tete" >NUM COMMANDE</td>
		            	<td id="tete" >TYPE</td>
				<td  id="tete">NOM</td>
				<td  id="tete">PRENOM</td>
				<td id="tete">ADRESSE</td>
           	<td id="tete">TELEPHONE</td>
			<td id="tete" >DATE D'ACHAT</td>
			<td id="tete">HEURE</td>
		
				<td  id="tete">ORDINATEURS</td>
				<td id="tete">SCANNERS</td>
           	<td id="tete">IMPRIMANTES</td>
				<td id="tete" >AVANCE</td>
			
					<td id="tete" >TOTAL</td>
			
		</tr>
		<tr>
			<?php
			$id=0;
		            	$f = fopen("commande.csv","r");
			while($tab= fgetcsv($f,1000,";"))
			{
				echo "<tr>";
				   echo   	"<td >".$id."</td>";
				for($i=0;$i<count($tab);$i++)
			
				 
					echo "<td >".$tab[$i]."</td>";
					
						
						
				echo "</tr>";
				$id=$id+1;
			}
			fclose($f);
			?>
		</tr>
</table>
<div id="texte">

<table>
<tr>
           
		
     
			    <td id="tete"><li> <a href="fournisseurclient.php">COMMANDER PRODUITS</a></li></td>
                        <td  id="tete"><li> <a href="montantdevente.php">MONTANT DE VENTE</a></li></td>
                                                       <td id="tete"><li> <a href="montantdachat.php">MONTANT ACHATS</a></li></td>
													   <td id="tete"><li> <a href="information.php">MENU</a></li></td>

</tr>
</table>
</div>		<div id="impression">
<a id="aimp" title="print screen" alt="print screen"
onclick="window.print(); "target="_blank"
style="cursor:pointer;"><b>IMPRIMMER  </b></a></div>
<footer> 

<center><b>Copyright&copy; Fallou FALL 2016 </b></center>
</footer>
</div>

 


</body>
</html>
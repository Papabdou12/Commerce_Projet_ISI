<html>
<head>
<title>liste des ventes</title>

<link rel="stylesheet" href="admin.css"/>
</head>
<body >

<div id="englobe">
<div id="pp">
<P>LISTE DES FORNISSEURS DE  GESTECH SENEGAL</P>
</div>
	<table >
	<tr>
                 	<td id="tete" >ID</td>
		            	<td id="tete" >TYPE</td>
				<td  id="tete">NOM</td>
				<td id="tete">PRENOM</td>
           	<td id="tete">ADRESSE</td>
			 	<td id="tete">TELEPHONE</td>
			
		</tr>
		<tr>
			<?php
				$id=0;
		            	$f = fopen("fournisseur.csv","r");
			while($tab= fgetcsv($f,1000,";"))
			{
				echo "<tr>";
					  echo   	"<td >".$id."</td>";
				for($i=0;$i<count($tab);$i++)
					echo "<td>".$tab[$i]."</td>";
						$id=$id+1;
				echo "</tr>";
			}
			?>
		</tr>
</table>



<table>
<tr>
              
			    <td id="tete" ><li> <a href="affichageclient2.php">Voir tous les clients</a></li></td>
                        <td  id="tete"><li> <a href="affichagecreance2.php">Voir les creanciers</a></li></td>
                                                       <td id="tete"><li> <a href="information.php">Retour au menu</a></li></td>
</tr>
</table>
<br><br>
<footer> 

<center><b>Copyright&copy; Fallou FALL 2016</b> </center>
</footer> 
</div>


</body>
</html>
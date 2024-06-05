<html>
<head>
<title>liste des ventes</title>

<link rel="stylesheet" href="admin.css"/>
</head>
<body >


<div id="englobe">
<br>
<div id="pp">
<P>LISTE ROUGE</P>
</div>
<br><br>
	<table >
		<tr>
	
		           
				
		<td><td   id="tete2" colspan="2">Tentive de violation avec des faux ID et MDP</td></td><td></td>
			
		</tr>
	<tr>
	
		           
				<td  id="tete">LOGIN</td>
				<td id="tete">PASSWORD</td>
         		<td  id="tete">DATE</td>
				<td id="tete">HEURE</td>
			
		</tr>
		<tr>
			<?php

		            	$f = fopen("listerouge.csv","r");
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
    
			    <td id="tete" ><li> <a href="affichageclient2.php">Voir tous les clients</a></li></td>
                        <td  id="tete"><li> <a href="affichagecreance2.php">Voir les creanciers</a></li></td>
                                                       <td id="tete"><li> <a href="information.php">Retour au menu</a></li></td>
</tr>
</table>		<div id="impression">
<a id="aimp" title="print screen" alt="print screen"
onclick="window.print(); "target="_blank"
style="cursor:pointer;"><b>IMPRIMMER  </b></a></div>

<footer> 

<center><b>Copyright&copy; Fallou FALL 2016 </b></center>
</footer> 
</div>


</body>
</html>
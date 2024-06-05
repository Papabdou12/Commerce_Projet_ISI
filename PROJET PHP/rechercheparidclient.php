<html>
<head>
<title>liste des ventes</title>

<link rel="stylesheet" href="admin.css"/>
</head>
<body >


<div id="englobe">
<br>
<div id="pp">
<P>LISTE DES CLIENTS DE  GESTECH SENEGAL</P>
</div>
<br><br>
	<table >
	<tr>
		<td id="tete" >ID </td>
			<td id="tete">TYPE</td>
				<td id="tete">NOM</td>
           	<td id="tete">PRENOM</td>
					<td id="tete">ADRESSE</td>
           	<td id="tete">TELEPHONE</td>
		
			
		</tr>
		<tr>
			<?php
if (isset($_POST['Envoyer']))
{
$numero=htmlentities(trim($_POST['numero']));





			$id=$numero;
			$cpt=0;
		            	$f = fopen("client.csv","r");
			while($tab= fgetcsv($f,1000,";"))
			{

			if($cpt==$numero)
		     {
				echo "<tr>";
             echo   	"<td >".$id."</td>";
				for($i=0;$i<count($tab);$i++)
					echo "<td>".$tab[$i]."</td>";
					
				echo "</tr>";
				}
				
			             
					$cpt=$cpt+1;
			}
		



	}
	?>
		</tr>
</table>




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
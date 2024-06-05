<html>
	<head>
		<title>Espaceclient</title>
<link rel="stylesheet" href="admin.css"/>
	</head>
	<body>
<div id="englobe">

<div id="pp"><CENTER>
<P>ACHAT REALISE PAR GESTECH SENEGAL</P></center>
</div><br>
		<table > 

		
		<tr>
		 	<td id="tete" >NUM COMMANDE</td>
		        
				<td  id="tete">ORDINATEUR</td>
				<td  id="tete">SCANNER</td>
				<td id="tete">IMPRIMANTE</td>
				</tr>
		<?php
			session_start();
			$id=0;
			$f=fopen("commande.csv","r");
			$imp=0;$ordi=0;$scann=0;          
			while($tab=fgetcsv($f,1500,";"))
				{
					echo "<tr>";
				
				$ordi=$ordi+$tab[7];                            
				$scann=$scann+$tab[8];
					$imp=$imp+$tab[9];
	
				   echo   	"<td >".$id."</td>";
				for($i=7;$i<=9;$i++)
	 
					echo "<td >".$tab[$i]."</td>";

				echo "</tr>";
					
			$id++;
			
					echo "</tr>";
				}
				
			fclose($f);
			
				$Mimp=$imp*30000;$Mordi=$ordi*250000;$Mscann=$scann*60000;
		?>
		</table>
		<table>
			<tr>
			<td id="tete" colspan="4">NOMBRES DE PRODUITS ACHETES PAR CATEGORIES</td>	
		
		</tr>
		<tr>
			<td>&nbsp;</td>	<td ><?php echo $ordi;?></td>	<td ><?php echo $scann;?></td>	<td ><?php echo $imp;?></td>
		
		</tr>
		
		
				<tr>
		<td id="tete" colspan="4">NOMBRES D'ACHAT D'ACHAT TOTAL PAR PRODUIT</td>	
		
		</tr>
		<tr>
			<td id="tete2"></td><td id="tete2" ><?php echo $Mordi;?></td>	<td id="tete2" ><?php echo $Mscann;?></td>	<td id="tete2" ><?php echo $Mimp;?></td>
		
		</tr>
		<tr>
				<td id="tete" colspan="5">TOTAL</td>	
		
		</tr>
						<tr>

		<td id="tete2" colspan="5"><?php echo $Mscann+$Mimp+$Mordi;?></td>	
		</tr>
		</table>
				<div id="impression">
<a id="aimp" title="print screen" alt="print screen"
onclick="window.print(); "target="_blank"
style="cursor:pointer;"><b>IMPRIMMER  </b></a></div>
<footer> 

<center><b>Copyright&copy; Fallou FALL 2016 </b></center>
</footer> 
		</div>



	
	</body>

</html>
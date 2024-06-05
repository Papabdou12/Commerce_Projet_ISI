<html>
	<head>
		<title>Espaceclient</title>
<link rel="stylesheet" href="admin.css"/>
	</head>
	<body>
<div id="englobe">

<div id="pp">
<CENTER>
<P>MONTANT DE VENTE PAR CATEGORIES</P></center>
<br>
</div>
		<table > 
		<tr>
			<td id="tete">ORDINATEURS</td>
			<td id="tete">SCANNERS</td>
			<td id="tete">IMPRIMANTRS</td>
		
		</tr>
		<?php
			session_start();
			$f=fopen("facturemag.csv","r");
			$imp=0;$ordi=0;$scann=0;          
			while($tab=fgetcsv($f,1500,";"))
				{
					echo "<tr>";
					echo "<td>".$tab[7]."</td>";
					echo "<td>".$tab[8]."</td>";
				    echo "<td>".$tab[9]."</td>";
					
					
				$ordi=$ordi+$tab[7];                            
				$scann=$scann+$tab[8];
					$imp=$imp+$tab[9];
					
					
				
			
					echo "</tr>";
				}
				
			fclose($f);
			
				$Mimp=$imp*30000;$Mordi=$ordi*250000;$Mscann=$scann*60000;
		?>
			<tr>
			<td id="tete">&nbsp;</td>			<td id="tete">NOMBRES DE PRODUITS VENDUS PAR CATEGORIES</td>	<td id="tete">&nbsp;</td>
		
		</tr>
		<tr>
			<td ><?php echo $ordi;?></td>	<td ><?php echo $scann;?></td>	<td ><?php echo $imp;?></td>
		
		</tr>
		
		
				<tr>
			<td id="tete">&nbsp;</td>			<td id="tete">MONTANT DE  VENTE PAR CATEGORIES</td>	<td id="tete">&nbsp;</td>
		
		</tr>
		<tr>
			<td id="tete2" ><?php echo $Mordi;?></td>	<td id="tete2" ><?php echo $Mscann;?></td>	<td id="tete2" ><?php echo $Mimp;?></td>
		
		</tr>
				<tr>
			<td id="tete">&nbsp;</td>			<td id="tete">MONTANT DE  VENTE TOTAL</td>	<td id="tete">&nbsp;</td>
		
		</tr>
						<tr>
			<td >&nbsp;</td>			<td id="tete2"><?php echo $Mscann+$Mimp+$Mordi;?></td>	<td >&nbsp;</td>
		
		</tr>
		</table>		
	<br><br><br>
<div id="impression">
<a id="aimp" title="print screen" alt="print screen"
onclick="window.print(); "target="_blank"
style="cursor:pointer;"><b>IMPRIMMER  </b></a></div>
<div id="footer">
<footer> 

<center><b>Copyright&copy; Fallou FALL 2016 </b></center>
</footer> 
		</div>
		</div>
	</body>

</html>
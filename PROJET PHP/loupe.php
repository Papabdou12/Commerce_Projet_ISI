<html>
<head>
<title>liste des ventes</title>
<link rel="stylesheet" href="admin2.css"/>
</head>
<body >

<div id="englobe">
<div id="a">
<P>LISTE DES CLIENTS DE  GESTECH SENEGAL</P>

<table  width="420px">
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
		            	$f = fopen("client.csv","r");
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
</div>
<div id="c">
<div id="pp">
<P>LISTE DU PERSONNEL DE  GESTECH SENEGAL</P>
</div>
<table  width="390px">
	<tr>
	<td id="tete" >ID</td>
		    
				<td  id="tete">NOM</td>
				<td id="tete">PRENOM</td>
           	<td id="tete">LOGIN</td>
			 	<td id="tete">PASSWORD</td>
			
		</tr>
		<tr>
			<?php
			$id=0;
		            	$f = fopen("user.csv","r");
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

</div>
<div id="b">
<div id="pp">
<P>LISTE DES FORNISSEURS DE  GESTECH SENEGAL</P>
</div>
<table  width="427">
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
</div>
<div id="d">
<div id="pp">
<P>MONTANT  DE VENTES  REALISES PAR GESTECH SENEGAL</P>
</div>
		<table width="420"> 
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
					
					
				$ordi=$ordi+$tab[7];                            
				$scann=$scann+$tab[8];
					$imp=$imp+$tab[9];
					
					
				
			
				}
				
			fclose($f);
			
				$Mimp=$imp*30000;$Mordi=$ordi*250000;$Mscann=$scann*60000;
		?>
			
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
			<td id="tete" colspan="5">TOTAL</td>	
		
		</tr>
						<tr>
					<td id="tete2"  colspan="5"><?php echo $Mscann+$Mimp+$Mordi;?></td>	
		
		</tr>
		</table>	
</div>
<div id="e">
<div id="pp">
<P>HISTOGRAMME</P>
</div>


</div>
<div id="f">
<div id="pp">
<P>MONTANT D'ACHATS REALISES PAR   GESTECH SENEGAL</P>
</div>
<table  width="390px">

		
		<tr>
		 	<td id="tete" >NUM COMMANDE</td>
		        
				<td  id="tete">ORDINATEUR</td>
				<td  id="tete">SCANNER</td>
				<td id="tete">IMPRIMANTE</td>
				</tr>
		<?php
			
			$id=0;
			$f=fopen("commande.csv","r");
			$imp=0;$ordi=0;$scann=0;          
			while($tab=fgetcsv($f,1500,";"))
				{
				
				
				$ordi=$ordi+$tab[7];                            
				$scann=$scann+$tab[8];
					$imp=$imp+$tab[9];
	
			
	 
					
				}
				
			fclose($f);
			
				$Mimp=$imp*30000;$Mordi=$ordi*250000;$Mscann=$scann*60000;
		?>
		</table>
		<table width="390">
	
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
</div>

	
</div>


</body>
</html>
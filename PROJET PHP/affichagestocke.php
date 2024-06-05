<html>
<head>
<title>liste des ventes</title>

<link rel="stylesheet" href="admin.css"/>
</head>
<body >

<div id="englobe">
<br>
<div id="pp"><CENTER>
<P>STOCKE DE PRODUITS </P></center>
</div>
<br><br>
	<table >
	<tr>

		            	<td id="tete" >ORDINATEUR</td>
				<td  id="tete">IMPRIMANTES</td>
				<td id="tete">SCANNERS</td>
          		<td id="tete">TOTAL</td>
			
		</tr>
		<tr>
			<?php
					session_start();
					$cpt=0;
		            	$f = fopen("stoque.csv","r");
							$imp=0;$ordi=0;$scann=0;     $t=0;  
			while($tab= fgetcsv($f,1000,";"))
			{
			   $imp=$imp+$tab[2];
							 $ordi=$ordi+$tab[0];
							 $scann=$scann+$tab[1];     
							 $t=$t+$tab[0]*250000+$tab[1]*60000+$tab[2]*30000;
		
              }
			?>
		
						<tr>
			<td ><?php echo $ordi ?></td>			<td ><?php echo $scann;?></td>	<td> <?php echo $imp ?></td><td><?php echo $t ?></td>
		
		</tr>
	
			
			
		</tr>
</table>



<table>
<tr>
     
			    <td id="tete"><li> <a href="fournisseurclient.php">COMMANDER PRODUITS</a></li></td>
                        <td  id="tete"><li> <a href="montantdevente.php">MONTANT DE VENTE</a></li></td>
                                                       <td id="tete"><li> <a href="montantdachat.php">MONTANT ACHATS</a></li></td>
													   <td id="tete"><li> <a href="information.php">MENU</a></li></td>
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
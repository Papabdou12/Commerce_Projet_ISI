<?php
if(isset($_POST['submit']))
{
$raison=htmlentities(trim($_POST['raison']));
$adresse=htmlentities(trim($_POST['adresse']));
$telephone=htmlentities(trim($_POST['telephone']));
$ordinateur=htmlentities(trim($_POST['ordinateur']));
$imprimante=htmlentities(trim($_POST['imprimante']));
$scanner=htmlentities(trim($_POST['scanner']));
$date = date("d-m-Y");
$heure = date("H:i");

$total=0;
   $dim=-$ordinateur." ;".-$imprimante." ;".-$scanner." ; ".-$total."\n";
$total=$total+$ordinateur*220000+$imprimante*30000+$scanner*60000;

 $acheteur="ENTREPRISE".";".$raison.";"."PRENOM".";".$adresse." ;".$telephone."\n";
                                               $achete="ENTREPRISE".";".$raison.";"."NEANT".";".$adresse." ;".$telephone.";".$date.";".$heure.";".$ordinateur." ;".$imprimante." ;".$scanner." ; ".$total.";"."0".";".$total."\n";
			   $achete2="ENTREPRISE".";".$raison.";"."NEANT".";".$adresse." ;".$telephone.";".$date.";".$heure.";".$ordinateur." ;".$imprimante." ;".$scanner." ; ".$total.";"."0".";".$total."\n";
if($raison && $adresse && $telephone  )
{
if ($ordinateur>= 0 && $imprimante>=0 && $scanner>=0 && $total>=0 && strlen($telephone)==9 && $telephone>0)
{

$f=fopen("stoque.csv","r");
			$imp=0;$ordi=0;$scann=0;          
			while($tab=fgetcsv($f,1500,";"))
				{
					
					
					
				$ordi=$ordi+$tab[0];                            
				$scann=$scann+$tab[1];
					$imp=$imp+$tab[2];
					
					}
					fclose($f);
if($ordi<$ordinateur)
echo "Les ordinateurs sont en rupture de stoque.Il n'en reste que: ".$ordi;
if($scann<$scanner)
echo "Les scanners sont en rupture de stoque.Il n'en reste que: ".$scann;
if($imp<$imprimante)
echo "Les imprimantes sont en rupture de stoque.Il n'en reste que: ".$imp;
if($ordi>=$ordinateur &&  $imp>=$imprimante && $scann>=$scanner)
{
$client=fopen('client.csv','a');
$facture=fopen('facture.csv','w');
$facturemag=fopen('facturemag.csv','a');
$stoque=fopen('stoque.csv','a');
fwrite($stoque,$dim);
fclose ($stoque);
fwrite($client,$acheteur);
fwrite($facture,$achete2);
fwrite($facturemag,$achete);

fclose ($client);
fclose ($facture);
fclose ($facturemag);

 echo "<script type='text/javascript'>
alert('OPERATION REUSSITE');


</script>";
}}
else
echo "Veiller entrer de bonnes valeurs!";
}
else
echo "Veiller remprir tous les champs";
}
?>

<html>
<head>
<title>register.html</title>
<link rel="stylesheet" href="achat.css"/>
 </head>
 <body>
 <div id="englobe">
 
 
<form method="POST" action="">
<div id="info">
<center>
<p> Raison Social</p>
<input type="text" name="raison"  min="3" max="30">
<p>Adresse</p>
<input type="text" name="adresse"  min="3" max="30">
<p> Telephone</p>

<input type="number"  name="telephone">
<br><br>
</center>
</div>
<div id="achat">
<center>
<p> Ordinateur</p>
<input type="number"  name="ordinateur"  min="0" max="15">
<p>Imprimante</p>
 <input type="number" name="imprimante"  min="0" max="15">
<p> Scanner</p>
<input type="number" name="scanner"  min="0" max="15">
<br><br>
</center>
</div>


 

</div>
<div id= "valider">
<center>
<table>

<tr>

<td ><button id="vert" type="submit"   value="Valider" name="submit">CONFIRMER</button></td>
<td></td><td></td><td></td><td>
<td><button  id="jaune" type="reset" value="annuler" name="annuler"/>ANNULER</button></td>
<td></td><td></td><td></td><td>
<td id="rouge"> <a href="choix.php">RETOUR </a></td>					
</tr>

</table>
</center>
</div>
</form>
 <footer> 

<br><br>
<p>Copyright&copy; Fallou FALL 2016 </p>
<center>
</footer> 
</body>
</html>



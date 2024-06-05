<?php
	session_start();
if(isset($_POST['submit']))
{
$nom=htmlentities(trim($_POST['nom']));
$prenom=htmlentities(trim($_POST['prenom']));
$adresse=htmlentities(trim($_POST['adresse']));
$telephone=htmlentities(trim($_POST['telephone']));
$ordinateur=htmlentities(trim($_POST['ordinateur']));
$imprimante=htmlentities(trim($_POST['imprimante']));
$scanner=htmlentities(trim($_POST['scanner']));

$total=0;

$total=$total+$ordinateur*220000+$imprimante*30000+$scanner*60000;

$date = date("d-m-Y");
$heure = date("H:i");

   $dim=-$ordinateur." ;".-$imprimante." ;".-$scanner." ; ".-$total."\n";
                                                $acheteur="PARTICULIER".";".$nom." ;".$prenom." ;".$adresse." ;".$telephone."\n";
                                               $achete="PARTICULIER".";".$nom." ;".$prenom." ;".$adresse." ;".$telephone.";".$date.";".$heure.";".$ordinateur." ;".$imprimante." ;".$scanner." ; ".$total.";"."0".";".$total."\n";
											     $achete2="PARTICULIER".";".$nom." ;".$prenom." ;".$adresse." ;".$telephone.";".$date.";".$heure.";".$ordinateur." ;".$imprimante." ;".$scanner." ; ".$total.";". "0". ";".$total."\n";
if($nom && $prenom && $adresse && $telephone &&$total )
{
if ($ordinateur>= 0 && $imprimante>=0 && $scanner>=0 && $total>=0 && strlen($telephone)==9 && $telephone>0 )
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
echo "<b> <font color='cyan'>Les ordinateurs sont en ruptures de stoque.Il n'en reste que:</font> </b>"."<b><font color='red' size='5px'>".$ordi."</font></b>\n";
if($scann<$scanner)
echo "<b> <font color='cyan'>\nLes scannerss sont en ruptures de stoque.Il n'en reste que:</font> </b>"."<b><font color='red' size='5px'>".$scan."</font></b>\n";
if($imp<$imprimante)
echo "<b> <font color='cyan'>\nLes imprimantes sont en ruptures de stoque.Il n'en reste que:</font> </b>"."<b><font color='red' size='5px'>".$imp."</font></b>\n";
if($ordi>=$ordinateur &&  $imp>=$imprimante && $scann>=$scanner)
{
$stoque=fopen('stoque.csv','a');
fwrite($stoque,$dim);
fclose ($stoque);

$client=fopen('client.csv','a');
$facture=fopen('facture.csv','w');
$facturemag=fopen('facturemag.csv','a');
fwrite($client,$acheteur);
fwrite($facture,$achete);
fwrite($facturemag,$achete2);
fclose ($client);
fclose ($facture);
fclose ($facturemag);

 echo "<script type='text/javascript'>
alert('OPERATION REUSSITE');


</script>";

}
}
else
echo "Veiller entrer de bonnes valeurs!";
}
else
echo "Veiller remprir tous les champs";
}
	//else header('location:achatclient.php');
?>

<html>
<head>
<title>register.html</title>
<link rel="stylesheet" href="achat.css"/>
 </head>
 <body>
 <div id="englobe">
 
 
<form method="POST" action="achatclient.php">
<div id="info">
<center>
<p> Nom</p>
<input type="text" name="nom" min="2" max="20">
<p>Prenom</p>
<input type="text" name="prenom"min="2" max="20">
<p> Adresse</p>
<input type="text" name="adresse"min="2" max="30">
<p>Telephone</p>
<input type="number"  name="telephone" >
<br><br>
</center>
</div>
<div id="achat">
<center>







<p> Ordinateur</p>
<input type="number" name="ordinateur" min="0" max="15">
<p>Imprimante</p>
 <input type="number" name="imprimante" min="0" max="15">
<p> Scanner</p>
 <input type="number" name="scanner" min="0" max="15">

</center>
</div>

</div>
<div id="valider">
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
 
 


</body>
</html>



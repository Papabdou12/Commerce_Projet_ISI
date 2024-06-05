<?php
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

                            $acheteur="PART/	ENTRE".";".$nom." ;".$prenom." ;".$adresse." ;".$telephone."\n";
                            $achete=$ordinateur." ;".$imprimante." ;".$scanner." ; ".$total."\n";
						    $achete2="PART/ENTRE".";".$nom." ;".$prenom." ;".$adresse." ;".$telephone.";".$date.";".$heure.";".$ordinateur." ;".$imprimante." ;".$scanner." ; ".$total.";".$total."\n";
if($nom && $prenom && $adresse && $telephone &&$total )
{
if ($ordinateur>= 0 && $imprimante>=0 && $scanner>=0 && $total>=0 && strlen($telephone)==9 && $telephone>0)
{
$fac=fopen('facture.csv','w');
$fournisseur=fopen('fournisseur.csv','a');
$stoque=fopen('stoque.csv','a');
$commande=fopen('commande.csv','a');
fwrite($fac,$achete2);
fwrite($fournisseur,$acheteur);
fwrite($stoque,$achete);
fwrite($commande,$achete2);
fclose ($fournisseur);
fclose ($stoque);
fclose ($commande);
fclose ($fac);

 echo "<script type='text/javascript'>
alert('OPERATION REUSSITE');


</script>";
}
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
<p> Nom</p>
<input type="text" name="nom">
<p>Prenom</p>
<input type="text" name="prenom">
<p> Adresse</p>
<input type="text" name="adresse">
<p>Telephone</p>
<input type="number"  name="telephone">
<br><br>
</center>
</div>
<div id="achat">
<center>
<p> Ordinateur</p>
<input type="number" name="ordinateur">
<p>Imprimante</p>
<input type="number" name="imprimante">
<p> Scanner</p>
 <input type="number" name="scanner">
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
</body>
</html>



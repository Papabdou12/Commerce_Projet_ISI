<?php
if(isset($_POST['submit']))
{
$ordinateur=htmlentities(trim($_POST['ordinateur']));
$imprimante=htmlentities(trim($_POST['imprimante']));
$scanner=htmlentities(trim($_POST['scanner']));




$date = date("d-m-Y");
$heure = date("H:i");

                                                $charge="PARTICULIER".";".ordinateur." ;".$imprimante." ;".$scanner." ;".$telephone."\n";
                                              


if ($ordinateur>= 0 && $imprimante>=0 && $scanner>=0 )
{
$client=fopen('stockee.csv','a');

fwrite($stocke,$charge);

fclose ($charge);


}
else
echo "Veiller entrer de bonnes valeurs!";
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
<p> Ordinateur</p>
<input type="text" name="ordinateur">
<p>Imprimante</p>
<input type="text" name="imprimante">
<p> Scanner</p>
<input type="text" name="scanner">

<br><br>
</center>
</div>
<div id="achat">
<center>

</center>
</div>

</div>
<div id= "valider">

<input type="submit"   value="Valider" name="submit">
</div>
</form>
 
 


</body>
</html>



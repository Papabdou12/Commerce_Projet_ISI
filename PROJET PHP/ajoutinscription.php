<?php
if(isset($_POST["Envoyer"]))
{
if($_POST["nom"]&&$_POST["prenom"]&&$_POST["login"]&&$_POST["password"])
{
	$n=$_POST["nom"];
	$p=$_POST["prenom"];
	$l=$_POST["login"];
	$pass=$_POST["password"];
	
	$ch=$n.";".$p.";".$l.";".$pass."\n";
	
	$f=fopen("user.csv","a");
	fwrite($f,$ch);
	fclose($f);
	die ("Inscription Terminee");
	header("location:inscription.php?ok=1");
	
}
else"Remplir";
}
else{
	header("location:inscription.php");
}
?>
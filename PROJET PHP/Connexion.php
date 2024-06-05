<?php
if(isset($_POST["Connecter"]))
{
	$l=$_POST["login"];
	$p=$_POST["password"];
	$f=fopen("user.csv","r");
	$bool=false;
	while($row=fgetcsv($f,1000,";"))
	{
		if($l==$row[2] && $p==$row[3])
			$bool=true;
				$ch=$row[0].";".$row[1]."\n";
				             	$nom=$row[0];$prenom=$row[1];
	}
	if($bool==true)
	{
	
		$ff=fopen("tmp.csv","w");
		fwrite ($ff,$ch);
		$date= date("d-m-Y");
      $heure= date("H:i");
	                         $info=$nom.";".$prenom.";".$date.";".$heure."\n";
		$fff=fopen("connexion.csv","a");
		fwrite ($fff,$info);
		header("location:choix.php");
		}
	else
	{
		$date= date("d-m-Y");
      $heure= date("H:i");
		$chr=$l.";".$p.";".$date.";".$heure."\n";
			$fff=fopen("listerouge.csv","a");
		fwrite ($fff,$chr);
	
		die ('VOUS AVEZ TENTER DE VIOLER LA BASE.VOTRE NOM FIGURE DESORMAIS SUR LA LISTE ROUGE');
}
}
else
{
	header("location:index.php");

}
?>
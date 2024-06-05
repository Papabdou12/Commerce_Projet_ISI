
 <?php
if(isset($_POST["submit"]))
{
if( 	$_POST["login"] &&$_POST["password"])
{
	$l=$_POST["login"];
	$p=$_POST["password"];
	$f=fopen("user.csv","r");
	$bool=false;
	while($row=fgetcsv($f,1000,";"))
	{
		if($l==$row[2] && $p==$row[3])
			$bool=true;
	}
	if($bool==true)
		header("location:choix.php");
	else
		header("location:choix.php");
			fclose($f);
}
else echo "Veiller Remplir tous les champs";
}
else
{
	header("location:choix.php");
}
?>
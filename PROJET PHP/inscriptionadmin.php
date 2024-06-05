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
	
	$f=fopen("admin.csv","a");
	fwrite($f,$ch);
	fclose($f);
	die ("Inscription Terminee");
	header("location:inscriptionadmin.php?ok=1");
	
}
else"Remplir";
}

?>



<!doctype html> 
<html>
	<head>
		<title>formulaire</title>
		<link rel="stylesheet"  href="login.css"/>
	</head>
	<body  >
		<form method="POST" action="">
			<fieldset><legend align="center">INSCRIPTION</legend>
				<table border=0 cellpadding="10" cellspacing="5">
					<tr>
						<td>Nom</td>
						<td><input type="text" size="25" required  name="nom"/></td>
					</tr>
					<tr>
						<td>Prenom</td>
						<td><input type="text" size="25" required name="prenom"/></td>
					</tr>
					<tr>
						<td>Login</td>
						<td><input type="text" size="25" required name="login"/></td>
					</tr>
					<tr>
						<td>Mot de passe</td>
						<td><input type="password" name="password"/></td>
					</tr>
					<tr>
						<td><input type="submit" value="Envoyer" name="Envoyer"/></td>
						<td><input type="reset" value="annuler" name="annuler"/></td>
							<td><input type="reset" name="Revenir au Menu"/></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</body>
</html>
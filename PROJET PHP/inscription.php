<!doctype html> 
<html>
	<head>
		<title>formulaire</title>
		<link rel="stylesheet"  href="login.css"/>
	</head>
	<body  >
		<form method="POST" action="ajoutinscription.php">
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
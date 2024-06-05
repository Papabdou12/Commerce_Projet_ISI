
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Supprimer Commande</title>
  <link rel="stylesheet" type="text/css" href="../css/style_prod.css">




</head>
<?php
include('../connexionBD.php');

function supprimer_commande($ref){
mysql_query("DELETE FROM commande where num_commande=$ref;") or die(mysql_error());
header('location:../commandes.php');
}

if(isset($_POST['supprimer'])){
supprimer_commande($_POST['num_cmd']);
}



?>

<body>

	<ul class="menu cf">
    <li><a href="../index.php">Page d'acceuil </a></li>
    <li>
        <a href="../clients.php">Clients</a>
        <ul class="submenu">
            <li><a href="ajoute_client.php">Ajouter</a></li>
            <li><a href="rechercher_client.php">Rechercher</a></li>
            <li><a href="supprimer_client.php">Supprimer</a></li>
            <li><a href="modifier_client.php">Modifier</a></li>
        </ul>         
    </li>
    
    <li>
        <a href="../produits.php">Produits</a>
        <ul class="submenu">
            <li><a href="ajoute_produit.php">Ajouter</a></li>
            <li><a href="rechercher_produit.php">Rechercher</a></li>
            <li><a href="supprimer_produit.php">Supprimer</a></li>
            <li><a href="modifier_produit.php">Modifier</a></li>
        </ul>         
    </li>

    <li>
        <a href="../commandes.php">Commandes</a>
        <ul class="submenu">
            <li><a href="ajoute_cmd.php">Ajouter</a></li>
            <li><a href="rechercher_cmd.php">Rechercher</a></li>
            <li><a href="supprimer_cmd.php">Supprimer</a></li>
            <li><a href="modifier_cmd.php">Modifier</a></li>
        </ul>              
    </li>

    <li>
        <a href="../details_commande.php">Details Commandes</a>
     <ul class="submenu">
            <li><a href="ajoute_det_cmd.php">Ajouter</a></li>
            <li><a href="rechercher_det_cmd.php">Rechercher</a></li>
            <li><a href="supprimer_det_cmd.php">Supprimer</a></li>
            <li><a href="modifier_det_cmd.php">Modifier</a></li>
        </ul>  
          
    </li>
        <li>
        <a href="../statistiques.php">Statistiques</a>
           
    </li> 
  
</ul>



            <form method="POST" action="">
              <div id="formulaire">
<table>
<tr>
  <td><label>Numero Commande :</label></td>
<td><input type="texte" name="num_cmd" required></td>
</tr>

<tr>
          <td>  <input type="submit" value="supprimer" class="myButton" name="supprimer"></td>
         
</tr>

</table>

</div>
          
            </form>





</body>
</html>







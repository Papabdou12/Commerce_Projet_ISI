

<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Ajoute Details Commande</title>
  <link rel="stylesheet" type="text/css" href="../css/style_prod.css">




</head>
<?php

include('../connexionBD.php');
//include('fonction_ajoute_suppression/ajoute_suppression_det_cmd.php');



if(isset($_POST['ajoute'])){

//$ref=$_POST['num_ref'];

ajoute_d_commande($_POST['num_cmd'],$_POST['ref_produit'],$_POST['qte_commande']);
//die('La Commande a ete bien ajouter , vous pouvez vous <a href=\'commandes.php\'> revenir</a>');


}

function ajoute_d_commande($nc,$r,$q){
	
mysql_query("INSERT INTO details_commande(num_commande,ref_produit,qte_commande) VALUES($nc,$r,$q);") or die(mysql_error());
header('location:../details_commande.php');
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
<td><input type="texte" name="num_cmd"></td>
</tr>

<tr>
  <td><label>Refference Produit :</label></td>
<td><input type="texte" name="ref_produit" required></td>

</tr>

<tr>
  <td><label>Quantite Commandé</label></td>
<td><input type="texte" name="qte_commande" required></td>

</tr>

<tr>
          <td>  <input type="submit" value="Ajouter" class="myButton" name="ajoute"></td>
   

</tr>

</table>

</div>
          
            </form>



</body>
</html>








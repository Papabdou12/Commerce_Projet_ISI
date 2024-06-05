
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Recherche Produit</title>
  <link rel="stylesheet" type="text/css" href="../css/style_prod.css">


</head>

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
  <td><label>Refference de produit : </label></td>
<td><input type="texte" name="ref_produit" required></td>
</tr>
<tr>
    <td>  <input type="submit" value="rechercher" class="myButton" name="rechercher"></td>
</tr>
</table>
</form>
                      
                      <?php
                         include('../connexionBD.php');
                               if(isset($_POST['rechercher'])){


                                ?>
                                    <div class="CSSTableGenerator" >
                                  <table >              
                                     <tr>
                    
                            <td >
                        Refference de Produit
                        </td>
                        <td>
                        Nom de Produit
                        </td>
                        <td>
                          Prix Unitaire
                        </td>
                         <td>
                          Quantite Stocké
                        </td>
                         <td>
                         Indisponible
                        </td>
                    </tr>


                                <?php
                               $ref=$_POST['ref_produit'];

                         $query = "SELECT * FROM produit where ref_produit=$ref";
                     if ($result = mysql_query($query)) {
                           /* Récupère un tableau associatif */
                    while ($row = mysql_fetch_assoc($result)) {    
                      ?>
                        <tr>
                          <td>
                         <?php echo $row["ref_produit"];?>
                       </td>

                       <td>
                         <?php echo $row["nom_produit"];?>
                       </td>

                       <td>
                         <?php echo $row["prix_unitaire"];?>
                       </td>
                       <td>
                         <?php echo $row["qte_stocke"];?>
                       </td>
                       <td>
                         <?php echo $row["indisponible"];?>
                       </td>
                        </tr>
                        <?php }
     mysql_free_result($result);
     mysql_close ();
}
}
?>

                </table>


            </div>
            </form>






</body>



</html>






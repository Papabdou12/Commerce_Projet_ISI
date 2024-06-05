

<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Produits</title>
  <link rel="stylesheet" type="text/css" href="css/style_prod.css">




</head>


<body>

  <ul class="menu cf">
    <li><a href="index.php">Page d'acceuil </a></li>
    <li>
        <a href="clients.php">Clients</a>
        <ul class="submenu">
            <li><a href="fonction_ajoute_suppression/ajoute_client.php">Ajouter</a></li>
            <li><a href="fonction_ajoute_suppression/rechercher_client.php">Rechercher</a></li>
            <li><a href="fonction_ajoute_suppression/supprimer_client.php">Supprimer</a></li>
            <li><a href="fonction_ajoute_suppression/modifier_client.php">Modifier</a></li>
        </ul>         
    </li>
    
    <li>
        <a href="produits.php">Produits</a>
        <ul class="submenu">
            <li><a href="fonction_ajoute_suppression/ajoute_produit.php">Ajouter</a></li>
            <li><a href="fonction_ajoute_suppression/rechercher_produit.php">Rechercher</a></li>
            <li><a href="fonction_ajoute_suppression/supprimer_produit.php">Supprimer</a></li>
            <li><a href="fonction_ajoute_suppression/modifier_produit.php">Modifier</a></li>
        </ul>         
    </li>

    <li>
        <a href="commandes.php">Commandes</a>
        <ul class="submenu">
            <li><a href="fonction_ajoute_suppression/ajoute_cmd.php">Ajouter</a></li>
            <li><a href="fonction_ajoute_suppression/rechercher_cmd.php">Rechercher</a></li>
            <li><a href="fonction_ajoute_suppression/supprimer_cmd.php">Supprimer</a></li>
            <li><a href="fonction_ajoute_suppression/modifier_cmd.php">Modifier</a></li>
        </ul>              
    </li>

    <li>
        <a href="details_commande.php">Details Commandes</a>
     <ul class="submenu">
            <li><a href="fonction_ajoute_suppression/ajoute_det_cmd.php">Ajouter</a></li>
            <li><a href="fonction_ajoute_suppression/rechercher_det_cmd.php">Rechercher</a></li>
            <li><a href="fonction_ajoute_suppression/supprimer_det_cmd.php">Supprimer</a></li>
            <li><a href="fonction_ajoute_suppression/modifier_det_cmd.php">Modifier</a></li>
        </ul>        
    </li>
     <li>
        <a href="statistiques.php">Statistiques</a>
           
    </li>
  
</ul>

  <div class="CSSTableGenerator" >
                <table >              
                    <tr>
                    
                        <td >
                        Reference 
                        </td>
                        <td>
                         nom produit
                        </td>
                        <td>
                          prix unitaire
                        </td>
                        <td>
                          Quantite stocke
                        </td>
                        <td>
                          indisponible
                        </td>
                    </tr>


                      

                      <?php
                         include('connexionBD.php');
                         $query = "SELECT * FROM produit ";
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

?>

                    

               
                  



                </table>


            </div>
           


</body>



</html>
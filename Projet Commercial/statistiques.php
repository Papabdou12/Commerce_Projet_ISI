

<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Statistiques</title>
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
                       Nombre de Client 
                        </td>
                        <td>
                       Nombre de Produits
                        </td>
                        <td>
                         Nombre de Commandes
                        </td>
                        <td>
                         Nombre de details commandes
                        </td>
                       
                    </tr>


                      

                    
                        <tr>
                          <td>
                     
                     <?php  include('connexionBD.php');
  
             
                       $result = mysql_query('SELECT COUNT(*) FROM client');
                       $num_rows = mysql_result($result, 0, 0);
                        echo "$num_rows Clients disponible";
                      ?>
                      </td>

                      
                        
                          <td>

                     <?php  include('connexionBD.php');
  
             
                       $result = mysql_query('SELECT COUNT(*) FROM produit');
                       $num_rows = mysql_result($result, 0, 0);
                        echo "$num_rows Produits disponible";
                      ?>


                        
                       </td>

                       <td>

                     <?php  include('connexionBD.php');
  
             
                       $result = mysql_query('SELECT COUNT(*) FROM commande');
                       $num_rows = mysql_result($result, 0, 0);
                        echo "$num_rows Commandes disponible";
                      ?>

                        
                       </td>

                       <td>
                        <?php  include('connexionBD.php');
  
             
                       $result = mysql_query('SELECT COUNT(*) FROM details_commande');
                       $num_rows = mysql_result($result, 0, 0);
                        echo "$num_rows details Commandes disponible";
                      ?>
                         
                       </td>

                      
                        </tr>
 
                </table>


            </div>
           


</body>



</html>
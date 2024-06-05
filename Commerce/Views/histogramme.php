<?php
			       require_once'../Model/Ventedao.php';
			       $result = getventeparprod();
             $i=0;
           while($tab = mysqli_fetch_row($result)) 
           {

            $montant[$i]=$tab[1];
            $i++;
           }
	
  $valeurs =$montant;

  header("Content-type: image/png");
  
  $largeur = 1000;
  $hauteur = 500;
  $img = imageCreate($largeur, $hauteur);
  $rouge         = imageColorAllocate($img, 200, 100, 100);
  $noir          = imageColorAllocate($img,   0,   0,   0);
  $fond          = imageColorAllocate($img, 0, 0, 240);
  $barreCouleur  = imageColorAllocate($img,   255, 255,   255);
  //imagecolortransparent($im,$rouge);
  
  $titre       = "HISTOGRAMME DES VENTES";
  $titrePolice = 5;
  imageString($img, $titrePolice,
              ($largeur-ImageFontWidth($titrePolice)*strlen($titre))/2,
              0, $titre, $noir);
  //imageTTFText($im, 15, 90, $largeur-10, $hauteur-10, $noir, "Gigi.ttf",
  //           "Copyright PHP Facile !");

  // Tracé du fond de l'histogramme
  imageFilledRectangle($img, 20, 20, $largeur-25, $hauteur-10, $fond);

  // Connaissant le nombre de barres = sizeOf($valeurs) 
  // et la largeur de l'image (en tenant compte des bords)
  // il est possible de déterminer la largeur d'une barre
  $barreLargeur = (int)(($largeur-35)/(1.5*sizeOf($valeurs)+0.5));

  // Pour ajuster l'échelle (en hauteur) il faut déterminer
  // la plus grande valeur du tableau
  $max = 0;
  for ($i=0; $i<sizeOf($valeurs); $i++) {
    if ($valeurs[$i]>$max) $max = $valeurs[$i];
  }
  
  // Nous avons toutes les informations nécessaire
  // il est alors possible de tracer toutes les barres
  for ($i=0; $i<sizeOf($valeurs); $i++) {
    $x = 10+(int)($barreLargeur*(0.5+$i*1.5));
    $barreHauteur = (int)(($valeurs[$i]*($hauteur-40))/$max);  

    imageFilledRectangle($img, $x, 
                         $hauteur-15-$barreHauteur,
                         $x+$barreLargeur,
                         $hauteur-15,
                         $barreCouleur);
  }
  
  imagePNG($img);
  imageDestroy($img);  

?> 
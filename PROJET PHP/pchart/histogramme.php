<?php

	
			$f=fopen("../stoque.csv","r");
			$imp=0;$ordi=0;$scann=0;          
			while($tab=fgetcsv($f,1500,";"))
				{
				
					
				$ordi=$ordi+$tab[0];                            
				$scann=$scann+$tab[1];
					$imp=$imp+$tab[2];

				}
				
			fclose($f);
				$f=fopen("../facturemag.csv","r");
			$impm=0;$ordim=0;$scannm=0;          
			while($tab2=fgetcsv($f,1500,";"))
				{
				
					
				$ordim=$ordim+$tab2[7];                            
				$scannm=$scannm+$tab2[8];
					$impm=$impm+$tab2[9];

				}
				
			fclose($f);
			
  		$f=fopen("../commande.csv","r");
			$impma=0;$ordima=0;$scannma=0;          
			while($tab3=fgetcsv($f,1500,";"))
				{
				
				$ordima=$ordima+$tab3[7];                            
				$scannma=$scannma+$tab3[8];
					$impma=$impma+$tab3[9];
	
				}
				
			fclose($f);
  
 /* CAT:Bar Chart */

 /* pChart library inclusions */
 include("class/pData.class.php");
 include("class/pDraw.class.php");
 include("class/pImage.class.php");

 /* Create and populate the pData object */
 $MyData = new pData();  
 $MyData->loadPalette("palettes/blind.color",TRUE);
 $MyData->addPoints(array($ordi,$ordim,$ordima),"ORDINATEUR");
 $MyData->addPoints(array($scann,$scannm,$scannma),"IMPRIMANTE");
  $MyData->addPoints(array($imp,$impm,$impma),"SCANNER");
 $MyData->setAxisName(0,"UNITES");
 $MyData->addPoints(array("STOQUE","VENTES","COMMANDE"),"Months");
 $MyData->setSerieDescription("SECTEUR","Month");
 $MyData->setAbscissa("Months");

 /* Create the floating 0 data serie */
 $MyData->addPoints(array(0,0,0),"Floating 0");
 $MyData->setSerieDrawable("Floating 0",FALSE);

 /* Create the pChart object */
 $myPicture = new pImage(700,230,$MyData);
 $myPicture->drawGradientArea(0,0,700,230,DIRECTION_VERTICAL,array("StartR"=>240,"StartG"=>240,"StartB"=>240));
 $myPicture->drawGradientArea(0,0,700,230,DIRECTION_HORIZONTAL,array("StartR"=>240,"StartG"=>240,"StartB"=>240));
 $myPicture->setFontProperties(array("FontName"=>"fonts/pf_arma_five.ttf","FontSize"=>7.5));

 /* Draw the scale  */
 $myPicture->setGraphArea(50,30,680,200);
 $myPicture->drawScale(array("CycleBackground"=>TRUE,"DrawSubTicks"=>TRUE,"GridR"=>0,"GridG"=>0,"GridB"=>0,"GridAlpha"=>10));

 /* Turn on shadow computing */ 
 $myPicture->setShadow(TRUE,array("X"=>11,"Y"=>1,"R"=>25,"G"=>25,"B"=>25,"Alpha"=>60));

 /* Draw the chart */
 $settings = array("Floating0Serie"=>"Floating 0","Draw0Line"=>TRUE,"Gradient"=>TRUE,"DisplayPos"=>LABEL_POS_INSIDE,"DisplayValues"=>TRUE,"DisplayR"=>255,"DisplayG"=>255,"DisplayB"=>255,"DisplayShadow"=>TRUE,"Surrounding"=>100);
 $myPicture->drawBarChart($settings);

 /* Write the chart legend */
 $myPicture->drawLegend(260,220,array("Style"=>LEGEND_NOBORDER,"Mode"=>LEGEND_HORIZONTAL));

 /* Render the picture (choose the best way) */
 $myPicture->autoOutput("examples/pictures/example.drawBarChart.floating.png");
?>


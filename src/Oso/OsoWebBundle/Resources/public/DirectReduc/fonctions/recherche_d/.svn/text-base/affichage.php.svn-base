<?php
	echo "il y a $nombredAnnonce d'annonces qui corresponde à vos critères <BR/>
	annonces : ".($premiereAnn+1)." - $dernierAnn";
	$cpt = 0; // on initialise le compteur qui sera en faite l'index de l'enregistrement on nous seront positionné
	while($resuReq4)
	{
		if ( $cpt < $dernierAnn && $cpt >= $premiereAnn)
		{	
			if ( $cpt != $dernierAnn && $cpt != $premiereAnn)
			{
				echo '<hr noshade style="width:300px; height:1px; margin-top: 40px; border-color: #ff8c00;"><br />';
			}	
			aff_annonce($resuReq4);
		}
		$cpt++;
		$resuReq4=mysql_fetch_array($exReq4);
	}
?>

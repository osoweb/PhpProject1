<?php
	echo '<center>';
	echo '<TABLE>';
	echo '<TR>';
	
	echo '<TD style="padding-top:0px;">Page :</TD> ';
	for ($j = 1 ; $j <= $nombrePage ; $j++)
	{	
		echo '<TD>';
		if ( $j > ($page - 10) && $j < ($page + 10) && $j != $page )
		{
		if($j > 1)
		{
			$p=$j-1;
		}
		else
		{
			$p=$j;
		}
		echo '<form name="elements'.$j.'" id="elements'.$j.'" method="POST" action="'.chaine_titre($mot_cle).'_'.$type_prod.'-recherche_detail-2.html">
					<span id="rd" >
					<INPUT TYPE=HIDDEN NAME="mot" VALUE="'.$mot_cle.'">
					<INPUT TYPE=HIDDEN NAME="type_produit" VALUE="'.$type_prod.'">
					<INPUT TYPE=HIDDEN NAME="regi" VALUE="'.$region.'">
					<INPUT TYPE=HIDDEN NAME="depart" VALUE="'.$departement.'">
					<INPUT TYPE=HIDDEN NAME="ville" VALUE="'.$ville.'">
					<INPUT TYPE=HIDDEN NAME="vendeur" VALUE="'.$type_vend.'">
					<INPUT TYPE=HIDDEN NAME="typeAnnonce"  VALUE="'.$type_ann.'">
					<INPUT TYPE=HIDDEN NAME="photo" VALUE="'.$photo.'">
					<INPUT TYPE=HIDDEN NAME="date" VALUE="'.$fraicheur.'">
					<INPUT TYPE=HIDDEN NAME="prixmin" VALUE="'.$prix_min.'">
					<INPUT TYPE=HIDDEN NAME="prixmax" VALUE="'.$prix_max.'">
					<INPUT TYPE=HIDDEN NAME="annonce" VALUE="'.$j.'">';
		
		if($sousCategImmo)
		{
			echo '  <INPUT TYPE=HIDDEN NAME="nbPieceMin" VALUE="'.$nbPieceMin.'">
					<INPUT TYPE=HIDDEN NAME="nbPieceMax" VALUE="'.$nbPieceMax.'">
					<INPUT TYPE=HIDDEN NAME="nbChambreMini" VALUE="'.$nbChambreMini.'">
					<INPUT TYPE=HIDDEN NAME="nbChambremax" VALUE="'.$nbChambremax.'">
					<INPUT TYPE=HIDDEN NAME="surfHabMini" VALUE="'.$surfHabMini.'">
					<INPUT TYPE=HIDDEN NAME="surfHabMax" VALUE="'.$surfHabMax.'">
					<INPUT TYPE=HIDDEN NAME="surfTerMini" VALUE="'.$surfTerMini.'">
					<INPUT TYPE=HIDDEN NAME="surfTerMax" VALUE="'.$surfTerMax.'">
					<INPUT TYPE=HIDDEN NAME="nbEtageMini" VALUE="'.$nbEtageMini.'">
					<INPUT TYPE=HIDDEN NAME="nbEtageMax" VALUE="'.$nbEtageMax.'">
					<INPUT TYPE=HIDDEN NAME="anneConsMini" VALUE="'.$anneConsMini.'">
					<INPUT TYPE=HIDDEN NAME="anneConsMax" VALUE="'.$anneConsMax.'">';
		}
		if($sousCategVoit)
		{
			echo '  <INPUT TYPE=HIDDEN NAME="kiloVoitMin" VALUE="'.$kiloVoitMin.'">
			        <INPUT TYPE=HIDDEN NAME="kiloVoitMax" VALUE="'.$kiloVoitMax.'">
					<INPUT TYPE=HIDDEN NAME="energie_voit" VALUE="'.$energie_voit.'">
			        <INPUT TYPE=HIDDEN NAME="boite_vitesse" VALUE="'.$boite_vitesse.'">
			        <INPUT TYPE=HIDDEN NAME="anneMise" VALUE="'.$anneMise.'">';
		}
		/*  if($sousCategMedia)
		{
		    echo '<INPUT TYPE=HIDDEN NAME="marque"  VALUE="'.$marque.'">'
		}  */
		echo'<a href="#" onClick="envoi_page(\''.$mot_cle.'\','.$type_prod.','.$j.')" > ' . $j . ' </a></span>
					</form>';
		}
		else
		{
			if ($j == $page)
			{
				echo ' <span style="font-size: 2em; background-color: #006090; color : white;" > '.$j.'</span> ';
			}
		}
		echo '</TD>';
	}	
	echo '</TR>';
	echo '</TABLE>';
	
	echo '</center>';
?>
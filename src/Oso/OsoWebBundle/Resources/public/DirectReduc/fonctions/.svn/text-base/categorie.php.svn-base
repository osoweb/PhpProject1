<?php


$req1="SELECT * FROM `type_offre`;";
 $exReq1=mysql_query($req1) or die("requete 1 invalide : " . mysql_error());
 
 //nombre de rubrik en trop   
 $rest_rub=mysql_num_rows($exReq1);
 //nombre de colonne afficher
 $nb_col=3;
 //nb de rubrik en plus par colonne
 $nb_rub_col=0;
 while ( ($rest_rub-$nb_col) >= 1)
 {
	$rest_rub=$rest_rub-$nb_col;
	$nb_rub_col++;
 }
 
 echo '<form id="recherche" action="recherche_detail.html" name="rech" method="POST" style="display:inline;">';
 
 echo '<table width="90%">';
 echo '<TD valign="top">';
 $rubriq_colonne=0;
while($resuReq1=mysql_fetch_array($exReq1))
	{
		 echo '<input type="hidden" id="type_produit" value="" />';
		if($rest_rub>0)
			$id=1;
		else
			$id=0;
		
		if($rubriq_colonne==($nb_rub_col+$id))
		{
			echo '<TD valign="top">';
			$rubriq_colonne=0;
			$rest_rub--;
		}

		// javascript:document.rech.submit();
//  onclick="document.getElementById(\"type_produit\").value=\"1\"; alert(document.getElementById(\"type_produit\").value); "

		echo '<fieldset>';
		echo '<legend>';
		echo '<a href="#" onclick="document.getElementById(\'type_produit\').value=\''.$resuReq1['TYPE_OFFRE_ID'].'\'; document.getElementById(\'recherche\').action=\''.chaine_titre($resuReq1['TYPE_OFFRE_LIBELLE']).'-recherche_detail-1.html\'; javascript:document.getElementById(\'recherche\').submit(); ">'.$resuReq1['TYPE_OFFRE_LIBELLE']."</a>";
		//echo '<a href="index.html">'.$resuReq1['TYPE_OFFRE_LIBELLE']."</a>";
		echo "</legend>";
		$req2="SELECT * FROM `type_ss_offre` WHERE TYPE_OFFRE_ID = ' ".$resuReq1['TYPE_OFFRE_ID']."';";
		$exReq2=mysql_query($req2) or die("requete 2 invalide : " . mysql_error());

		while($resuReq2=mysql_fetch_array($exReq2))
		{
			echo '<a href="#" onclick="document.getElementById(\'type_produit\').value=\''.$resuReq2['TYPE_SS_OFFRE_ID'].'\';           document.getElementById(\'recherche\').action=\''.chaine_titre($resuReq2['TYPE_SS_OFFRE_LIBELLE']).'-recherche_detail-1.html\'; javascript:document.getElementById(\'recherche\').submit(); ">'.$resuReq2['TYPE_SS_OFFRE_LIBELLE']."</a><br/>";
			//echo '<a href="index.html">'.$resuReq2['TYPE_SS_OFFRE_LIBELLE'].'</a><br/>';
	     }
		 echo '</fieldset>';
		 
		if($rubriq_colonne==($nb_rub_col+$id-1))
		{
			echo '</TD>';
		}
		 
		 $rubriq_colonne++;
	}
echo '</table>';
echo '<input type="hidden" name="page" value="recherche">';
echo '</form>';
?>
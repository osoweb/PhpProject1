<?php
	$req4='SELECT * FROM `offres`';
	$req4=  $req4.'WHERE `OFFRE_STATUT` > 0 '; // l'annonce doit etre valide.

	if ($mot_cle != '' ) //si l'utilisateur a mis un mot cl�s.
	{
		$req4=  $req4." AND (`OFFRE_TITRE` LIKE '%".ucfirst($mot_cle)."%'  OR `OFFRE_TITRE` LIKE '%".strtoupper($mot_cle)."%'  OR `OFFRE_TITRE` LIKE '%".mb_strtolower($mot_cle)."%'  ) "; // on selectionne les annonces comportant le mot ou la phrase qu'il a tap�.
	}

	
	if ($type_prod != 0) // si l'utilisateur a spr�cifi� un domaine particulier.
	{

		if($type_prod < 10)  // dans le cas o� c'est type d'offre (ex: multim�dia).
		{
			$req4=  $req4." AND `OFFRE_TYPE` IN ( SELECT TYPE_SS_OFFRE_ID FROM `type_ss_offre` WHERE TYPE_OFFRE_ID = ".$type_prod.") ";
		}

		else // dans le cas o� c'est un sous-type (ex: console vid�o).
		{
			$req4=  $req4."  AND  `OFFRE_TYPE` = ".$type_prod;
		}
	}
	
	// localisation de l'offre
	if($ville == 0) // cas l'utilisateur n'a pas sp�cifier de ville alors
	{
		if( $departement == 0) // on teste si il pr�cis� un d�partement sinon
		{
			if($region != 99) // une region
			{
				$req4=  $req4." AND `UTIL_ID` IN ( SELECT UTIL_ID FROM `utilisateur` WHERE `ID_VILLE` IN (SELECT `ID_VILLE` FROM ville WHERE ID_DEPT IN ( SELECT ID_DEPT FROM departement WHERE ID_REG =".$region." ) ) )";
			}	
		}
		else
		{
			$req4=  $req4." AND `UTIL_ID` IN ( SELECT `UTIL_ID` FROM `utilisateur` WHERE `ID_VILLE` IN (SELECT ID_VILLE FROM ville WHERE ID_DEPT = ".$departement." ) )";
		}
	}
	else
	{
		$req4=  $req4." AND UTIL_ID IN ( SELECT UTIL_ID FROM `utilisateur` WHERE ID_VILLE = ".$ville." )";
	}
	
	// si l'utilisateur veut qu'il ait au moin une photo
	if ($photo == 1)
	{
		$req4=  $req4." AND OFFRE_PHOTO != '' ";
	}
	
	// type de l'annonce
	if ($type_ann != 0)
	{
				$req4=  $req4." AND OFFRE_DEMANDE =".$type_ann;
	}
	
	// type de vendeur 
	if ( $type_vend != 0)
	{
		$req4=  $req4." AND UTIL_ID IN ( SELECT UTIL_ID FROM `utilisateur` WHERE UTIL_TYPE = ".$type_vend." )";
	}
	
	// prix
	if ( $prix_min != 0 && $prix_max != 0 )
	{
		$req4=  $req4." AND OFFRE_PRIX BETWEEN ".$prix_min." AND ".$prix_max;
	}
	else
	{
		if ( $prix_min != 0 )
		{
			$req4=  $req4." AND OFFRE_PRIX >= ".$prix_min;
		}
		if ($prix_max != 0)
		{
			$req4=  $req4." AND OFFRE_PRIX <= ".$prix_max;
		}				
	}
	//date 
	if ($fraicheur != 0)
	{
		if ($fraicheur == 3)
		{
			$req4=  $req4." AND OFFRE_DATE = ".$date;
		}
		else
		{
			$req4=  $req4." AND OFFRE_DATE BETWEEN '".$date."' AND '".$d->aujourdhui()."'";
		}
	
	}
	//
	if($sousCategImmo)
	{
		
		if ( $nbPieceMin != 0 && $nbPieceMax != 0 )
		{
			$req4=  $req4." AND OFFRE_ID IN ( SELECT id_offre FROM immobilier WHERE nb_piece BETWEEN ".$nbPieceMin." AND ".$nbPieceMax.")";
		}
		else
		{
			if ( $nbPieceMin != 0 )
			{
				$req4=  $req4." AND OFFRE_ID IN ( SELECT id_offre FROM immobilier WHERE nb_piece >= ".$nbPieceMin.")";
			}
			if ($nbPieceMax != 0)
			{
				$req4=  $req4." AND OFFRE_ID IN ( SELECT id_offre FROM immobilier WHERE nb_piece <= ".$nbPieceMax.")";
			}
		}
		
		if ( $nbChambreMini != 0 && $nbChambremax != 0 )
		{
			$req4=  $req4." AND OFFRE_ID IN ( SELECT id_offre FROM immobilier WHERE nb_chambre BETWEEN ".$nbPieceMin." AND ".$nbPieceMax.")";
		}
		else
		{
			if ( $nbChambreMini != 0 )
			{
				$req4=  $req4." AND OFFRE_ID IN ( SELECT id_offre FROM immobilier WHERE nb_chambre >= ".$nbChambreMini.")";
			}
			if ($nbChambremax != 0)
			{
				$req4=  $req4." AND OFFRE_ID IN ( SELECT id_offre FROM immobilier WHERE nb_chambre <= ".$nbChambremax.")";
			}
		}
		
		if ( $surfHabMini != 0 && $surfHabMax != 0 )
		{
			$req4=  $req4." AND OFFRE_ID IN ( SELECT id_offre FROM immobilier WHERE surf_hab BETWEEN ".$surfHabMini." AND ".$surfHabMax.")";
		}
		else
		{
			if ( $surfHabMini != 0 )
			{
				$req4=  $req4." AND OFFRE_ID IN ( SELECT id_offre FROM immobilier WHERE surf_hab >= ".$surfHabMini.")";
			}
			if ($surfHabMax != 0)
			{
				$req4=  $req4." AND OFFRE_ID IN ( SELECT id_offre FROM immobilier WHERE surf_hab <= ".$surfHabMax.")";
			}
		}
				
		if ($surfTerMini != 0 && $surfTerMax != 0 )
		{
			$req4=  $req4." AND OFFRE_ID IN ( SELECT id_offre FROM immobilier WHERE surf_ter BETWEEN ".$surfTerMini." AND ".$surfTerMax.")";
		}
		else
		{
			if ( $surfTerMini != 0 )
			{
				$req4=  $req4." AND OFFRE_ID IN ( SELECT id_offre FROM immobilier WHERE surf_ter >= ".$surfTerMini.")";
			}
			if ($surfTerMax != 0)
			{
				$req4=  $req4." AND OFFRE_ID IN ( SELECT id_offre FROM immobilier WHERE surf_ter <= ".$surfTerMax.")";
			}
		}	
		
		if ( $nbEtageMini != 0 && $nbEtageMax != 0 )
		{
			$req4=  $req4." AND OFFRE_ID IN ( SELECT id_offre FROM immobilier WHERE nb_etage BETWEEN ".$nbEtageMini." AND ".$nbEtageMax.")";
		}
		else
		{
			if ( $nbEtageMini != 0 )
			{
				$req4=  $req4." AND OFFRE_ID IN ( SELECT id_offre FROM immobilier WHERE nb_etage >= ".$nbEtageMini.")";
			}
			if ($nbEtageMax != 0)
			{
				$req4=  $req4." AND OFFRE_ID IN ( SELECT id_offre FROM immobilier WHERE nb_etage <= ".$nbEtageMax.")";
			}
		}
		
		if ( $anneConsMini != 0 && $anneConsMax != 0 )
		{
			$req4=  $req4." AND OFFRE_ID IN ( SELECT id_offre FROM immobilier WHERE annee_cons BETWEEN ".$nbEtageMini." AND ".$nbEtageMax.")";
		}
		else
		{
			if ( $anneConsMini != 0 )
			{
				$req4=  $req4." AND OFFRE_ID IN ( SELECT id_offre FROM immobilier WHERE annee_cons >= ".$anneConsMini.")";
			}
			if ($anneConsMax != 0)
			{
				$req4=  $req4." AND OFFRE_ID IN ( SELECT id_offre FROM immobilier WHERE annee_cons <= ".$anneConsMax.")";
			}
		}			
	}
	if($sousCategVoit)
	{
		if ( $kiloVoitMin != 0 && $kiloVoitMax != 0 )
		{
			$req4=  $req4." AND OFFRE_ID IN ( SELECT id_offre FROM voiture WHERE kilometrage_voit BETWEEN ".$kiloVoitMin." AND ".$kiloVoitMax.")";
		}
		else
		{
			if ( $kiloVoitMin != 0 )
			{
				$req4=  $req4." AND OFFRE_ID IN ( SELECT id_offre FROM voiture WHERE kilometrage_voit >= ".$kiloVoitMin.")";
			}
			if ($kiloVoitMax != 0)
			{
				$req4=  $req4." AND OFFRE_ID IN ( SELECT id_offre FROM voiture WHERE kilometrage_voit <= ".$kiloVoitMax.")";
			}
		}
		if ($energie_voit != 0)
		{
			$req4=  $req4." AND OFFRE_ID IN ( SELECT id_offre FROM voiture WHERE energie_voit = ".$energie_voit.")";
		}
		if ($boite_vitesse != 0)
		{
			$req4=  $req4." AND OFFRE_ID IN ( SELECT id_offre FROM voiture WHERE boite_voit = ".$boite_vitesse.")";
		}
		if ($anneMise != 0)
		{
			$req4=  $req4." AND OFFRE_ID IN ( SELECT id_offre FROM voiture WHERE boite_voit = ".$anneMise.")";
		}
		
	}
	$req4=  $req4." AND OFFRE_STATUT > 0 ORDER BY DATE_MISE_EN_VALEUR DESC, OFFRE_DATE ASC;";
?>
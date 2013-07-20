<?php
	function  verif_si_chaine($donnees)
	{
		$verif = true;
		$pattern = '`^[[:alnum:]]+$`';
		if (! preg_match ( $pattern, $donnees )) {
			$verif = false;
		}
		return $verif;
	}

	function verif_si_nb($donnees) 
	{
		$verif = true;
		$pattern = '`^[[:digit:]]+$`';
		if (! preg_match ( $pattern, $donnees )) {
			$verif = false;
		}
		return $verif;
	}

	function verif_si_annee($donnees) 
	{
		$verif = true;
		$pattern = '([0-9]{4})';
		if (! preg_match ( $pattern, $donnees )) {
			$verif = false;
		}
		return $verif;
	}
	
	$verif = true;
	if($mot_cle != "")
	{
		if (! verif_si_chaine( $mot_cle )) {
			$verif = false;
			$mot_cle = "";
			echo "le champ mot-clés n'accepte pas de signe de ponctuation<BR/>";
		}
	}
	if (! verif_si_nb ( $prix_min )) {
		$verif = false;
		$prix_min = 0;
		echo "le champ prix minimum n'accepte que des chiffres<BR/>";
	}
	if (! verif_si_nb ( $prix_max )) {
		$verif = false;
		$prix_max= 0;
		echo "le champ prix maximum n'accepte que des chiffres<BR/>";
	}
	if ($sousCategImmo) 
	{
		if (! verif_si_nb ( $nbPieceMin )) {
			$verif = false;
			$nbPieceMin = 0;
			echo "le champ nombre de pièce minimum n'accepte que des chiffres<BR/>";
		}
		if (! verif_si_nb ( $nbPieceMax )) {
			$verif = false;
			$nbPieceMax = 0;
			echo "le champ nombre de pièce maximum n'accepte que des chiffres<BR/>";
		}
		if (! verif_si_nb ( $nbChambreMini )) {
			$verif = false;
			$nbChambreMini = 0;
			echo "le champ nombre de chambre minimum n'accepte que des chiffres<BR/>";
		}
		if (! verif_si_nb ( $nbChambremax )) {
			$verif = false;
			$nbChambremax = 0;
			echo "le champ nombre de chambre maximum n'accepte que des chiffres<BR/>";
		}
		if (! verif_si_nb ( $surfHabMini )) {
			$verif = false;
			$surfHabMini = 0;
			echo "le champ surface habitable minimum n'accepte que des chiffres<BR/>";
		}
		if (! verif_si_nb ( $surfHabMax )) {
			$verif = false;
			$surfHabMax = 0;
			echo "le champ surface habitable maximum n'accepte que des chiffres<BR/>";
		}
		if (! verif_si_nb ( $surfTerMini )) {
			$verif = false;
			$surfTerMini = 0;
			echo "le champ surface terrain minimum n'accepte que des chiffres<BR/>";
		}
		if (! verif_si_nb ( $surfTerMax )) {
			$verif = false;
			$surfTerMax = 0;
			echo "le champ surface terrain maximum n'accepte que des chiffres<BR/>";
		}
		if (! verif_si_nb ( $nbEtageMini )) {
			$verif = false;
			$nbEtageMini  = 0;
			echo "le champ nombre d'étage minimum n'accepte que des chiffres<BR/>";
		}
		if (! verif_si_nb ( $nbEtageMax )) {
			$verif = false;
			$nbEtageMax = 0;
			echo "le champ nombre d'étage maximum n'accepte que des chiffres<BR/>";
		}
		if ($anneConsMini != 0)
		{
			if (! verif_si_annee ($anneConsMini)) {
				$verif = false;
				$anneConsMini  = 0;
				echo "le champ année de construction minimum n'accepte que des années tel que '2001' <BR/>";
			}
		}
		if ($anneConsMax != 0)
		{
			if (! verif_si_annee ($anneConsMax)) {
				$verif = false;
				$anneConsMax = 0;
				echo "le champ année de construction maximum n'accepte que des années tel que '2001' <BR/>";
			}
		}
	}
	if ($sousCategVoit) 
	{
	if (! verif_si_nb( $kiloVoitMin )) 
	{
		$verif = false;
		$kiloVoitMin  = 0;
		echo "le champ kilometrage minimum n'accepte que des chiffres<BR/>";
	}
	if (! verif_si_nb ( $kiloVoitMax ))
	{
		$verif = false;
		$kiloVoitMax = 0;
		echo "le champ kilometrage maximum n'accepte que des chiffres<BR/>";
	}
	if ($anneMise != 0)
	{
		if (!verif_si_annee($anneMise)) 
		{
			$verif = false;
			$anneMise = 0;
			echo "le champ année de construction maximum n'accepte que des années tel que '2001' <BR/>";
		}
	}	
	}
?>
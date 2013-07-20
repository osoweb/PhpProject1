<?php
	$type_produit = $_GET['type_produit'];
	include('../fonctions.php');
	if ($type_produit != 0)
	{
		include('../connexion.php');
		if($type_produit< 10)
		{
			$req1="SELECT TYPE_OFFRE_LIBELLE AS RESU FROM `type_offre` WHERE TYPE_OFFRE_ID = ".$_GET['type_produit'].";";
		}
		else
		{
			$req1="SELECT TYPE_SS_OFFRE_LIBELLE AS RESU FROM `type_ss_offre` WHERE TYPE_SS_OFFRE_ID = ".$_GET['type_produit'].";";
		}
		$exReq1=mysql_query($req1) or die("requete 1 invalide ---$req1--- : " . mysql_error());
		if($resuReq1=mysql_fetch_array($exReq1))
		{
			echo chaine_titre($resuReq1['RESU']);
		}
		include('../deconnexion.php');
	}
	echo '';
	
?>
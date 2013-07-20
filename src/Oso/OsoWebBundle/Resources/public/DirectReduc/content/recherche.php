<?php

// Requ�te afin de s�lectionner dans la base de donn�e les annonces qu'on affichera ensuite.
 $req1="SELECT * FROM `offres`";
 $req1=  $req1."WHERE `OFFRE_ID` = `OFFRE_ID` "; // condition toujours vrai afin d'�viter le 'where' dans les condition ci-dessous.
 
 if ($_GET['mot'] !="" ) //si l'utilisateur a mis un mot cl�s.
 {
	$req1=  $req1." AND `OFFRE_TITRE` LIKE '%".$_GET['mot']."%' OR `OFFRE_TEXTE` LIKE '%".$_GET['mot']."%' "; // on selectionne les annonces comportant le mot ou la phrase qu'il a tap�.
 }
 
 if ($_GET['type_produit'] != 0) // si l'utilisateur a spr�cifi� un domaine particulier.
 {
 
	if($_GET['type_produit'] < 10)  // dans le cas o� c'est type d'offre (ex: multim�dia).
	{
		$req1=  $req1." AND OFFRE_TYPE IN ( SELECT TYPE_SS_OFFRE_ID FROM `type_ss_offre` WHERE TYPE_OFFRE_ID = ".$_GET['type_produit'].") ";
	}
	
	else // dans le cas o� c'est un sous-type (ex: console vid�o).
	{
		$req1=  $req1."  AND  OFFRE_TYPE = ".$_GET['type_produit']." ";
	}
 }
 
 if($_GET['region'] != 99) // si l'utilisateur a spr�cifi� une region particuliere
 {
	$req1=  $req1." AND UTIL_ID IN ( SELECT UTIL_ID FROM `utilisateur` WHERE ID_VILLE IN (SELECT ID_VILLE FROM ville WHERE ID_DEPT IN ( SELECT ID_DEPT FROM departement WHERE ID_REG =".$_GET['region']." ) ) )";
 }
 
 $req1=  $req1." AND OFFRE_STATUT > 0 ORDER BY OFFRE_DATE;";
 
 $exReq1=mysql_query($req1) or die("requete 1 invalide : " . mysql_error());
 $resuReq1=mysql_fetch_array($exReq1);
 
 $nombredAnnonce = mysql_num_rows($exReq1); // on r�cupere le nombre pour ensuite pr�venir l'utisateur dans le cas o� il y aurai aucune annonce pass�dant les crit�re sp�cifier.
 
 echo '<DIV style="margin-left: 50px; margin-top: 60px;"> ';
 
 if ($nombredAnnonce >= 1) // dans le cas o� il y a des annonces
 {
	$nombreDAnnonceParPage = 10;  // on stock le nombre annonces voulu par page ( pour l'instant on le met en dur possibilit� d'�volution)
	$nombrePage = ceil($nombredAnnonce / $nombreDAnnonceParPage); // on calcule le nombre de page necessaire pour afficher la totalit� des annonces.
	
	// Dans le cas o� l'utilisateur a choisi une page pr�alablement
	if (isset($_GET['annonce']))
	{
        $page = $_GET['annonce']; 
	}
	
	else // sinon on le placera sur la 1 ere
	{
        $page = 1; 
	}
	
	$premiereAnn = ($page-1) * $nombreDAnnonceParPage; // on calcule l'index de la 1ere annonce de la page en fonction du nombre d'annonce par page et sur quelle page est-on positionner.
	
	$dernierAnn = $premiereAnn + $nombreDAnnonceParPage; // ainsi que la derni�re. 
	
	$cpt = 0; // on initialise le compteur qui sera en faite l'index de l'enregistrement on nous seront positionn�
	include('fonctions/affiche_min_annonce.php');
	while($resuReq1)
	{
		if ( $cpt < $dernierAnn && $cpt >= $premiereAnn)
		{	
			if ( $cpt != $dernierAnn && $cpt != $premiereAnn)
			{
				echo '<hr noshade style="width:300px; height:1px; margin-top: 40px; border-color: #ff8c00;"><br />';
			}
			
			aff_annonce($resuReq1);
		}
		$cpt++;
		$resuReq1=mysql_fetch_array($exReq1);
	}

	if($nombrePage>1)
	{
	echo '<center> Page : ';
	for ($j = 1 ; $j <= $nombrePage ; $j++)
	{
		echo '<a href="index.php?mot='.$_GET['mot'].'&type_produit='.$_GET['type_produit'].'&region='.$_GET['region'].'&page=recherche&annonce='.$j.'" >' . $j . '</a> ';

	}
	echo '</center>';
	}
	
 }	
 else
 {
	echo '<DIV style="margin-left: 190px; margin-top: 170px;" >d�sol�, il y a aucune annonce qui correspond � vos crit�res de recherche.</DIV>';
 }
 
 echo '</DIV><BR/> ';
?>

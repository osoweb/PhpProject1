#!/usr/local/bin/php5
<?php
include("../fonction/connexion.php");

		$req3 ="select OFFRE_N_DOSSIER from offres WHERE OFFRE_STATUT < 1";
		$execReq3 = mysql_query($req3) or die("erreur dans ma requête ($req3): ".mysql_error() );
		while($resuReq3 = mysql_fetch_array($execReq3))
		{
				$dossierphoto=opendir('../content/image_offre');
				$pattern = '#vidati-0'.$resuReq3['OFFRE_N_DOSSIER'].'-fichier | vidati-'.$resuReq3['OFFRE_N_DOSSIER'].'-fichier#';
				while ($photo = readdir($dossierphoto))
				{
					if (preg_match($pattern, $photo))
					{
						unlink("../content/image_offre/".$photo);
					}
				}
				echo 'suppresion de l\'offre numéro :'.$resuReq3['OFFRE_ID'];
        }	
$query="DELETE FROM panier WHERE OFFRE_ID IN(SELECT OFFRE_ID FROM offres WHERE OFFRE_STATUT <1)";
$query2="DELETE FROM avis WHERE OFFRE_ID IN(SELECT OFFRE_ID FROM offres WHERE OFFRE_STATUT <1)";
$query3="DELETE FROM offres WHERE OFFRE_STATUT <1)";
$query4="DELETE FROM utilisateurs WHERE UTIL_STATUT <1)";
mysql_query($query);
mysql_query($query2);
mysql_query($query3);
mysql_query($query4);
include("../fonction/deconnexion.php");
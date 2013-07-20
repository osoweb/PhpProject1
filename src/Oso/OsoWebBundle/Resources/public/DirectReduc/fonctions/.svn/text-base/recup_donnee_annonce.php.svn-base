<?php


$query='SELECT * FROM offres WHERE OFFRE_ID="'.$id_annonce. '"';
$result=mysql_query($query) or die ("Error in query: $query. " . mysql_error());	
$data=mysql_fetch_array($result);

$id=$data['UTIL_ID'];
//OFFRE_ID  	
	//UTIL_ID 	
$titre_annonce=$data['OFFRE_TITRE'];
$date_annonce=$data['OFFRE_DATE'];	
$date_modif_annonce=$data['OFFRE_DATE_MODIF'];
$prix_annonce=$data['OFFRE_PRIX'];
$texte_annonce=$data['OFFRE_TEXTE'];	

$type_annonce_id=$data['OFFRE_TYPE'];
$statut_annonce=$data['OFFRE_STATUT'];
$photo_annonce1=$data['OFFRE_PHOTO'];
$photo_annonce2=$data['OFFRE_PHOTO1'];
$photo_annonce3=$data['OFFRE_PHOTO2'];
$offre_demande=$data['OFFRE_DEMANDE']; 	
$mise_en_valeur=$data['OFFRE_MISE_EN_VALEUR'];
$photo=$data['OFFRE_PHOTO'];
$photo1=$data['OFFRE_PHOTO1'];
$photo2=$data['OFFRE_PHOTO2'];
$id_ville_annonce=$data['ID_VILLE'];



$query='SELECT * FROM type_ss_offre WHERE TYPE_SS_OFFRE_ID="'.$type_annonce_id. '"';
$result=mysql_query($query) or die ("Error in query: $query. " . mysql_error());	
$data=mysql_fetch_array($result);
$query='SELECT * FROM type_offre WHERE TYPE_OFFRE_ID="'.$data['TYPE_OFFRE_ID']. '"';
$result=mysql_query($query) or die ("Error in query: $query. " . mysql_error());	
$data2=mysql_fetch_array($result);
$type_id=$data2['TYPE_OFFRE_ID'];
$type_ss_annonce=$data['TYPE_SS_OFFRE_LIBELLE'];
$type_annonce=$data2['TYPE_OFFRE_LIBELLE'];


if($data2['TYPE_OFFRE_ID']==4)
{
	$query='SELECT * FROM immobilier WHERE id_offre="'.$id_annonce. '"';
	$result=mysql_query($query) or die ("Error in query: $query. " . mysql_error());	
	$data3=mysql_fetch_array($result);
	$nbPiece=$data3['nb_piece'];
	$nbChambre=$data3['nb_chambre'];
	$surfHab=$data3['surf_hab'];
	$surfTer=$data3['surf_ter'];
	$nbEtage=$data3['nb_etage'];
	$anneCons=$data3['annee_cons'];
	$type_vente=$data3['id_type_vente'];
	$cuisine=$data3['cuisine'];

	$num_dossier=$data3['num_dossier'];
	$num_immo=$data3['num_immo'];
	
		$query='SELECT * FROM type_vente WHERE id_type_vente="'.$type_vente. '"';
		$result=mysql_query($query) or die ("Error in query: $query. " . mysql_error());	
		$data3=mysql_fetch_array($result);
		$lib_type_vente=$data3['lib_type_vente'];
}
else
{
	
	$nbPiece=0;
	$nbChambre=0;
	$surfHab=0;
	$surfTer=0;
	$nbEtage=0;
	$anneCons=0;
	$type_vente=0;
	$cuisine='';


	$num_dossier=0;
	$num_immo=0;

}

if($data2['TYPE_OFFRE_ID']==3)
{
	$query='SELECT * FROM voiture WHERE id_offre="'.$id_annonce. '"';
	$result=mysql_query($query) or die ("Error in query: $query. " . mysql_error());	
	if($data3=mysql_fetch_array($result))
	{
		$num_voit=$data3['num_voit'];
		$kilometrage_voit=$data3['kilometrage_voit'];
		$energie_voit=$data3['energie_voit'];
		$boite_voit=$data3['boite_voit'];
		$anne_mise_circulation=$data3['anne_mise_circulation'];
		$id_type_vente=$data3['id_type_vente'];
		
		if( $energie_voit==1)
			$nrg_voit='Diesel';
		if( $energie_voit==2)
			$nrg_voit='Essence';
		if( $energie_voit==3)
			$nrg_voit='GPL';
		if( $energie_voit==4)
			$nrg_voit='Électrique';
		
		
		if( $boite_voit==1)
			$boite_vitesse='Manuel';
		if( $boite_voit==2)
			$boite_vitesse='Automatique';

		$query='SELECT * FROM type_vente WHERE id_type_vente="'.$id_type_vente. '"';
		$result=mysql_query($query) or die ("Error in query: $query. " . mysql_error());	
		$data3=mysql_fetch_array($result);
		$type_vente=$data3['lib_type_vente'];
	}
}

else
{
	$num_voit=0;
	$kilometrage_voit=0;
	$energie_voit=0;
	$boite_voit=0;
	$anne_mise_circulation=0;
	$id_type_vente=0;

}


$query='SELECT * FROM ville, departement, region WHERE region.ID_REG=departement.ID_REG AND ville.ID_DEPT=departement.ID_DEPT AND ville.ID_VILLE="'.$id_ville_annonce. '"';
	$result=mysql_query($query) or die ("Error in query: $query. " . mysql_error());	
	$data=mysql_fetch_array($result);
	$ville_annonce=$data['LIB_VILLE'];
	$departement_annonce=$data['LIB_DEPT'];
	$region_annonce=$data['LIB_REG'];

	$id_departement_annonce=$data['ID_DEPT'];
	$id_region_annonce=$data['ID_REG'];





?>
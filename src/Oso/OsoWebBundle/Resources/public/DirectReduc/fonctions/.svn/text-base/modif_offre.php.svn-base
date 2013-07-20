<?php
function ajout_offre()
{
	$id=$_SESSION['ID'];
	

	$lien_offre='ajout_offre.html';
	$lien_offre='<a href='.$lien_offre.'>Retour a l&rsquo;ajout d&rsquo;offre</a>';
	
	
	//offre ou demande
	
	$offre_demande=test_rempli('post','offre_demande',"le choix de l&rsquo;offre n&rsquo;est pas correct ".$lien_offre);
	//$id=test_rempli('get','id',"l&rsquo;id de l&rsquo;utilisateur n&rsquo;est pas correct. ".$lien_offre);
	
	//champs obligatoire
	global $titre;
	$titre=test_rempli('post','titre',"le titre de l&rsquo;offre n&rsquo;est pas rempli. ".$lien_offre);
	$texte=test_rempli('post','texte',"le texte n&rsquo;est pas rempli.".$lien_offre);
	$prix=test_rempli('post','prix',"le prix n&rsquo;est pas rempli.".$lien_offre);
	$id_ville=$_POST['ville'];
	
	$nbPiece=test_rempli2('post','nbPiece');
	$nbChambre=test_rempli2('post','nbChambre');
	$surfHab=test_rempli2('post','surfHab');
	$surfTer=test_rempli2('post','surfTer');
	$nbEtage=test_rempli2('post','nbEtage');
	$anneCons=test_rempli2('post','anneCons');
	
	$type_vente=test_rempli2('post','type_vente');
	$cuisine=test_rempli2('post','cuisine');
	
	
	
	$kiloVoit=test_rempli2('post','kiloVoit');
	$energie_voit=test_rempli2('post','energie_voit');
	$boite_vitesse=test_rempli2('post','boite_vitesse');
	$anneMise=test_rempli2('post','anneMise');

	
	
	
	
	if(!is_numeric($prix))		
		die('le champ prix doit &ecirc;tre un nombre '.$lien_offre);
	else if($prix<=0)
	{
		die('le champ prix doit &ecirc;tre un nombre positif non nul '.$lien_offre);
	}
	
	
	if($_POST['type_offre']!=0)
		$type_offre=$_POST['type_offre'];
	else
		die("le type d&rsquo;offre n&rsquo;est pas choisi.".$lien_offre);		
		
	$jour=date('d');
	$mois=date('m');
	$annee=date('Y');
	$date=$annee.'-'.$mois.'-'.$jour;


	
	
		
	/*
	echo '<br />id '.$id;
	echo '<br />titre '.$titre;
	echo '<br />texte '.$texte;
	echo '<br />prix '.$prix;
	echo '<br />depart '.$local_id;
	echo '<br />type dofr '.$type_offre;
	echo '<br />photo '.$photo;
	echo '<br />photo1 '.$photo1;
	echo '<br />photo2 '.$photo2;
	*/
	//annonce en gras ou en 1ere position etc...
	$mise_en_valeur='0';
	
	$query='INSERT INTO offres VALUES(NULL,"'.$id.'", "'.$titre. '","' .$date. '","' .$date. '","' .$prix. '","' .$texte. '","1","","","","' .$type_offre. '","' .$offre_demande. '","'.$mise_en_valeur.'","0","0","'.$id_ville.'");';			
	$result=mysql_query($query) or die ("Error in query: $query. " . mysql_error());
	
	$query='SELECT * FROM offres WHERE UTIL_ID="'.$id.'" AND OFFRE_TITRE="'.$titre.'" ORDER BY OFFRE_ID DESC';
	$result=mysql_query($query) or die ("Error in query: $query. " . mysql_error());
	$data=mysql_fetch_array($result);
	
	global $id_annonce;
	$id_annonce=$data['OFFRE_ID'];
	
	
	$lien_succes=chaine_titre($data['OFFRE_TITRE']).'-affiche_annonce-'.$id_annonce.'.html';
	
	
	
	//fonction ajout photo dans fonctions.php
	
	$photo=photo('fichier');
	$photo1=photo('fichier1');
	$photo2=photo('fichier2');
	
	
	//la photo principale ne doit pas etre vide
	if($photo=='' && $photo1!='')
	{
		$photo=$photo1; $photo1='';
	}
	
	if($photo=='' && $photo2!='')
	{
		$photo=$photo2; $photo2='';
	}
	
	
	$query='UPDATE offres SET OFFRE_PHOTO="'.$photo. '", OFFRE_PHOTO1="'.$photo1.'",  OFFRE_PHOTO2="'.$photo2. '" WHERE OFFRE_ID="'.$id_annonce.'"';
	mysql_query($query) or die ("Error in query: $query. " . mysql_error());	  	  	  
	
	
	
	//ajout des precisions
	/*
	echo $nbPiece.$nbChambre.$surfHab.$surfTer.$nbEtage.$anneCons.'<br/>';
	echo $type_vente.'-'.$cuisine;
	*/
	
	//recupere la categorie de l'offre type_offre=ss categorie
	$test=substr($type_offre,0,1);
	
	//si c'est dans immobilier
	if($test==4)
	{
		$query='INSERT INTO immobilier VALUES(NULL,"0", "'.$nbPiece. '","' .$nbChambre. '","' .$surfHab. '","' .$surfTer. '","' .$nbEtage. '","' .$anneCons.'","'.$cuisine.'","'.$id_annonce.'","'.$type_vente.'");';
		mysql_query($query) or die ("Error in query: $query. " . mysql_error());	  	  	  
	}
	
	//echo $anneMise.'-'.$boite_vitesse.'-'.$energie_voit.'-'.$kiloVoit.'-'.$type_vente ;
	
	//si c'est dans vehicule
	if($test==3)
	{
		$query='INSERT INTO voiture VALUES(NULL, "'.$kiloVoit. '","' .$energie_voit. '","' .$boite_vitesse. '","' .$anneMise. '","' .$id_annonce. '","' .$type_vente.'");';
		mysql_query($query) or die ("Error in query: $query. " . mysql_error());	  	  	  
	}
	
	
	include('fonctions/mail_annonce.php');
	mail_annonce($offre_demande,$prix,$titre,$type_offre,$id_annonce,$type_vente,$id_ville);
	
	echo '<br />offre ajouter avec succes!';
	//echo '	<meta http-equiv=refresh content="0; url='.$lien_succes.'">';
}


function modif_offre()
{
	global $id_annonce;
	
	
	$lien_offre='offre_modif-'.$id_annonce;
	$lien_offre='<a href='.$lien_offre.'>Retour a la modification des offres</a>';
	
	//offre ou demande
	$offre_demande=test_rempli('post','offre_demande',"le choix de l&rsquo;offre n&rsquo;est pas correct ".$lien_offre);
	
	$offre_id=test_rempli('get','id_annonce',"l&rsquo;id de l&rsquo;offre n&rsquo;est pas correct. ".$lien_offre);	
	$titre=test_rempli('post','titre',"le titre de l&rsquo;offre n&rsquo;est pas rempli. ".$lien_offre);
	$texte=test_rempli('post','texte',"le texte n&rsquo;est pas rempli.".$lien_offre);
	$prix=test_rempli('post','prix',"le prix n&rsquo;est pas rempli.".$lien_offre);
	
	$id_ville=$_POST['ville'];
	
	
	$nbPiece=test_rempli2('post','nbPiece');
	$nbChambre=test_rempli2('post','nbChambre');
	$surfHab=test_rempli2('post','surfHab');
	$surfTer=test_rempli2('post','surfTer');
	$nbEtage=test_rempli2('post','nbEtage');
	$anneCons=test_rempli2('post','anneCons');
	
	$type_vente=test_rempli2('post','type_vente');
	$cuisine=test_rempli2('post','cuisine');
	
	
	$kiloVoit=test_rempli2('post','kiloVoit');
	$energie_voit=test_rempli2('post','energie_voit');
	$boite_vitesse=test_rempli2('post','boite_vitesse');
	$anneMise=test_rempli2('post','anneMise');

	
	
	if(!is_numeric($prix))		
		die('le champ prix doit &ecirc;tre un nombre '.$lien_offre);
	else if($prix<=0)
		die('le champ prix doit &ecirc;tre un nombre positif non nul '.$lien_offre);
	
	
	if($_POST['type_offre']!=0)
		$type_offre=$_POST['type_offre'];
	else
		die("le type d&rsquo;offre n&rsquo;est pas choisi.".$lien_offre);
	
	
	$jour=date('d');
	$mois=date('m');
	$annee=date('Y');
	$date=$annee.'-'.$mois.'-'.$jour;
	
	$photo=photo('fichier');
	$photo1=photo('fichier1');
	$photo2=photo('fichier2');
	

	//la photo principale ne doit pas etre vide
	$query='SELECT * FROM offres WHERE OFFRE_ID="'.$offre_id.'"';
	$result=mysql_query($query) or die ("Error in query: $query. " . mysql_error());
	$data=mysql_fetch_array($result);
	
	if($data['OFFRE_PHOTO']=='')
	{
	
		if($photo=='' && $photo1!='')
		{
			$photo=$photo1; $photo1='';
		}
	
		else if($photo=='' && $photo2!='')
		{
			$photo=$photo2; $photo2='';
		}
	}
	
	$image_folder='content/image_offre/';

	if(isset($_POST['suppression1']))
	{
	$image_lien=$image_folder.$data['OFFRE_PHOTO1'];
	
		if(file_exists($image_lien))
		{
			unlink($image_lien);
			}
			$photo1='';
	}
	if(isset($_POST['suppression2']))
	{
	$image_lien=$image_folder.$data['OFFRE_PHOTO2'];
		if(file_exists($image_lien))
		{
			unlink($image_lien);
		}
			$photo2='';
	}

	if(isset($_POST['suppression']))
	{	
		$image_lien=$image_folder.$data['OFFRE_PHOTO'];
		if(file_exists($image_lien))
		{
			unlink($image_lien);
		}
		$photo='';
		if($data['OFFRE_PHOTO1']!='' && !isset($_POST['suppression1']))
		{
			$photo=$data['OFFRE_PHOTO1'];
			$photo1='';
			$_POST['suppression1']=1;
		}
		else if($photo1!='')
		{
			$photo=$photo1;
			$photo1='';
		}
		else if($data['OFFRE_PHOTO2'] && !isset($_POST['suppression2']))
		{
			$photo=$data['OFFRE_PHOTO2'];
			$_POST['suppression2']=1;
			$photo2='';
		}
		else if($photo2!='')
			$photo=$photo2;
			$photo2='';
		{
		
		}
	}
	
	if($photo!='' || isset($_POST['suppression']))
	{
	
		$query='UPDATE offres SET OFFRE_PHOTO="'.$photo. '" WHERE OFFRE_ID="'.$offre_id.'"';
		mysql_query($query) or die ("Error in query: $query. " . mysql_error());	  	  	  
	}
	if($photo1!='' || isset($_POST['suppression1']))
	{
	
		$query='UPDATE offres SET OFFRE_PHOTO1="'.$photo1. '" WHERE OFFRE_ID="'.$offre_id.'"';
		mysql_query($query) or die ("Error in query: $query. " . mysql_error());	  	  	  
	}
	if($photo2!='' || isset($_POST['suppression2']))
	{
	
		$query='UPDATE offres SET OFFRE_PHOTO2="'.$photo2. '" WHERE OFFRE_ID="'.$offre_id.'"';
		mysql_query($query) or die ("Error in query: $query. " . mysql_error());	  	  	  
	}
	
	
	$query='UPDATE offres SET OFFRE_DATE_MODIF="'.$date. '", OFFRE_TITRE="'.$titre.  '",OFFRE_PRIX="'.$prix. '",OFFRE_TEXTE="'.$texte.  '",OFFRE_TYPE="'.$type_offre. '", ID_VILLE="'.$id_ville.'" WHERE OFFRE_ID="'.$offre_id.'"';
	mysql_query($query) or die ("Error in query: $query. " . mysql_error());	  	  	  
	echo 'offre modifier';
	
	
	
	
	
	
	
	//ajout des precisions
	/*
	echo $nbPiece.$nbChambre.$surfHab.$surfTer.$nbEtage.$anneCons.'<br/>';
	echo $type_vente.'-'.$cuisine;
	*/
		if($nbPiece!='' || $nbChambre !='' || $surfHab !='' || $surfTer !='' || $nbEtage !='' || $anneCons !='' ||  $type_vente !=0 || $cuisine!='')
		{
	$query='UPDATE immobilier SET nb_piece="'.$nbPiece. '", nb_chambre="' .$nbChambre. '", surf_hab="' .$surfHab. '", surf_ter="' .$surfTer. '",nb_etage="' .$nbEtage. '",annee_cons="' .$anneCons.'",cuisine="'.$cuisine.'",id_type_vente="'.$type_vente.'" WHERE id_offre="'.$offre_id.'";';
	mysql_query($query) or die ("Error in query: $query. " . mysql_error());
	}
	//echo $anneMise.'-'.$boite_vitesse.'-'.$energie_voit.'-'.$kiloVoit.'-'.$type_vente ;
	
	
	if($anneMise!='' || $boite_vitesse!=0 || $energie_voit!=0 || $kiloVoit!=''  || $type_vente!=0)
	{
		$query='UPDATE voiture SET kilometrage_voit="'.$kiloVoit. '", energie_voit="' .$energie_voit. '", boite_voit="' .$boite_vitesse. '", anne_mise_circulation="' .$anneMise. '", id_type_vente="' .$type_vente.'";';
		mysql_query($query) or die ("Error in query: $query. " . mysql_error());	  	  	  
	}
	
	
	
}
	
?>
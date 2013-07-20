<?php
function ajout_offre()
{
		$id=$_SESSION['ID'];
	
	

	$lien_offre='ajout_actu.html';
	$lien_offre='<a href='.$lien_offre.'>Retour a l&rsquo;ajout d&rsquo;actu</a>';
	$lien_succes='actualites.html';
	
	if($_SESSION['ADMIN']<1)
		die('vous n\'etes pas admin'.$lien_succes);
	
	//offre ou demande
	
	//$id=test_rempli('get','id',"l&rsquo;id de l&rsquo;utilisateur n&rsquo;est pas correct. ".$lien_offre);
	
	//champs obligatoire
	global $titre;
	$titre=test_rempli('post','titre',"le titre de l&rsquo;offre n&rsquo;est pas rempli. ".$lien_offre);
	$texte=test_rempli('post','texte',"le texte n&rsquo;est pas rempli.".$lien_offre);
	$description=test_rempli('post','description',"la description n&rsquo;est pas rempli.".$lien_offre);
	
	
	$query='SELECT * FROM actualites WHERE UTIL_ID="'.$id.'" AND ACTU_TITRE="'.$titre.'"';
	$result=mysql_query($query) or die ("Error in query: $query. " . mysql_error());
	if (mysql_num_rows($result) > 0)
	{
		die('le titre de l\'actu existe deja, veuillez en choisir un autre s\'il vous plait. '.$lien_offre);
	}
	
	
	
	
	$jour=date('d');
	$mois=date('m');
	$annee=date('Y');
	$date=$annee.'-'.$mois.'-'.$jour;


	
	//fonction ajout photo dans fonctions.php
	$photo=photo('fichier');
	
	
		
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
	
	$query='INSERT INTO actualites VALUES(NULL,"'.$texte.'","'.$description.'", "'.$titre. '","'.$photo. '","' .$date. '","' .$id. '")';			
	$result=mysql_query($query) or die ("Error in query: $query. " . mysql_error());
	
	echo '<br />actu ajouter avec succes!';
	echo '	<meta http-equiv=refresh content="0; url='.$lien_succes.'">';
}


function modif_offre()
{
	if($_SESSION['ADMIN']<1)
		die('vous n\'etes pas admin'.$lien_succes);
		
	global $actu_id;
	$lien_offre='index.php?parametre=actu_modif&id='.$actu_id;
	$lien_offre='<a href='.$lien_offre.'>Retour a l&rsquo;ajout d&rsquo;actu</a>';
	$lien_succes='index.php?parametre=actualites';
	
	
	$titre=test_rempli('post','titre',"le titre de l&rsquo;offre n&rsquo;est pas rempli. ".$lien_offre);
	$texte=test_rempli('post','texte',"le texte n&rsquo;est pas rempli.".$lien_offre);
	$description=test_rempli('post','description',"la description n&rsquo;est pas rempli.".$lien_offre);
	
	$photo=photo('fichier');
	echo $photo;
	if(!empty($photo))
	{
		$query='UPDATE actualites SET ACTU_PHOTO="'.$photo. '" WHERE ACTU_ID="'.$actu_id. '"';
		mysql_query($query) or die ("Error in query: $query. " . mysql_error());	  	  	  
	}
		
	$query='UPDATE actualites SET ACTU_TITRE="'.$titre.  '", ACTU_DESC="'.$description. '",ACTU_TEXTE="'.$texte.'" WHERE ACTU_ID="'.$actu_id.'"';
	mysql_query($query) or die ("Error in query: $query. " . mysql_error());	  	  	  
			
}
	

?>
<?php
function ajout_avis()
{
	global $offre_id;
	$lien_avis='ajout_avis-'.$offre_id.'.html';
	$lien_avis='<a href='.$lien_avis.'>Retour a l&rsquo;ajout d&rsquo;avis</a>';
	
	$offre_id=test_rempli('get','offre_id',"l&rsquo;id de l&rsquo;offre n&rsquo;est pas correct. ".$lien_avis);
/*
	$id=$_GET['id'];
	$offre_id=$_GET['offre_id'];
	$texte=mysql_real_escape_string($_POST['texte']);
*/
	
	//champs obligatoire	
	$texte=test_rempli('post','texte',"le texte n&rsquo;est pas rempli.".$lien_avis);
	
	
	$jour=date('d');
	$mois=date('m');
	$annee=date('Y');
	$date=$annee.'-'.$mois.'-'.$jour;

	$query='INSERT INTO avis VALUES(NULL,"'.$id.'", "'.$offre_id. '","'.$date. '","' .$texte. '")';			
	$result=mysql_query($query) or die ("Error in query: $query. " . mysql_error());
}

function modif_avis()
{
	$lien_avis='index.php';
	$lien_avis='<a href='.$lien_avis.'>Retour a l&rsquo;ajout d&rsquo;offre</a>';
	
	//$avis_id=$_GET['avis_id'];
	$avis_id=test_rempli('get','avis_id',"l&rsquo;id de l&rsquo;utilisateur n&rsquo;est pas correct. ".$lien_avis);
	$texte=test_rempli('post','texte',"le texte n&rsquo;est pas rempli.".$lien_avis);
	//$texte=mysql_real_escape_string($_POST['texte']);

	$jour=date('d');
	$mois=date('m');
	$annee=date('Y');
	$date=$annee.'-'.$mois.'-'.$jour;
	

	
	$query='UPDATE avis SET AVIS_DATE="'.$date. '", AVIS_TEXTE="'.$texte. '" WHERE AVIS_ID="'.$avis_id.'"';
	mysql_query($query) or die ("Error in query: $query. " . mysql_error());	  	  	  
			
}		


function suppr_avis()
{
	$lien_avis='index.php';
	$lien_avis='<a href='.$lien_avis.'>Retour a l&rsquo;ajout d&rsquo;offre</a>';

	$avis_id=test_rempli('get','avis_id',"l&rsquo;id de l&rsquo;utilisateur n&rsquo;est pas correct. ".$lien_avis);
	//$avis_id=$_GET['avis_id'];
	
	$query = "DELETE FROM avis WHERE AVIS_ID='".$avis_id."'";
	$result = mysql_query($query) or die ("Error in query: $query. " . mysql_error());	  	  	  
}		

?>
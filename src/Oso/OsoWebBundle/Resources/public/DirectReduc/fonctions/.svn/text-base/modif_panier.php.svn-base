<?php


function ajout_panier()
{
	$lien_panier='index.php';
	$lien_panier='<a href='.$lien_panier.'>Retour a l&rsquo;ajout d&rsquo;offre</a>';
	
	$id=test_rempli('get','id',"l&rsquo;id de l&rsquo;utilisateur n&rsquo;est pas correct. ".$lien_panier);
	/*
	if(isset($_GET['id']))
		$id=$_GET['id'];
	else
		die ("l&rsquo;id de l&rsquo;utilisateur n&rsquo;est pas correct.");
	if(isset($_GET['offre_id']))
		$offre_id=$_GET['offre_id'];
	else
		die ("l&rsquo;id de l&rsquo;offre n&rsquo;est pas correct.");
		
	if(isset($_GET['offre_titre']))
		$offre_titre=$_GET['offre_titre'];
	else
		die ("le titre de l&rsquo;offre n&rsquo;est pas correct.");
	
	*/
	
	$offre_id=test_rempli('get','offre_id',"l&rsquo;id de l&rsquo;offre n&rsquo;est pas correct. ".$lien_panier);	
	$offre_titre=test_rempli('get','offre_titre',"le titre de l&rsquo;offre n&rsquo;est pas correct. ".$lien_panier);
	
	
	
	$jour=date('d');
	$mois=date('m');
	$annee=date('Y');
	$date=$annee.'-'.$mois.'-'.$jour;

	
	$query='INSERT INTO panier VALUES(NULL,"'.$id.'", "'.$offre_id. '","'.$date. '","1","' .$offre_titre. '")';			
	$result=mysql_query($query) or die ("Error in query: $query. " . mysql_error());
}



function suppr_panier()
{	
	$lien_panier='index.php';
	$lien_panier='<a href='.$lien_panier.'>Retour a l&rsquo;ajout d&rsquo;offre</a>';
	$panier_id=test_rempli('get','panier_id',"l&rsquo;id de l&rsquo;offre n&rsquo;est pas correct. ".$lien_panier);	
	
	$query = "DELETE FROM panier WHERE PANIER_ID='".$panier_id."'";
	$result = mysql_query($query) or die ("Error in query: $query. " . mysql_error());	  	  	  
}		

?>
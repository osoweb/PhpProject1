<?php
/*
if(!isset($_SESSION['utilisateur'])){
header("location:main_login.php");
}
echo 'ytopp';
//$user_id=$_SESSION["ID"];
//$offre_id=$_GET['offre_id'];
*/
$user_id=$_GET['user_id'];
$offre_id=$_GET['offre_id'];
	echo $user_id.'-'.$offre_id;
	include('../fonctions/connexion.php');
	$query = "DELETE FROM panier WHERE UTIL_ID='".$user_id."' AND OFFRE_ID='".$offre_id."'";
	mysql_query($query) or die ("Error in query: $query. " . mysql_error());	 
	include('../fonctions/deconnexion.php');
	
//	include('../fonctions/fonctions.php');
//	include('../fonctions/modif_panier.php');
//	suppr_panier();

?>
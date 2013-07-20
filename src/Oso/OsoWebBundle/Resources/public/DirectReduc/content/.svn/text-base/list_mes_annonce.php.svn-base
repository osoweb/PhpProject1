<style type='text/css'>
<!--
.donnee{
background:grey;

}
-->

</style>
<center>
<h1> Mes Annonces </h1><br />
</center>


<?php

//id utilisateur
include('fonctions/affiche_min_annonce.php');
$id=test_login();


//suppression entree
if(isset($_GET['id_annonce'])) //annonce a supprimer
{
echo 'Offre effacer<br /><br />';	


$query='UPDATE offres SET OFFRE_STATUT=0 WHERE OFFRE_ID="'.$_GET['id_annonce'].'"'; 
mysql_query($query) or die ("Error in query: $query. " . mysql_error());
}

	$query='SELECT * FROM offres WHERE UTIL_ID="'.$id. '" AND OFFRE_STATUT>"0" ORDER BY OFFRE_DATE DESC';
	$result=mysql_query($query) or die ("Error in query: $query. " . mysql_error());	

$premier=0;
 
 
while($data=mysql_fetch_array($result)){

	if($premier==1)
		echo '<hr noshade style="width:300px; height:1px; border-color: ff8c00; "><br />';
	aff_annonce($data);
	$premier=1;
	echo '<TABLE>';
	echo '<TD><a href="'.chaine_titre($data['OFFRE_TITRE']).'-affiche_annonce-'.$data['OFFRE_ID'].'.html">Afficher</a></TD>';
	echo '<TD><a href="'.chaine_titre($data['OFFRE_TITRE']).'-offre_modif-'.$data['OFFRE_ID'].'.html">Modifier</a></TD>';
?>
	<TD><a href="<?php echo chaine_titre($data['OFFRE_TITRE']);?>-list_mes_annonce-<?php echo $data['OFFRE_ID']?>.html" onclick="return confirm('Voulez vous vraiment supprimer votre offre? : ')"> Supprimer</a></TD>
<?php
	echo '</TABLE>';
}


?>


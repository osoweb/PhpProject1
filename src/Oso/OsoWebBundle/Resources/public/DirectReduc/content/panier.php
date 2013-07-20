
<?php 
if(isset($_GET['chargement']))
	Header('Content-Type: text/html; charset=ISO-8859-1'); 
	
include('fonctions/affiche_min_annonce.php');
$user_id=test_login();
/*

if(!isset($_SESSION['utilisateur'])){
header("location:main_login.php");
}
$user_id=$_SESSION["ID"];
*/
//$offre_id=1;
	

	//include('fonctions/modif_avis.php');

$requete="SELECT *
FROM utilisateur,offres
WHERE utilisateur.UTIL_ID=offres.UTIL_ID
AND OFFRE_ID IN(SELECT OFFRE_ID FROM panier WHERE UTIL_ID='48')";

$result=mysql_query($requete);
if(!$result)
{
	echo "Erreur n ",mysql_errno()," ",mysql_error();
	die;
	}

$result2=mysql_fetch_assoc($result);


echo '<script type="text/javascript" src="fonctions/panier.js"></script>'; // NE PAS OUBLIER DE SUPPRIMER CETTE LIGNE QUAND LA PAGE NE SERA PLUS EN TEST


echo "<div id='panier'>";
?>
<center>
<h1> Mon Panier</h1>
</center>


<?php
//echo '<TABLE border="1" style="border-style:solid;border-width:medium;border-color:grey">';
//echo "<tr style='background:grey;'> <td></td><td>Num&eacute;ro</td><td>Titre</td> <td>Photo</td> <td>Cat&eacute;gorie</td> <td>Type</td> <td>Prix</td> <td>Utilisateur</td> <td></td><td></td></tr>";
$premier=0;

while($result2)
{
		if($premier==1)
			echo '<hr noshade style="width:300px; height:1px; border-color: ff8c00; "><br />';
	aff_annonce($result2);
	echo "<td> <input type='button' onClick='suppr(".$result2['OFFRE_ID'].", ".$user_id.");' value='Supprimer'/></td>"; 
	/*
	
	//echo $result2['OFFRE_PHOTO'];
	if($result2['OFFRE_DEMANDE']==1)
	{
		$offre_demande='Offre';
	}
	else
	{
		$offre_demande='Demande';
	}

	echo '<TR>';
	echo '<TD>'.$offre_demande.'</TD>';
	echo "<td>".$result2['OFFRE_ID']."</td>";
	echo "<td>".$result2['OFFRE_TITRE']."</td>";
	if($result2['OFFRE_PHOTO'])
	{
		
		echo "<td><img src='content/image_offre/".$result2['OFFRE_PHOTO']."' width=50 height=50></img></td>";
		//echo "<td>","</td>";
	}else echo "<td>Pas de photo disponible</td>";

	$query='SELECT TYPE_SS_OFFRE_LIBELLE, TYPE_OFFRE_LIBELLE FROM type_ss_offre, type_offre WHERE type_ss_offre.TYPE_OFFRE_ID=type_offre.TYPE_OFFRE_ID AND TYPE_SS_OFFRE_ID="'.$result2['OFFRE_TYPE']. '"';
	$resultat=mysql_query($query) or die ("Error in query: $query. " . mysql_error());	
	$donnee=mysql_fetch_array($resultat);
	$type_offre=$donnee['TYPE_SS_OFFRE_LIBELLE'];
	$type=$donnee['TYPE_OFFRE_LIBELLE'];
	
	echo "<td>".$type."</td>";
	echo "<td>".$type_offre."</td>";
	echo "<td>".$result2['OFFRE_PRIX']." €</td>"."<td>".$result2['UTIL_USER']."</td>";
	echo "<td><a href='index.php?page=affiche_annonce&id_annonce=".$result2['OFFRE_ID']."'>Afficher</a></td>";
	echo "<td> <input type='button' onClick='suppr(".$result2['OFFRE_ID'].", ".$user_id.");' value='Supprimer'/></td>"; 
	
	echo "</tr>";
	echo "<br/>";

	
	*/
$premier=1;
	$result2=mysql_fetch_assoc($result);
	
}
//echo " </table>";
echo "</div>";

?>
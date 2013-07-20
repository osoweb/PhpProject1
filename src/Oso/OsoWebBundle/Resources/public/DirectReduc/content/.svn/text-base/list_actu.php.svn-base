<style type='text/css'>
<!--
.donnee{
background: #900;

}
-->


</style>


<?php


//id utilisateur
//session_start();
$id=$_SESSION['ID'];


include('fonctions/connexion.php');
include('fonctions/fonctions.php');

//suppression entree
if(isset($_POST['suppression']))
{
echo 'Actu effacer<br /><br />';	


$query='SELECT * FROM actualites WHERE ACTU_ID="'.$_POST['suppression'].'"'; 
$result=mysql_query($query) or die ("Error in query: $query. " . mysql_error());
$data=mysql_fetch_array($result);
if(!empty($data['ACTU_PHOTO']))
	unlink($data['ACTU_PHOTO']);

$query='DELETE FROM actualites WHERE ACTU_ID="'.$_POST['suppression'].'"'; 
mysql_query($query) or die ("Error in query: $query. " . mysql_error());
}
/*$query='SELECT EMPLOY_ID FROM '.$db_recruteur.' WHERE UTIL_ID="'.$id. '"';
$result=mysql_query($query) or die ("Error in query: $query. " . mysql_error());
$data=mysql_fetch_array($result);
$id=$data['EMPLOY_ID'];

/*
$retour = mysql_query('SELECT COUNT(*) AS nb_messages FROM livreor');
$donnees = mysql_fetch_array($retour);
$totalDesMessages = $donnees['nb_messages'];
*/

$query='SELECT * FROM actualites';
$result=mysql_query($query) or die ("Error in query: $query. " . mysql_error());


	echo '<h1>Modifiez ou Editez les Offres</h1>';


echo '<TABLE border="1" style="border-style:solid;border-width:medium;border-color:#A80000">';
echo '<TR class="donnee">';

echo '
<TD align=center><b><u>Num&eacute;ro:</u></b>&nbsp; </TD>  
<TD align=center><b><u>Titre:</u></b> &nbsp;&nbsp;</TD>    
<TD align=center><b><u>Texte:</u></b> &nbsp;&nbsp;</TD> 
<TD align=center><b><u>Description:</u></b> &nbsp;&nbsp;</TD> 
<TD align=center><b><u>Admin id:</u></b> &nbsp;&nbsp;</TD> 
<TD align=center><b><u>date:</u></b>&nbsp;&nbsp;</TD>   
<TD></TD> ';
echo'<TD></TD>';
echo '</TR>';


while($data=mysql_fetch_array($result)){


	echo '<TR>';
	echo '<TD>'.$data['ACTU_ID'].'</TD> <TD>'.charcode($data['ACTU_TITRE']).'</TD>';
	echo '<TD>'.charcode($data['ACTU_TEXTE']).'</TD> <TD>'.charcode($data['ACTU_DESC']).'</TD> <TD>'.$data['UTIL_ID'].'</TD> <TD>'.$data['ACTU_DATE'].'</TD>';
	//echo '<b>Num&eacute;ro: </b>'.$data['OFFRE_ID'].' - <b>Titre: </b>'.$data['OFFRE_TITRE'].'<br />';
	//echo '<b>Secteur: </b>'.$secteur.' - <b>Type de contrat: </b>'.$type_offre.' - <b>date: </b>'.$data['OFFRE_DATE'].' &nbsp;&nbsp;&nbsp;<br />';

	echo '<TD><a href="actu_modif-'.$data['ACTU_ID'].'.html">Modifer</a></TD>';
	//echo '<TD><a href="'.$action.'.php?id='.$data['ACTU_ID'].'">'.$affiche_action.'</a></TD>';
//	$query="DELETE * FROM offres ('', $stage', '')"; 
?>
	<form id="delete" method="POST">
	<input type="hidden" name="suppression" value="<?php echo $data['ACTU_ID'];?>" />
	<TD><a href="list_actu.html" onClick="if(confirm('Voulez vous vraiment supprimer votre actu? : ')) javascript:document.getElementById('delete').submit(); "> Supprimer</a></TD>
	</form>

<?php

	


	echo '</TR>';
}
echo '</TABLE>';
echo "<a href='ajout_actu.html'> Ajouter une actualité</a>";








?>
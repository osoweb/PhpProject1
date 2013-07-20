<?php
include('fonctions/fonctions.php');
include('fonctions/date.php');
$d=new Date();
?>

<?php
//if(isset($_SESSION['admin']) && $_SESSION['admin']>2)
//include('fonctions/connexion.php');



if(isset($_GET['id_annonce']))
{
	boite_haut();
	$ida=$_GET['id_annonce'];
	$query="SELECT * FROM actualites WHERE ACTU_ID='$ida'";
	$reponse = mysql_query($query) or die('erreur dans la requete'.$query);
	$donnees = mysql_fetch_array($reponse);
	$titre=stripslashes($donnees['ACTU_TITRE']);
	$actu=stripslashes(nl2br($donnees['ACTU_TEXTE']));
	?>
			<fieldset style="width :545px">
			<?php
		if(!empty($donnees['ACTU_PHOTO']))
			echo '<a href="'.$donnees['ACTU_PHOTO'].'"><img src="content/image_offre/'.$donnees['ACTU_PHOTO'].'" border="0" align="right" width=250 height=100%></img></a>';
        echo '<p><legend><strong>' . $titre . '</strong> '.$d->convertion_fr($donnees['ACTU_DATE']).'</legend>' . $actu . '</p>';
		echo '</fieldset><br/>';

		boite_bas();
}else
{
	boite_haut();
include('fonctions/categorie.php');
boite_bas();
echo '<br/>';
echo '<br/>';
?>
<center>
<h2 style='display: inline;'>Actualit&eacute;s</h2>
</center>
<?php
$nombreDeMessagesParPage = 6;


$retour = mysql_query('SELECT COUNT(*) AS nb_messages FROM actualites');
$donnees = mysql_fetch_array($retour);


$query='SELECT * FROM actualites ORDER BY ACTU_ID DESC';
$reponse = mysql_query($query) or die('erreur dans la requete'.$query);
boite_haut();
while ($donnees = mysql_fetch_array($reponse))
{
		$titre=stripslashes($donnees['ACTU_TITRE']);
		//$actu=stripslashes(nl2br($donnees['ACTU_TEXTE']));
		$desc=stripslashes(nl2br($donnees['ACTU_DESC']));
		$ida=$donnees['ACTU_ID'];
		$addresse=chaine_titre($titre); //remplace espace par tiret
		$date_add=$d->convertion_addresse($donnees['ACTU_DATE']);
			  echo '
			  <!--|| News List -->
			  <div id="DivNewsList">
			  <fieldset>
				  <table>
				
';

echo '
					<tr>

						<td class="TdLeftBar">


						<h3 style="display: inline;"><strong><legend><a href="'.$addresse.'-actualites-'.$ida.'-'.$date_add.'.html">'.$titre.'</strong></h3></a>
						</td>
						<td class="TdLeftBar">'.$d->convertion_fr($donnees['ACTU_DATE']).'</legend></td>
					</tr>
					<tr>
						<td class="TdLeftBar">'.$desc.'</td>
					</tr>
					
				</table>
				</fieldset>
			  </div>
			  <br/>
			 
			  <!--||/ News List -->';
}
boite_bas();
//echo '<tr><td><legend><strong><a href="index.php?page=actualites&IDactu='.$ida.'">' . $titre . '</strong></a></legend> </td><td>'. $desc	 .'</td><td>' .$d->convertion_fr($donnees['ACTU_DATE']). '</td></tr>';
	}

?>

<?php
include('fonctions/fonctions.php');
include('fonctions/date.php');
$d=new Date();
?>
<center>
<h2 style='display: inline;'>Actualit&eacute;s</h2>
</center>
<?php
$nombreDeMessagesParPage = 4;


$retour = mysql_query('SELECT COUNT(*) AS nb_messages FROM actualites');
$donnees = mysql_fetch_array($retour);
$totalDesMessages = $donnees['nb_messages'];

$nombreDePages  = ceil($totalDesMessages / $nombreDeMessagesParPage);

if (isset($_GET['id_annonce']))
{
        $page = $_GET['id_annonce'];
}else{
        $page = 1;
}




$premierMessageAafficher = ($page - 1) * $nombreDeMessagesParPage;

$query='SELECT * FROM actualites ORDER BY ACTU_ID DESC LIMIT ' . $premierMessageAafficher . ', ' . $nombreDeMessagesParPage;
$reponse = mysql_query($query) or die('erreur dans la requete'.$query);
while ($donnees = mysql_fetch_array($reponse))
{
		$titre=stripslashes($donnees['ACTU_TITRE']);
		$actu=stripslashes(nl2br($donnees['ACTU_TEXTE']));
		$ida=$donnees['ACTU_ID'];
		$addresse=chaine_titre($titre); //remplace espace par tiret
		$date_add=$d->convertion_addresse($donnees['ACTU_DATE']);
		boite_haut();
	?>
			<fieldset style="width :545px">
			<?php
		if(!empty($donnees['ACTU_PHOTO']))
			echo '<a href="'.$donnees['ACTU_PHOTO'].'"><img src="content/image_offre/'.$donnees['ACTU_PHOTO'].'" border="0" align="right" width=250 height=100%></img></a>';
        echo '<p><legend><strong>' . $titre . '</strong> '.$d->convertion_fr($donnees['ACTU_DATE']).'</legend>' . $actu . '</p>';
		echo '</fieldset><br/>';

		boite_bas();
}
echo 'Page : ';
for ($i = 1 ; $i <= $nombreDePages ; $i++)
{
    echo '<a href="actu-' . $i . '.html">' . $i . '</a> ';
}
//echo '<tr><td><legend><strong><a href="index.php?page=actualites&IDactu='.$ida.'">' . $titre . '</strong></a></legend> </td><td>'. $desc	 .'</td><td>' .$d->convertion_fr($donnees['ACTU_DATE']). '</td></tr>';
?>

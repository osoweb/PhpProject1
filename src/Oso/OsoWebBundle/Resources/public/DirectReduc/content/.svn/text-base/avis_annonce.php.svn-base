<?php

//suppression entree
if(isset($_POST['suppression']))
{
$query='DELETE FROM avis WHERE AVIS_ID="'.$_POST['suppression'].'"'; 
mysql_query($query) or die ("Error in query: $query. " . mysql_error());
echo 'Avis effacer<br /><br />';
}

$nombreDeMessagesParPage = 7; 

$retour = mysql_query('SELECT COUNT(*) AS nb_messages FROM avis WHERE OFFRE_ID="'.$id_annonce.'"')or die ("Error in query: $query. " . mysql_error());
$donnees = mysql_fetch_array($retour);
$totalDesMessages = $donnees['nb_messages'];
$nombreDePages  = ceil($totalDesMessages / $nombreDeMessagesParPage);
if($nombreDePages > 1)
{
echo '<center>';
echo 'Page : ';
for ($i = 1 ; $i <= $nombreDePages ; $i++)
{
    echo '<a href="'.$titre_annonce.'-affiche_annonce-'.$id_annonce.'-' . $i . '.html">' . $i . '</a> ';
}
echo '</center>';
}
if($totalDesMessages==0)
	echo '<br /><center>pas de commentaire sur cette annonce.</center>';
?>
 

 
<?php
 
 
if (isset($_GET['page_avis']))
{
        $page = $_GET['page_avis']; 
}
else 
{
        $page = 1; 
}
 
$premierMessageAafficher = ($page - 1) * $nombreDeMessagesParPage;
 
$reponse = mysql_query('SELECT * FROM avis WHERE OFFRE_ID="'.$id_annonce.'" ORDER BY AVIS_ID DESC LIMIT ' . $premierMessageAafficher . ', ' . $nombreDeMessagesParPage);
 
while ($donnees = mysql_fetch_array($reponse))
{
		$query='SELECT * FROM utilisateur WHERE UTIL_ID="'.$donnees['UTIL_ID'].'"';
		$result=mysql_query($query) or die ("Error in query: $query. " . mysql_error());
		$data=mysql_fetch_array($result);
		
        echo '<p><strong>' . $data['UTIL_USER'] . '</strong> a écrit le '.$donnees['AVIS_DATE'].' :<br />' . $donnees['AVIS_TEXTE'] . '</p>';
		if(isset($_SESSION['ID']))
		{
			if(isset($_SESSION['ADMIN']) AND ($_SESSION['ADMIN']>0))
			{
				echo '<a href='.$titre_annonce.'-modif_avis-'.$donnees['AVIS_ID'].'.html>editer</a>';
				?>
				<form style="display:inline;" method='POST' action="<?php echo $titre_annonce;?>-affiche_annonce-<?php echo $donnees['OFFRE_ID'];?>.html" onSubmit="return confirm('Voulez vous vraiment supprimer cet avis? : ')"> <!--   affichage d'une annonce         -->
				<input type='hidden' name='suppression' value='<?php echo $donnees['AVIS_ID'];?>'> <!--     avis a supprimer     -->
				<input type='submit' value='Supprimer' />
				
				</form >
				
				<?php
			}
		}
		
}
 

?>
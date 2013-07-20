<?php
if(!isset($_SESSION['utilisateur'])){
	echo '<meta http-equiv=refresh content="0; url=besoin_connect.html">';
}

//page_avis vaut mode, a cause de htaccess
if(isset($_POST['mode'])){
	$mode=$_POST['mode'];
}else $mode=0;

$titre=$_GET['titre_annonce'];
$user_id=$_SESSION["ID"];
$offre_id=$_GET['id_annonce'];
include('fonctions/fonctions.php');
include('fonctions/modif_avis.php');

?>
<script type='text/JavaScript'>
function valider_formulaire(thisForm){
	alert(thisForm.getElementsByClassName("input","obligatoire").lenght);
	
}
</script>

<p> 
<center>

<h1>Ajouter un avis</h1>
</center>
</p>

<center>
<?php
if($mode==0)
{
	?>
	<form action="<?php echo $titre;?>-ajout_avis-<?php echo $offre_id;?>.html" method="post">
	Poster un avis
	<br/>
	<input type='hidden' name='mode' value='1'>
	<textarea name="texte" rows="8" cols="24"></textarea>

	<input type="submit" value="Poster"/>
	</form>
	<?php
	echo $_GET['titre_annonce'];
}else if ($mode==1) 
{
	$texte=$_POST["texte"];
	$requete="INSERT INTO `avis` (`AVIS_ID`, `UTIL_ID`, `OFFRE_ID`, `AVIS_DATE`, `AVIS_TEXTE`) VALUES (NULL, '$user_id', '$offre_id', now(), '$texte')";
	if(!mysql_query($requete))
	{
		echo "Erreur n ",mysql_errno()," ",mysql_error();
	}else 
	{
		echo 'Avis ajouté';
	?>
		<meta HTTP-EQUIV="Refresh" content="2;URL='<?php echo $titre;?>-affiche_annonce-<?php echo $offre_id;?>.html">;
	<?php
	}
}

?>
</center>
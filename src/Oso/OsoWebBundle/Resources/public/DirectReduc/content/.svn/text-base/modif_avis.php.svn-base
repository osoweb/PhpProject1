<?php
if(!isset($_SESSION['utilisateur'])){
header("location:main_login.php");
}
if(isset($_POST['mode'])){
$mode=$_POST['mode'];
}else $mode=0;
$user_id=$_SESSION["ID"];
$offre_id=1; //ID de l'offre
$user_avis=1; //ID de la personne qui a posté l'avis
$avis_id=$_GET['id_annonce'];  //ID de l'avis, s'appel id_annonce pour htacces
	include('fonctions/fonctions.php');
	include('fonctions/modif_avis.php');

$requete="SELECT * FROM avis WHERE AVIS_ID='$avis_id'";
$result=mysql_query($requete);
if(!$result) echo "Erreur n ",mysql_errno()," ",mysql_error();
else $result2=mysql_fetch_assoc($result);

$offre_id=$result2['OFFRE_ID'];
if($user_id!=$result2['UTIL_ID']) header("location:main_login.php");

?>
<script type='text/JavaScript'>
function valider_formulaire(thisForm){
	alert(thisForm.getElementsByClassName("input","obligatoire").lenght);
	
}
</script>

<p> 
<center>

<h1>Modifier un avis</h1>
</center>
</p>


<?php
if($mode==0)
{
?>


<form action="<?php echo $_GET['titre_annonce']?>-modif_avis-<?php echo $avis_id;?>.html" method="post">
<input type='hidden' name='offre_id' value='<?php echo $offre_id;?>'>
<input type='hidden' name='mode' value='1'>

Poster un avis
<br/>
<textarea name="texte" rows="8" cols="24"><?php echo $result2['AVIS_TEXTE'];?></textarea>

<input type="submit" value="Poster"/>
</form>
<?php
}else if ($mode==1) {
$texte=$_POST["texte"];
$requete="UPDATE avis  SET AVIS_DATE=now(), AVIS_TEXTE='$texte' WHERE AVIS_ID='".$avis_id."'";
if(!mysql_query($requete))
{
	echo "Erreur n ",mysql_errno()," ",mysql_error();
	}else 	
//modif_avis();
echo 'Avis modifié';
echo '<meta HTTP-EQUIV="Refresh" content="2;URL='.$_GET['titre_annonce'].'-affiche_annonce-'.$offre_id.'.html">';
}
?>
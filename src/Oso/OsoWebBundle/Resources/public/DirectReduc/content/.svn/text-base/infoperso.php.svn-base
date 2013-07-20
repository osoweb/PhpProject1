<?php
include('fonctions/fonctions.php');
include('fonctions/connexion.php');

$user_id=test_login();		
$user=$_SESSION["utilisateur"];
$requete="SELECT * FROM utilisateur WHERE UTIL_USER='$user'";
$mess=mysql_query($requete);
$rang=mysql_fetch_assoc($mess);

$user_id=$rang['UTIL_ID'];


$id=$user_id;
include('fonctions/recup_donnee_user.php');	

$region=$id_region;
$departement=$id_departement;
$ville=$ville_id;

?>

<Script src="content/test.js"></script>

<center><h1>Mes parametres</h1></center>

<form  name="inscription" method="POST" onsubmit='verif2(<?php echo $user_id; ?>);' action='index.php'>
<?php boite_haut();?>


<input type='hidden' name="mail_base" value="<?php echo $rang["UTIL_MAIL"]; ?>"/> 
E-mail
<table>
<td>
<input type='text'  name="mail" onKeyUp="contenu();" value="<?php echo $rang["UTIL_MAIL"]; ?>"/> 
</td>
<td>
<div id="erreur"> </div>
</td>
</table>

<br/>
Mot de passe
<table>
<td>
<input type="password" name="mdp" value="<?php echo $rang["UTIL_PASSWORD"]; ?>" >
</td>
<td>
<div id="erreur2"> </div>
</td>
</table>
<br/>
Numero de téléphone<br/><input name="tel" value="<?php echo $rang["UTIL_PHONE"]; ?>"/>
<br/><br/>
Localisation<br/>

		<script type="text/javascript" src="./fonctions/localisation.js"></script>

		<TABLE>
	<TR>
		<TD>
<?php
			
			echo '<select name="regi" id="regi" style="width:165" onChange="departement();" >';
			echo '<option value="99" selected>Sélectionner une région</option>';
				$req3="SELECT * FROM `region` ORDER BY LIB_REG ;";
				$exReq3=mysql_query($req3) or die("requete 3 invalide : " . mysql_error());
				while($resuReq3=mysql_fetch_array($exReq3))
				{
					echo '<option value="'.$resuReq3['ID_REG'].'" ';
					if (isset($region) && $resuReq3['ID_REG'] == $region )
							{
								echo 'selected';
							}
					echo '>'.$resuReq3['LIB_REG'].'</option>';
				}
			echo'</select>';
		echo'</TD>';
		echo'<TD id ="departement">';
		
		echo '</TD>';
		if (isset($region))
		{
			echo '<script type="text/javascript"> departement('.$departement.'); </script>';
		}
		echo '<TD id ="ville">';
		echo '</TD>';
		if (isset($departement))
		{
			echo '<script type="text/javascript"> ville('.$ville.'); </script>';
		}
?>
	
</TR>
</TABLE>

	
<input type=radio <?php if($rang['UTIL_TYPE'] == 1) {echo " checked " ;} ?> name="type" value="1"/>Particulier
<input type=radio <?php if($rang['UTIL_TYPE'] == 2) {echo " checked " ;} ?>name="type" value="2"/>Professionnel
<br/>

<input type="button" value="valider" onClick="verif2('<?php echo $user_id; ?>');"/>
<br/>
<br/>
<?php //<a href="login/login_success.php">Revenir à la page précédente</a>?>
<?php boite_bas();?>


</form>
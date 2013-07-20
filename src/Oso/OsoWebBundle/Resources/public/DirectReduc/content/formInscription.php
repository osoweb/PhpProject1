
<center><h1> Inscription &agrave; Direct Reduc</h1>
<br/>
Inscription <strong> Gratuite </strong> pour mettre en ligne des annonces<br/>
</center>
<?php
include('fonctions/fonctions.php');
?>
<Script type="text/javascript" src="content/test.js"></Script>
<form  name="inscription" method="POST" action="index.html" onSubmit="return verif(); login(document.inscription.nom.value, document.inscription.mdp.value); document.location.href='index.html' ;" action="index.html">

<?php boite_haut();?>

<font color=red><div id="erreur5"></div></font>

Nom <font color=red>*</font><br/>
<table>
<td>
<input name="nom" onChange="contenu2();"/>
</td>
<td>
<div id="erreur3"></div>
</td>
</table>


E-mail <font color=red>*</font><br/>
<table>
<td>
<input name="mail" onChange="contenu();"/> 
</td>
<td>
<div id="erreur"> </div>
</td>
</table>


Mot de passe <font color=red>*</font><br/>

<table>
<td>
<input type="password" name="mdp">
</td>
<td>
<div id="erreur2"></div>
</td>
</table>

Numero de téléphone<br/><input name="tel"/>
<br/><br/>
<script type="text/javascript" src="./fonctions/localisation.js"></script>
<div id="erreur4"></div>

Localisation <font color=red>*</font><br/>
<TABLE>
	<TR>
		<TD>
<select name="regi" id="regi" style="width:165" onChange="departement();" >
		<option value="99" selected>Sélectionner une région</option>
			<?php 
			$req3="SELECT * FROM `region` ORDER BY LIB_REG ;";
			$exReq3=mysql_query($req3) or die("requete 3 invalide : " . mysql_error());
							while($resuReq3=mysql_fetch_array($exReq3))
							{
								echo '<option value="'.$resuReq3['ID_REG'].'" >'.$resuReq3['LIB_REG'].'</option>';
							}
			?>
	</select>
	</TD>
	<TD id ="departement">
	</TD>
	<TD id ="ville">
	</TD>
</TR>
</TABLE>
<script type="text/javascript">
	$(document).ready
	(
		function()
		{
			$("#pro").click
			(
				function()
				{
					$("#siren").html('Siren de votre entreprise : <input name="siren" />');
				}
			)
		}
	)
	$(document).ready
	(
		function()
		{
			$("#part").click
			(
				function()
				{
					$("#siren").html('');
				}
			)
		}
	)
	
</script>
<input type=radio checked name="type" value="1" id="part"/>Particulier
<input type=radio name="type" value="2" id="pro"/>Professionnel
<div id="siren" ></div>

<input type="submit" value="valider"/><br/>
<br/>
<small><font color=red>*</font> champs obligatoires</small>
<?php boite_bas();?>


</form>

<center>
Si vous &ecirc;tes d&eacute;j&aacute; inscrit, connectez vous simplement grace a votre login &agrave; partir du menu connection en haut de page.
</center>
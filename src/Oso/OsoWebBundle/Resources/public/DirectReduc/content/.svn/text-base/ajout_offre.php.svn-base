<script  type="text/javascript" src="fonctions/formulaire.js"></script>
<script type="text/javascript" src="./fonctions/special.js"></script>
<!--
Pour afficher les precisions des annonces
-->


<p> 
<center>
<h1>Ajout Offre</h1>
</center>
</p>

<script>
function remplace()
{
document.getElementById('specialite').innerHTML='';
}
</script>



<style type='text/css'>
<!--
fieldset {
background: #F7F7F7;
margin: 1em 1em 1em 1em;
padding: 0.5em 0.5em 0.5em 0.5em;
border: 0.05em solid #CCC;
}	
-->
</style>

<?php
include('fonctions/fonctions.php');
$id=test_login();

include('fonctions/recup_donnee_user.php');	

$region=$id_region;
$departement=$id_departement;
$ville=$ville_id;

$taille_ko=1024;
$taille_max=$taille_ko*1024;
?>

<form method="post" onsubmit="return valider_formulaire(this)" action='offre_ajoute.html' ENCTYPE="multipart/form-data">
<?php boite_haut();?>

	D&eacute;tail de l&rsquo;offre<br/>
		<TABLE >
			
<TR>
<input type="radio" name="offre_demande" value="1" checked /> Offre <br>

<input type="radio" name="offre_demande" value="2" /> ou Demande  <br><br>

</TR>
				<TR>
					<TH width="200"> Titre <font color="red">*</font></TH>
					<TD width="240"> <input type="text" class='obligatoire'  maxlength="50" name="titre" value=""/> </TD>
				</TR>

				<TR>
				<TH> Prix (en euro) <font color="red">*</font> </TH>
				<TD> <input type="numbre" name="prix" class='obligatoire'  maxlength="30" value=""/> </TD>
				</TR>

				<TR>
					<TH>type d&rsquo;offre <font color="red">*</font></TH>
					<TD>
						<select name="type_offre" id="type_offre" class='obligatoire2' onchange="var test=new RegExp('^4.*4$'); var test2=new RegExp('^3.*3$'); if(test.test(document.getElementById('type_offre').value)){ ajoutInfoAnnonce(0,0,0,0,0,0,'' );} else if(test2.test(document.getElementById('type_offre').value)) {ajoutInfoVoitAnnonce(0,0,0,0,0);} else {document.getElementById('spe').innerHTML = ''; document.getElementById('spe').style.height ='0px';}">
						<?php include('fonctions/type_offre.php');?>
					</select>
					</TD>            
				</TR>
				<TR>
				<TD colspan=2>
				<div id="spe">
				</div>
				</TD>
				<TR>
										
				
				<TR>
					<TH> texte de l&rsquo;offre <font color="red">*</font> </TH>
					<TD> <textarea name="texte" class='obligatoire' rows="8" cols="24"></textarea></TD>
				</TR>

				<TR>
					

					<script type="text/javascript" src="./fonctions/localisation.js"></script>
					<TH>Localisation <font color="red">*</font></TH>
					<TD>
						<TABLE>						
							<TR>
								<TD>
<?php
									
									echo '<select name="regi" id="regi" style="width:165" onChange="departement();" class="obligatoire3">';
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
					</TD>
					
				</TR>
				
				
				
				<TR>
					<TH> Photo  </TH>
					<TD>
						<INPUT type=hidden name=MAX_FILE_SIZE  VALUE=<?php echo $taille_max?>>
						<INPUT type=file name="fichier" onChange='photo1();' id='test'>
						

					</TD>
				</TR>
																
				<TR id='photo1'>											
				</TR>
				
				<TR id='photo2'>
				
				</TR>
			
		</TABLE>			
	<center>



<center>
<input type="submit" value="Valider" /> <br><br>

<font color="red">*</font> Les informations avec une &eacute;toile sont obligatoire!
<?php boite_bas();?>

</form>



</center>

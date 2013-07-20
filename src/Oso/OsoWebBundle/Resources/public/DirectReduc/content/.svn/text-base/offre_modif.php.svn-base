<script  type="text/javascript" src="fonctions/formulaire.js"></script>
<script type="text/javascript" src="./fonctions/special.js"></script>

<p> 
<center>
<h1>Modif Offre</h1>
</center>
</p>




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
global $id_annonce;
$id_annonce=$_GET['id_annonce'];



include('fonctions/fonctions.php');

if(isset($_POST['type_offre']))
{
include('fonctions/modif_offre.php');
modif_offre();
	
}

include('fonctions/recup_donnee_annonce.php');	

$region=$id_region_annonce;
$departement=$id_departement_annonce;
$ville=$id_ville_annonce;


if( (isset($_SESSION['ID']) && $_SESSION['ID']==$id) || (isset($_SESSION['ADMIN']) && $_SESSION['ADMIN']>0) )
{
	$id=$_SESSION['ID'];
}
else
{
echo '<meta http-equiv=refresh content="0; url=besoin_connect.html">';
	
	
}


$taille_ko=1024;
$taille_max=$taille_ko*1024;
?>

<center>
annonce num&eacute;ro: <?php echo $id_annonce;?>
</center>

<form method="post" onsubmit="return valider_formulaire(this)" action='<?php echo chaine_titre($titre_annonce);?>-offre_modif-<?php echo $id_annonce;?>.html' ENCTYPE="multipart/form-data">
<?php boite_haut();?>
D&eacute;tail de l&rsquo;offre
		<TABLE >
			<center>
<TR>
<input type="radio" name="offre_demande" value="1" <?php if($offre_demande==1) echo 'checked="checked"';?> /> Offre <br>
<input type="radio" name="offre_demande" value="2" <?php if($offre_demande==2) echo 'checked="checked"';?> /> ou Demande  <br><br>

</TR>
				<TR>
					<TH width="200"> Titre <font color="red">*</font></TH>
					<TD width="200"> <input type="text" class='obligatoire'  maxlength="50" name="titre" value="<?php echo $titre_annonce;?>"/> </TD>
				</TR>

				<TR>
				<TH> Prix (en euro) <font color="red">*</font> </TH>
				<TD> <input type="numbre" name="prix" class='obligatoire'  maxlength="30" value="<?php echo $prix_annonce;?>"/> </TD>
				</TR>
				<TR>
					<TH>type d&rsquo;offre <font color="red">*</font></TH>
					<TD>
						<select name="type_offre" id="type_offre" class='obligatoire2' onchange="var test=new RegExp('^4.*4$'); var test2=new RegExp('^3.*3$'); if(test.test(document.getElementById('type_offre').value)){ ajoutInfoAnnonce(<?php echo $nbPiece.','.$nbChambre.','.$surfHab.','.$surfTer.','.$nbEtage.','.$anneCons.',\''.$cuisine.'\',\''.$type_vente.'\''?> );} else if(test2.test(document.getElementById('type_offre').value)) {ajoutInfoVoitAnnonce(<?php echo $kilometrage_voit.','.$energie_voit.','.$boite_voit.','.$anne_mise_circulation.','.$id_type_vente?>);} else {document.getElementById('spe').innerHTML = ''; document.getElementById('spe').style.height ='0px';}">
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


				
<script>
var test=new RegExp('^4.*4$'); 
if(test.test(<?php echo $type_annonce_id;?>))
{ 
ajoutInfoAnnonce(<?php echo $nbPiece.','.$nbChambre.','.$surfHab.','.$surfTer.','.$nbEtage.','.$anneCons.',\''.$cuisine.'\','.$type_vente?> );
}

var test2=new RegExp('^3.*3$');
if(test2.test(<?php echo $type_annonce_id;?>)) 
{
ajoutInfoVoitAnnonce(<?php echo $kilometrage_voit.','.$energie_voit.','.$boite_voit.','.$anne_mise_circulation.','.$id_type_vente?>);
}

</script>


				
				<TR>
					<TH> texte de l&rsquo;offre <font color="red">*</font> </TH>
					<TD> <textarea name="texte" class='obligatoire' rows="8" cols="24"><?php echo $texte_annonce;?></textarea></TD>
				</TR>

				<TR>
					

					<script type="text/javascript" src="./fonctions/localisation.js"></script>
					<TH>Localisation</TH>
					<TD colspan=3>
						<TABLE>						
							<TR>
								<TD width="25%">
<?php
									
									echo '<select name="regi" id="regi" style="width:165" onChange="departement();"  class="obligatoire3">';
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
								echo'<TD id ="departement" width="25%">';
								
								echo '</TD>';
								if (isset($region))
								{
									echo '<script type="text/javascript"> departement('.$departement.'); </script>';
								}
								echo '<TD id ="ville" width="25%">';
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
				<TD></TD>
				<TD></TD>
				<TD>
					Suppression photo
				</TD>
			</TR>

				<TR>
					<TH> Photo  </TH>
					<TD>
						<INPUT type=hidden name=MAX_FILE_SIZE  VALUE=<?php echo $taille_max?>>
						<INPUT type=file name="fichier" >
          
					</TD>
					<TD>
						 <INPUT type='checkbox' name="suppression" >
					</TD>
					<?php if($photo!='') {?>
					<TD>					
					<img src='content/image_offre/<?php echo $photo;?>' width=100 height=90 />					
					</TD>
					<?php }?>
				</TR>
				
				
				<TR>
					<TH> Photo1  </TH>
					<TD>
						<INPUT type=hidden name=MAX_FILE_SIZE  VALUE=<?php echo $taille_max?>>
						<INPUT type=file name="fichier1">
					</TD>
					<TD>
						 <INPUT type='checkbox' name="suppression1" >
					</TD>
					<?php if($photo1!='') {?>
					<TD>					
					<img src='content/image_offre/<?php echo $photo1;?>' width=100 height=90 />					
					</TD>
					<?php }?>
				</TR>
				
				<TR>
					<TH> Photo2  </TH>
					<TD>
						<INPUT type=hidden name=MAX_FILE_SIZE  VALUE=<?php echo $taille_max?>>
						<INPUT type=file name="fichier2">
       				</TD>
					<TD>
						 <INPUT type='checkbox' name="suppression2" >
					</TD>
					<?php if($photo2!='') {?>
					<TD>					
					<img src='content/image_offre/<?php echo $photo2;?>' width=100 height=90 />					
					</TD>
					<?php }?>
				</TR>
			</center>
		</TABLE>			
	<center>



<center>
<input type="submit" value="Valider" /> <br><br>
<font color="red">*</font> Les informations avec une &eacute;toile sont obligatoire!
<?php boite_bas();?>
</form>



</center>

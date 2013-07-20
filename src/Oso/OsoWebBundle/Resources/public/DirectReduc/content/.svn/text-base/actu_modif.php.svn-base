<script  type="text/javascript" src="fonctions/formulaire.js"></script>
<p> 
<center>
<h1>Modif Actu</h1>
</center>
</p>

<?php
//session_start();
$id=$_SESSION['ID'];
global $actu_id;
$actu_id=$_GET['id_annonce'];
include('fonctions/connexion.php');
include('fonctions/fonctions.php');

if(isset($_POST['titre']))
{
	include('fonctions/modif_actu.php');
	modif_offre();
}

$taille_ko=1024;
$taille_max=$taille_ko*1024;
$query='SELECT * FROM actualites WHERE ACTU_ID="'.$actu_id.'"';
$result=mysql_query($query) or die ("Error in query: $query. " . mysql_error());
$data=mysql_fetch_array($result);



?>

<form method="post" onsubmit="return valider_formulaire(this)" action='<?php echo stripslashes  ($data['ACTU_TITRE']);?>-actu_modif-<?php echo $actu_id?>' ENCTYPE="multipart/form-data">
<fieldset >
<legend>Remplissez l'actu</legend>	  
<center>
<TABLE >

<TR>
<TH width="290"> Titre <font color="red">*</font></TH>
<TD width="290"> <input type="text" class='obligatoire'  maxlength="150" size='70' name="titre" value="
<?php echo stripslashes  ($data['ACTU_TITRE']);?>"/> </TD>
</TR>


<TR>
<TH> Description de l&rsquo;actu <font color="red">*</font> </TH>
<TD> <textarea name="description" class='obligatoire' rows="10" cols="55"><?php echo stripslashes  ($data['ACTU_DESC']);?></textarea></TD>
</TR>

<TR>
<TH> texte de l&rsquo;actu <font color="red">*</font> </TH>
<TD> <textarea name="texte" class='obligatoire' rows="24" cols="55"><?php echo stripslashes  ($data['ACTU_TEXTE']);?></textarea></TD>
</TR>


<TR>
<TH> Photo  </TH>
<TD>
           <INPUT type=hidden name=MAX_FILE_SIZE  VALUE=<?php echo $taille_max?>>
          <INPUT type=file name="fichier">
          
</TD>
</TR>

</center>
</TABLE>			
</fieldset>


<center>
<input type="submit" value="Valider" /> <br><br>
</form>
<font color="red">*</font> Les informations avec une &eacute;toile sont obligatoire!


</center>

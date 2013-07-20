<script  type="text/javascript" src="fonctions/formulaire.js"></script>
<p> 
<center>
<h1>Ajout Actu</h1>
</center>
</p>

<?php
$id=$_SESSION['ID'];
include('fonctions/connexion.php');
$taille_ko=1024;
$taille_max=$taille_ko*1024;
?>

<form method="post" onsubmit="return valider_formulaire(this)" action='actu_ajoute.html' ENCTYPE="multipart/form-data">
<fieldset >
<legend>Remplissez l'actu</legend>	  
<center>
<TABLE >

<TR>
<TH width="290"> Titre <font color="red">*</font></TH>
<TD width="290"> <input type="text" class='obligatoire'  maxlength="150" size='70' name="titre" value=""/> </TD>
</TR>

<TR>
<TH> Description de l&rsquo;actu <font color="red">*</font> </TH>
<TD> <textarea name="description" class='obligatoire' rows="10" cols="55"></textarea></TD>
</TR>

<TR>
<TH> Texte de l&rsquo;actu <font color="red">*</font> </TH>
<TD> <textarea name="texte" class='obligatoire' rows="24" cols="55"></textarea></TD>
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

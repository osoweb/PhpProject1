<script  type="text/javascript" src="fonctions/affiche_annonce.js"></script>
<?php
$id_annonce=$_GET['id_annonce'];

include('fonctions/recup_donnee_annonce.php');
include('fonctions/recup_donnee_user.php');
include ('fonctions/date.php');
include ('fonctions/fonctions.php');
$d = new Date();

if(isset($_SESSION['ID']))
	$id=$_SESSION['ID'];
	
if(isset($_POST['ajout_panier']) )
{
	
	if(isset($_SESSION['ID']))
	{
		$query='SELECT * FROM panier WHERE OFFRE_ID="'.$id_annonce.'" AND UTIL_ID="'.$id.'"';			
		$result=mysql_query($query) or die ("Error in query: $query. " . mysql_error());
		$data=mysql_fetch_array($result);
		
		if(mysql_num_rows($result)==0)
		{
		//	echo mysql_num_rows($result);
			echo 'annonce ajoutee.';
			$query2='INSERT INTO panier VALUES("'.$id.'", "'.$id_annonce. '",NOW())';			
			$result=mysql_query($query2) or die ("Error in query: $query. " . mysql_error());
		}
		else
		{
//			echo mysql_num_rows($result);
			echo '<font color="red"> &nbsp;&nbsp; annonce deja dans le panier.</font>';
		}
	}
	else
	{
		echo '<meta http-equiv=refresh content="0; url=index.php?page=besoin_connect">';
	}
}
?>

<center>
<h1> <?php echo $titre_annonce;?></h1><br />
</center>



<div class="info">	


	
	<div class="perso">
		<?php mini_boite_haut();?>
		<TABLE >
		
			<TR>
				<TD><b>Nom: </b> <?php echo $login;?><b></TD>		
			</TR>
			<TR>
				<TD><b>Type: </b><?php if($type==2) echo 'professionnel'; else echo 'particulier';?></TD>
			</TR>
			<TR>
				<TD><b>Date Inscription: </b><?php echo $d->convertion_fr($date_inscr);?></TD>
			</TR>						
			<TR>
				<TD><b>R&eacute;gion:</b> <?php echo $region_annonce;?></TD>
			</TR>
			<TR>
				<TD><b>D&eacute;partement:</b> <?php echo $departement_annonce;?></TD>
			</TR>
			<TR>
				<TD><b>Ville: </b><?php echo $ville_annonce;?></TD>
			</TR>
		
		</TABLE>
		<?php mini_boite_bas();?>
	</div>

	<?php if($type_id==3){?>
	<div class="precision">
		<?php mini_boite_haut();?>
		<TABLE >
		
		<?php if(isset($kilometrage_voit) && $kilometrage_voit!=''){?>
			<TR>
				<TD><b>Kilometrage : </b> <?php echo $kilometrage_voit;?> km <b></TD>		
			</TR>
			<?php }?>
			<?php if(isset($nrg_voit) && $nrg_voit!=''){?>
			<TR>
				<TD><b>Type d'énergie : </b><?php echo $nrg_voit;?></TD>
			</TR>
			<?php }?>
			<?php if(isset($boite_vitesse) && $boite_vitesse!=''){?>
			<TR>
				<TD><b>Type de boite de vitesse: </b><?php echo $boite_vitesse;?></TD>
			</TR>
			<?php }?>
			<?php if(isset($anne_mise_circulation) && $anne_mise_circulation!=''){?>
			<TR>
				<TD><b>Année : </b> <?php echo $anne_mise_circulation;?></TD>
			</TR>
			<?php }?>
			<?php if(isset($type_vente) && $type_vente!=''){?>
			<TR>
				<TD><b>Type de Vente:</b> <?php echo $type_vente;?></TD>
			</TR>
			<?php }?>
		</TABLE>
		<?php mini_boite_bas();?>
	</div>
	<?php }?>
	
	
	
	
	<?php if($type_id==4){?>
	<div class="precision">
		<?php mini_boite_haut();?>
		<TABLE >
		
		







		
		
		<?php if(isset($nbPiece) && $nbPiece!='' && $nbPiece!=0){?>
			<TR>
				<TD><b>Nombre de piece :  </b> <?php echo $nbPiece;?><b></TD>		
			</TR>
			<?php }?>
			<?php if(isset($nbChambre) && $nbChambre!='' && $nbChambre!=0){?>
			<TR>
				<TD><b>nombre de chambre :  </b><?php echo $nbChambre;?></TD>
			</TR>
			<?php }?>
			<?php if(isset($surfHab) && $surfHab!='' && $surfHab!=0){?>
			<TR>
				<TD><b>Surface habitable :  </b><?php echo $surfHab;?> m<sup>2</sup></TD>
			</TR>
			<?php }?>
			<?php if(isset($surfTer) && $surfTer!='' && $surfTer!=0 ){?>
			<TR>
				<TD><b>Surface terrain :  </b> <?php echo $surfTer;?> m<sup>2</sup></TD>
			</TR>
			<?php }?>
			<?php if(isset($nbEtage) && $nbEtage!='' && $nbEtage!=0 ){?>
			<TR>
				<TD><b>Nombre d'etage : </b> <?php echo $nbEtage;?></TD>
			</TR>
			<?php }?>
			
			<?php if(isset($anneCons) && $anneCons!='' && $anneCons!=0){?>
			<TR>
				<TD><b>Année de construction :</b> <?php echo $anneCons;?></TD>
			</TR>
			<?php }?>

			<?php if(isset($cuisine) && $cuisine!=''){?>
			<TR>
				<TD><b>Type de Cuisine : </b> <?php echo $cuisine;?></TD>
			</TR>
			<?php }?>

			<?php if(isset($lib_type_vente) && $lib_type_vente!=''){?>
			<TR>
				<TD><b>Type de Vente:</b> <?php echo $lib_type_vente;?></TD>
			</TR>
			<?php }?>
		</TABLE>
		<?php mini_boite_bas();?>
	</div>
	<?php }?>
	
	
	

	<div class='coordonnee'>
			<?php mini_boite_haut();?>
			<TABLE >
			<TR>
				<TD ><b> <?php if ($offre_demande==1) echo 'Offre'; else echo 'Demande';?> </b></TD>
			</TR>
			<TR>
				<TD ><b>annonce num&eacute;ro: </b><?php echo $id_annonce;?></TD>
			</TR>
			<TR>
				<TD><b>Cat&eacute;gorie de l'annonce: </b><?php echo $type_annonce;?> </TD>
			</TR>
			
			<TR>
				<TD><b>Type de l'annonce: </b><?php echo $type_ss_annonce;?> </TD>
			</TR>
			
			<TR>
				<TD ><b>Prix: </b><?php echo $prix_annonce;?> &#8364</TD>
			</TR>
			
			<TR>
				<TD ><b>mise en ligne: </b><?php echo $d->convertion_fr($date_modif_annonce);?></TD>
			</TR>
			</TABLE>
			<?php mini_boite_bas();?>
			
	</div>
</div>	


<br /><br />


<?php
/*
<div style='height:375px'>
	for($i=1;$i<=3;$i++)
	{
		$photo='photo_annonce'.$i;
		if(isset($$photo) && !empty($$photo))
		{
			echo '<div style="position:relative; ">';
			$lien_image='content/image_offre/'.$$photo;
			echo '<p><a href="'.$lien_image.'"><img src="'.$lien_image.'" width=35% /></p> </a>';
			echo '</div>';
		} 
	}
</div>
	*/
?>





	<?php 
	boite_haut();
	echo '<center>';
		//modif avec js
		echo '<span id="photo_affiche" class="photo_affiche">';
		if(isset($photo_annonce1) && !empty($photo_annonce1))
		{
			$lien_image='content/image_offre/'.$photo_annonce1;
			echo '<p><a ><img src="'.$lien_image.'" width=75%" name="img" /></p> </a>';
			
		} else
		{
			$lien_image='content/image_offre/www.vidati.fr(33).jpg';
			echo '<p><a ><img src="'.$lien_image.'" width=75%" name="img" /></p> </a>';
		}
		
		echo '</span>';
		echo '</center>';
	
	echo '<div class="tableau">';
			echo '<TABLE >';
			echo '<TR>';
			if(isset($photo_annonce1) && !empty($photo_annonce1))
		{
			$lien_image='content/image_offre/'.$photo_annonce1;
			echo '<p><img src="'.$lien_image.'" width=95px onClick="affiche_image(\''.$lien_image.'\')" /></p> ';
			
		} 
		
		
		echo '</TR>';
		echo '<TR>';
		if(isset($photo_annonce2) && !empty($photo_annonce2))
		{
			$lien_image='content/image_offre/'.$photo_annonce2;
			echo '<p><img src="'.$lien_image.'" width=95px onClick="affiche_image(\''.$lien_image.'\')" /></p> ';
		} 
		
		echo '</TR>';
		echo '<TR>';
		
		if(isset($photo_annonce3) && !empty($photo_annonce3))
		{
			$lien_image='content/image_offre/'.$photo_annonce3;
			echo '<p><img src="'.$lien_image.'" width=95px onClick="affiche_image(\''.$lien_image.'\')" /></p>';
		} 
		echo '</TR>';
		echo '</TABLE>';
		echo '</div>';
	
	
		
		
	echo '<div class="texte">';
	echo ('<center><br /><br /><h3>Texte de l\'annonce :</h3></center><br />');		
	echo nl2br(STRIPSLASHES( htmlspecialchars($texte_annonce) ));
	echo '</div>';
	
	?>	
	<br />
	
	<center>
	<TABLE>
	<TD>
	<form method='post' action='<?php echo chaine_titre($titre_annonce);?>-affiche_annonce-<?php echo $id_annonce;?>.html'>
	<input type='submit' name='ajout_panier' value='ajouter au panier' />
	</form>
	</TD>
	<TD>
	<form method='post' action='<?php echo chaine_titre($titre_annonce);?>-ajout_avis-<?php echo $id_annonce;?>.html'>
	<input type='submit' value='ajouter un avis' />
	</form>
	</TD>
	<?php
	if($auth_mail==1)
	{
	?>
	<TD>
	<form method='post' action='<?php echo chaine_titre($titre_annonce);?>-mail-<?php echo $id_annonce;?>.html'>
	<input type='submit' value='envoyer un mail' />
	</form>
	</TD>
	<?php 
	}
	?>
	</TABLE>
	</center>
<?PHP boite_bas();?>





<?php
boite_haut();

echo ('<center><br /><br /><h3 style="display:inline;">Avis de l\'annonce :</h3></center><br />');		
include('content/avis_annonce.php');
?>
<?PHP boite_bas();?>
</center>
<br />


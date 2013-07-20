<div id="titre">
À la une
</div>

	<DIV id='ann_une'>
		<?php
			$req8="SELECT OFFRE_PHOTO, OFFRE_TITRE, OFFRE_ID, OFFRE_MISE_EN_VALEUR FROM `offres` WHERE `OFFRE_MISE_EN_VALEUR` LIKE '%5%' ORDER BY DATE_MISE_EN_VALEUR DESC;";
			$exReq8=mysql_query($req8) or die("requete 8 invalide : " . mysql_error());
			while($resuReq8=mysql_fetch_array($exReq8))
			{
				echo '<center>';
				if($resuReq8['OFFRE_PHOTO']!='')
				echo '<img src="content/image_offre/'.$resuReq8['OFFRE_PHOTO'].'" width=75 height=60/><br/>';
				else
				echo '<img src="content/image_offre/www.vidati.fr(33).jpg" width=75 height=60/><br/>';
				echo '</center>';
				if(preg_match("/3/",$resuReq8['OFFRE_MISE_EN_VALEUR'])) echo '<img src="images/icons/alert.gif" width="16" height="16">&nbsp';
				if(preg_match("/2/",$resuReq8['OFFRE_MISE_EN_VALEUR']))	echo '<a href="index.php?page=affiche_annonce&id_annonce='.$resuReq8['OFFRE_ID'].'">'.$resuReq8['OFFRE_TITRE'].'</a>';
				else
				echo '<a style="font-weight:normal" href="index.php?page=affiche_annonce&id_annonce='.$resuReq8['OFFRE_ID'].'">'.$resuReq8['OFFRE_TITRE'].'</a>';
				echo '<br/><br/>';
			}
		?>
	</DIV>

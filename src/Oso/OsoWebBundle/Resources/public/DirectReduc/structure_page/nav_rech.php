<form id="recherche" action="recherche_detail.html" name="rech" method="POST">
	<label for="mot">Rechercher une annonce :</label>
	<input id="mot" type="text" name="mot"  maxlength='100' size="40"/>
	<select name="type_produit" id="type_produit" style="width:170;" >
	<option value="0" selected>Toutes cat�gories</option>
<?php
 $req1="SELECT * FROM `type_offre`;";
 $exReq1=mysql_query($req1) or die("requete 1 invalide : " . mysql_error());
							while($resuReq1=mysql_fetch_array($exReq1))
							{
								echo "<option style=\"font-weight:bold; background-color:grey; color: white;\" value=\"".$resuReq1['TYPE_OFFRE_ID']."\" >". $resuReq1['TYPE_OFFRE_LIBELLE']."</option>";
								$req2="SELECT * FROM `type_ss_offre` WHERE TYPE_OFFRE_ID = ' ".$resuReq1['TYPE_OFFRE_ID']."';";
								$exReq2=mysql_query($req2) or die("requete 2 invalide : " . mysql_error());
								while($resuReq2=mysql_fetch_array($exReq2))
								{
									echo '<option value="'.$resuReq2['TYPE_SS_OFFRE_ID'].'" >'.$resuReq2['TYPE_SS_OFFRE_LIBELLE'].'</option>';
     							}
							}

?>
	</select>
	<select name="region" id="type_produit" style="width:165" >
		<option value="99" selected>S�lectionner une r�gion</option>
			<?php 
			$req3="SELECT * FROM `region` ORDER BY LIB_REG ;";
			$exReq3=mysql_query($req3) or die("requete 3 invalide : " . mysql_error());
							while($resuReq3=mysql_fetch_array($exReq3))
							{
								echo '<option value="'.$resuReq3['ID_REG'].'" >'.$resuReq3['LIB_REG'].'</option>';
							}
			?>
	</select>
	<input type="hidden" name="page" value="recherche">
	<input id = "chercher" type="submit" value="Chercher" ></input>
</form>
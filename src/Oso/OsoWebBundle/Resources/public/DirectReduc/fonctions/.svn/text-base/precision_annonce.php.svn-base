<?php
	Header('Content-Type: text/html; charset=ISO-8859-1'); 
	echo '<TABLE>';
	echo '<TR><TD>';
	echo '<table><th width=205px>';
	echo 'Nombre de piece : </th><td> <input class="chiffre" name="nbPiece" type="text"';
	if ($_POST['nbPiece'] != 0)
	{
		echo 'value="'.$_POST['nbPiece'].'"';
	}
	echo '/>';
	echo '</td></table>';
	echo '</TD>';
	echo '</TR>';
	
	echo '<TR><td>';
		echo '<table><th width=205px>';
	echo 'nombre de chambre : </th><td width=150px> <input name="nbChambre" class="chiffre"  type="text"';
	if ($_POST['nbChambre'] != 0)
	{
		echo 'value="'.$_POST['nbChambre'].'"';
	}
	echo '/>';
	echo '</td></table>';
	echo '</TD>';
	
	echo '</TR>';
	
	echo '<TR><TD>';
	echo '<table><th width=205px>';
	echo 'Surface habitable : </th><td> <input name="surfHab" class="chiffre"  type="text"';
	if ($_POST['surfHab'] != 0)
	{
		echo 'value="'.$_POST['surfHab'].'"';
	}
	echo '/>';
	echo '</td></table>';
	echo '</TD>';
	echo '</TR>';
	
	echo '<TR><TD>';
	echo '<table><th width=205px>';
	echo 'Surface terrain : </th><td><input name="surfTer" class="chiffre"  type="text"';
	if ($_POST['surfTer'] != 0)
	{
		echo 'value="'.$_POST['surfTer'].'"';
	}
	echo '/>';
	echo '</td></table>';
	echo '</TD>';
	
	echo '</TR>';
	
	echo '<TR><TD>';
	echo '<table><th width=205px>';
	echo 'Nombre d\'etage : </th><td> <input name="nbEtage" class="chiffre"  type="text"';
	if ($_POST['nbEtage'] != 0)
	{
		echo 'value="'.$_POST['nbEtage'].'"';
	}
	echo '/>';
	echo '</td></table>';
	echo '</TD>';
	echo '</TR>';
	
	
	echo '<TR><TD>';
	echo '<table><th width=205px>';
	echo 'Année de construction : </th><td> <input name="anneCons"  type="text"';
	if ($_POST['anneCons'] != 0)
	{
		echo 'value="'.$_POST['anneCons'].'"';
	}
	echo '/>';
	echo '</td></table>';
	echo '</TD>';
	echo '</TR>';
	
	
	
	echo '<TR><TD>';
	echo '<table><th width=205px>';
	echo 'Type de Cuisine : </th><td> <input name="cuisine" type="text"';
	if ($_POST['cuisine'] != '')
	{
		echo 'value="'.$_POST['cuisine'].'"';
	}
	echo '/>';
	echo '</td></table>';
	echo '</TD>';
	echo '</TR>';
	
	include('connexion.php');
	
	echo '<TR><TD>';
	echo '<table><th width=198px>';
	echo 'Type de Vente <font color="red">*</font>  </th><td>';
	echo '<select name="type_vente" id="type_vente" style="width:175"  class="obligatoire2">';
		echo '<option value="0" selected>Sélectionner un type de vente</option>';
			$req3="SELECT * FROM `type_vente` WHERE id_type_vente LIKE '1%'  ;";
			$exReq3=mysql_query($req3) or die("requete 3 invalide : " . mysql_error());
			while($resuReq3=mysql_fetch_array($exReq3))
			{
				echo '<option value="'.$resuReq3['id_type_vente'].'" ';
				
				if (isset($_POST['type_vente']))
				{
					if ($resuReq3['id_type_vente'] == $_POST['type_vente'])
					{
						echo ' selected ';
					}
				}
				
				echo ' > '.$resuReq3['lib_type_vente'].' </option>';
			}
		echo '</select>';
	
	
	echo '</td></table>';
	echo '</TD>';
	echo '</TR>';
	
	
	
	
	echo '</TABLE>'
	
	
?>
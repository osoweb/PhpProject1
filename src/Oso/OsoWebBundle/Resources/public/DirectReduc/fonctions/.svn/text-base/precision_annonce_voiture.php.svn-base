<?php
	Header('Content-Type: text/html; charset=ISO-8859-1'); 
	echo '<TABLE>';
	echo '<TR><TD>';
	echo '<table><th width=210px>';
	echo 'Kilometrage : </th><td> <input name="kiloVoit" class="chiffre" type="text"';
	if ($_POST['kiloVoit'] != 0)
	{
		echo 'value="'.$_POST['kiloVoit'].'"';
	}
	echo '/>';
	echo '</td></table>';
	echo '</TD>';
	
	echo '</TD></TR>';
	
	echo '<TR><TD>';
		echo '<table><th width=210px>';																							   
	echo 'Type d\'énergie : </th><td width=150px> ';
	echo '<select name="energie_voit" style="width:150;" >';
		echo '<option value="0" ';
		if ($_POST['energie_voit'] == 0)
		{
			echo ' selected ';
		}
		echo '>Tous</option>';
		echo '<option value="1" ';	
		if ($_POST['energie_voit']  == 1)
		{
			echo ' selected ';
		}
		echo '>Diesel</option>';
		echo '<option value="2" ';
		if ($_POST['energie_voit']  == 2)
		{
		echo ' selected ';
		}
		echo '>Essence</option>';
		echo '<option value="3" ';
		if ($_POST['energie_voit']  == 3)
		{
		echo ' selected ';
		}
		echo '>GPL</option>';
		echo '<option value="4" ';
		if ($_POST['energie_voit']  == 4)
		{
		echo ' selected ';
		}
		echo '>Électrique</option>';				
	echo '</select>';
	echo '</td></table>';
	echo '</TD>';
	echo '<TD>';
	echo '<table><td width=70px>';
	echo '  </td><td>'; 
	echo '</td></table>';
	echo '</TD></TR>';
	
	echo '<TR><TD>';
	echo '<table><th width=210px>';
	echo 'Type de boite de vitesse: </th><td width=150px>';
	echo '<select name="boite_vitesse" style="width:150;" >';
				echo '<option value="0" ';
				if ($_POST['boite_vitesse'] == 0)
				{
					echo ' selected ';
				}
				echo '>Tous</option>';
				echo '<option value="1" ';
				if ($_POST['boite_vitesse'] == 1)
				{
					echo ' selected ';
				}
				echo '>Manuel</option>';
				echo '<option value="2" ';
				if ($_POST['boite_vitesse'] == 2)
				{
					echo ' selected ';
				}
				echo '>Automatique</option>';
			echo '</select>';
	echo '</td></table>';
	echo '</TD>';
	echo '<TD>';
	echo '<table><td width=70px>';
	echo '</td><td>';
	echo '</td></table>';
	echo '</TD></TR>';
	
	echo '<TR><TD>';
	echo '<table><th width=210px>';
	echo 'Année : </th><td><input name="anneMise" class="chiffre" type="text"';
	if ($_POST['anneMise'] != 0)
	{
		echo 'value="'.$_POST['anneMise'].'"';
	}
	echo '/>';
	echo '</td></table>';
	echo '</TD>';
	echo '<TD>';
	echo '<table><td width=70px>';
	echo ' </td><td>';
	echo '</td></table>';
	echo '</TD></TR>';
	
	include('connexion.php');
	
	echo '<TR><TD>';
	echo '<table><th width=198px>';
	echo 'Type de Vente <font color="red">*</font>  </th><td>';
	echo '<select name="type_vente" id="type_vente" style="width:175"  class="obligatoire2">';
		echo '<option value="0" selected>Sélectionner un type de vente</option>';
			$req3="SELECT * FROM `type_vente` WHERE id_type_vente LIKE '2%'  ;";
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
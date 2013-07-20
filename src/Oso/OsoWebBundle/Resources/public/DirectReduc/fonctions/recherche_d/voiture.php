<?php
	Header('Content-Type: text/html; charset=ISO-8859-1'); 
	echo '<TABLE>';
	echo '<TR><TD>';
	echo '<table><td width=200px>';
	echo 'Kilometrage : </td><td> <input name="kiloVoitMin" type="text"';
	if ($_POST['kiloVoitMin'] != 0)
	{
		echo 'value="'.$_POST['kiloVoitMin'].'"';
	}
	echo '/>';
	echo '</td></table>';
	echo '</TD>';
	echo '<TD>';
	echo '<table><td width=70px>';
	echo ' maximum : </td><td> <input name="kiloVoitMax" type="text"';
	if ($_POST['kiloVoitMax'] != 0)
	{
		echo 'value="'.$_POST['kiloVoitMax'].'"';
	}
	echo '/>';
	echo '</td></table>';
	echo '</TD></TR>';
	
	echo '<TR><TD>';
		echo '<table><td width=200px>';																							   
	echo 'Type d\'énergie : </td><td width=150px> ';
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
	echo '<table><td width=200px>';
	echo 'Type de boite de vitesse: </td><td width=150px>';
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
	echo '<table><td width=200px>';
	echo 'Année : </td><td><input name="anneMise" type="text"';
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
	echo '</TABLE>'
	
	
?>
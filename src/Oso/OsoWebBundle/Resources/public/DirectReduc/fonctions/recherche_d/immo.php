<?php
	Header('Content-Type: text/html; charset=ISO-8859-1'); 
	echo '<TABLE>';
	echo '<TR><TD>';
	echo '<table><td width=200px>';
	echo 'Nombre de piece minimum : </td><td> <input name="nbPieceMin" type="text"';
	if ($_POST['nbPieceMin'] != 0)
	{
		echo 'value="'.$_POST['nbPieceMin'].'"';
	}
	echo '/>';
	echo '</td></table>';
	echo '</TD>';
	echo '<TD>';
	echo '<table><td width=70px>';
	echo ' maximum : </td><td> <input name="nbPieceMax" type="text"';
	if ($_POST['nbPieceMax'] != 0)
	{
		echo 'value="'.$_POST['nbPieceMax'].'"';
	}
	echo '/>';
	echo '</td></table>';
	echo '</TD></TR>';
	
	echo '<TR><TD>';
		echo '<table><td width=200px>';
	echo 'nombre de chambre minimum : </td><td width=150px> <input name="nbChambreMini" type="text"';
	if ($_POST['nbChambreMini'] != 0)
	{
		echo 'value="'.$_POST['nbChambreMini'].'"';
	}
	echo '/>';
	echo '</td></table>';
	echo '</TD>';
	echo '<TD>';
	echo '<table><td width=70px>';
	echo ' maximum: </td><td> <input name="nbChambremax" type="text"';
	if ($_POST['nbChambremax'] != 0)
	{
		echo 'value="'.$_POST['nbChambremax'].'"';
	}
	echo '/>';
	echo '</td></table>';
	echo '</TD></TR>';
	
	echo '<TR><TD>';
	echo '<table><td width=200px>';
	echo 'Surface habitable minimum : </td><td> <input name="surfHabMini" type="text"';
	if ($_POST['surfHabMini'] != 0)
	{
		echo 'value="'.$_POST['surfHabMini'].'"';
	}
	echo '/>';
	echo '</td></table>';
	echo '</TD>';
	echo '<TD>';
	echo '<table><td width=70px>';
	echo ' maximum : </td><td> <input name="surfHabMax" type="text"';
	if ($_POST['surfHabMax'] != 0)
	{
		echo 'value="'.$_POST['surfHabMax'].'"';
	}
	echo '/>';
	echo '</td></table>';
	echo '</TD></TR>';
	
	echo '<TR><TD>';
	echo '<table><td width=200px>';
	echo 'Surface terrain minimum : </td><td><input name="surfTerMini" type="text"';
	if ($_POST['surfTerMini'] != 0)
	{
		echo 'value="'.$_POST['surfTerMini'].'"';
	}
	echo '/>';
	echo '</td></table>';
	echo '</TD>';
	echo '<TD>';
	echo '<table><td width=70px>';
	echo ' maximum : </td><td> <input name="surfTerMax" type="text"';
	if ($_POST['surfTerMax'] != 0)
	{
		echo 'value="'.$_POST['surfTerMax'].'"';
	}
	echo '/>';
	echo '</td></table>';
	echo '</TD></TR>';
	
	echo '<TR><TD>';
	echo '<table><td width=200px>';
	echo 'Nombre d\'etage minimum : </td><td> <input name="nbEtageMini" type="text"';
	if ($_POST['nbEtageMini'] != 0)
	{
		echo 'value="'.$_POST['nbEtageMini'].'"';
	}
	echo '/>';
	echo '</td></table>';
	echo '</TD>';
	echo '<TD>';
	echo '<table><td width=70px>';
	echo ' maximum : </td><td> <input name="nbEtageMax" type="text"';
	if ($_POST['nbEtageMax'] != 0)
	{
		echo 'value="'.$_POST['nbEtageMax'].'"';
	}
	echo '/>';
	echo '</td></table>';
	echo '</TD></TR>';
	
	
	echo '<TR><TD>';
	echo '<table><td width=200px>';
	echo 'Année de construction minimum : </td><td> <input name="anneConsMini" type="text"';
	if ($_POST['anneConsMini'] != 0)
	{
		echo 'value="'.$_POST['anneConsMini'].'"';
	}
	echo '/>';
	echo '</td></table>';
	echo '</TD>';
	echo '<TD>';
	echo '<table><td width=70px>';
	echo ' maximum : </td><td> <input name="anneConsMax" type="text"';
	if ($_POST['anneConsMax'] != 0)
	{
		echo 'value="'.$_POST['anneConsMax'].'"';
	}
	echo '/>';
	echo '</td></table>';
	echo '</TD></TR>';
	echo '</TABLE>'
	
	
?>
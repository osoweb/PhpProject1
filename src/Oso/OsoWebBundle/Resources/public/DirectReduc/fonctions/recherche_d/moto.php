<?php
	Header('Content-Type: text/html; charset=ISO-8859-1'); 
	echo '<TABLE>';
	echo '<TR><TD>';
	echo '<table><td width=200px>';
		echo 'Kilometrage : </td><td> <input name="kiloMotoMin" type="text"';
	if ($_POST['kiloMotoMin'] != 0)
	{
		echo 'value="'.$_POST['kiloMotoMin'].'"';
	}
	echo '/>';
	echo '</td></table>';
	echo '</TD>';
	echo '<TD>';
	echo '<table><td width=70px>';
	echo ' maximum : </td><td> <input name="kiloMotoMax" type="text"';
	if ($_POST['kiloMotoMax'] != 0)
	{
		echo 'value="'.$_POST['kiloMotoMax'].'"';
	}
	echo '/>';
	echo '</td></table>';
	echo '</TD></TR>';
	echo '<TR><TD>';
		echo '<table><td width=200px>';																							   
	echo 'Cylindre : </td><td width=150px> ';
	echo '<select name="cylindre" style="width:150;" >';
		echo '<option value="0" ';
		if ($_POST['cylindre'] == 0)
		{
			echo ' selected ';
		}
		echo '>50</option>';
		echo '<option value="1" ';	
		if ($_POST['cylindre']  == 1)
		{
			echo ' selected ';
		}
		echo '>125</option>';
		echo '<option value="2" ';
		if ($_POST['cylindre']  == 2)
		{
		echo ' selected ';
		}
		echo '>250</option>';
		echo '<option value="3" ';
		if ($_POST['cylindre']  == 3)
		{
		echo ' selected ';
		}
		echo '>500</option>';
		echo '<option value="4" ';
		if ($_POST['cylindre']  == 4)
		{
		echo ' selected ';
		}
		echo '>600</option>';	
		echo '<option value="5" ';
		if ($_POST['cylindre']  == 5)
		{ 
		echo ' selected ';
		}
		echo '>750</option>';
        echo '<option value="6" ';
		if ($_POST['cylindre']  == 6)
		{
		echo ' selected ';
		}
		echo '>1000</option>';	
        echo '<option value="7" ';
		if ($_POST['cylindre']  == 7)
		{
		echo ' selected ';
		}
		echo '>plus de 1000</option>';		
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
	echo 'Année : </td><td><input name="anneMisemoto" type="text"';
	if ($_POST['anneMisemoto'] != 0)
	{
		echo 'value="'.$_POST['anneMisemoto'].'"';
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
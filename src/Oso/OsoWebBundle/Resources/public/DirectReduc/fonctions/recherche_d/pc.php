<?php
		Header('Content-Type: text/html; charset=ISO-8859-1'); 
		echo '<table><td width=200px>';																							   
	echo 'Genre  : </td><td width=150px> ';
	echo '<select name="categpc" style="width:150;" >';
		echo '<option value="0" ';
		if ($_POST['categpc'] == 0)
		{
			echo ' selected ';
		}
		echo '>PC de bureau</option>';
		echo '<option value="1" ';	
		if ($_POST['categpc']  == 1)
		{
			echo ' selected ';
		}
		echo '>Portable</option>';
		echo '<option value="2" ';
		if ($_POST['categpc']  == 2)
		{
		echo ' selected ';
		}
		echo '>PDA</option>';
		echo '<option value="3" ';
		if ($_POST['categpc']  == 3)
		{
		echo ' selected ';
		}
		echo '>Ecran</option>';
		echo '<option value="4" ';
		if ($_POST['categpc']  == 4)
		{
		echo ' selected ';
		}
		echo '>Périphériques et stockage</option>';	
		echo '<option value="5" ';
		if ($_POST['categpc']  == 5)
		{ 
		echo ' selected ';
		}
		echo '>Apple</option>';
		echo '<option value="6" ';
		if ($_POST['categpc']  == 6)
		{ 
		echo ' selected ';
		}
		echo '>Logiciels</option>';
        echo '<option value="7" ';
		if ($_POST['categpc']  == 7)
		{
		echo ' selected ';
		}
		echo '>consommable</option>';			
		echo '</select>';
	echo '</td></table>';
	echo '</TD>';
	echo '<TD>';
	echo '<table><td width=70px>';
	echo '</td><td>';
	echo '</td></table>';
	echo '</TD></TR>';

?>
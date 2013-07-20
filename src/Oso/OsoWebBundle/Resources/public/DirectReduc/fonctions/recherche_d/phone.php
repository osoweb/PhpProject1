<?php
		 Header('Content-Type: text/html; charset=ISO-8859-1'); 
		echo '<table><td width=200px>';																							   
	echo 'Sélectionner une marque: </td><td width=150px> ';
	echo '<select name="marque" style="width:150;" >';
		echo '<option value="0" ';
		if ($_POST['marque'] == 0)
		{
			echo ' selected ';
		}
		echo '>iPhone</option>';
		echo '<option value="1" ';	
		if ($_POST['marque']  == 1)
		{
			echo ' selected ';
		}
		echo '>Blackberry</option>';
		echo '<option value="2" ';
		if ($_POST['marque']  == 2)
		{
		echo ' selected ';
		}
		echo '>Nokia</option>';
 		echo '<option value="3" ';
		if ($_POST['marque']  == 3)
		{
		echo ' selected ';
		}
		echo '>Samsung</option>';
		echo '<option value="4" ';
		if ($_POST['marque']  == 4)
		{
		echo ' selected ';
		}
		echo '>Sony-Ericsson</option>';	
		echo '<option value="5" ';
		if ($_POST['marque']  == 5)
		{ 
		echo ' selected ';
		}
		echo '>Sagem</option>';
        echo '<option value="6" ';
		if ($_POST['marque']  == 6)
		{
		echo ' selected ';
		}
		echo '>HTC</option>';	
        echo '<option value="7" ';
		if ($_POST['marque']  == 7)
		{
		echo ' selected ';
		}
		echo '>Motorola</option>';	
        echo '<option value="8" ';
		if ($_POST['marque']  == 8)
		{
		echo ' selected ';
		}
		echo '>LG</option>';	
        echo '<option value="9" ';
		if ($_POST['marque']  == 9)
		{
		echo ' selected ';
		}
		echo '>Autres</option>'; 	
		echo '</select>';
	echo '</td></table>';
	echo '</TD>';
	echo '<TD>';

	echo '<table><td width=70px>';
	echo ' </td><td>';
	echo '</td></table>';
	echo '</TD></TR>';
	echo '</TABLE>' 
?>
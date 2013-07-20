<?php Header('Content-Type: text/html; charset=ISO-8859-1'); 
include 'connexion.php';
if (isset($_GET['region']))
	{
		if ($_GET['region'] != 99)
		{
		echo '<select name="depart" id="depart" style="width:165" OnChange="vill();"  class="obligatoire2">';
		echo '<option value="0" selected>Sélectionner un département</option>';
			$req3="SELECT ID_DEPT, LIB_DEPT FROM `departement` WHERE ID_REG =".$_GET['region']." ORDER BY LIB_DEPT ;";
			$exReq3=mysql_query($req3) or die("requete 3 invalide : " . mysql_error());
			while($resuReq3=mysql_fetch_array($exReq3))
			{
				echo '<option value="'.$resuReq3['ID_DEPT'].'"';
				
				if (isset($_GET['depart']))
				{
					if ($resuReq3['ID_DEPT'] == $_GET['depart'])
					{
						echo ' selected ';
					}
				}
				
				echo '>'.$resuReq3['LIB_DEPT'].'</option>';
			}
		echo '</select>';
		}
	}
	if (isset($_GET['departement']))
	{
		if ($_GET['departement'] != 0)
		{
		echo '<select name="ville" id="vi" style=""  class="obligatoire2">';
		echo '<option value="0" selected>Sélectionner une ville</option>';
			$req3="SELECT ID_VILLE, LIB_VILLE FROM `ville` WHERE ID_DEPT =".$_GET['departement']." ORDER BY LIB_VILLE;";
			$exReq3=mysql_query($req3) or die("requete 3 invalide : " . mysql_error());
			while($resuReq3=mysql_fetch_array($exReq3))
			{
				echo '<option value="'.$resuReq3['ID_VILLE'].'"';
				if (isset($_GET['ville_select']))
				{
					if ($resuReq3['ID_VILLE'] == $_GET['ville_select'])
					{
						echo ' selected ';
					}
				}
				echo '>'.$resuReq3['LIB_VILLE'].'</option>';
			}
	echo '</select>';
	}
	}
include 'deconnexion.php';
?>
<?php

	
	$query='SELECT * FROM utilisateur WHERE UTIL_ID="'.$id. '"';
	$result=mysql_query($query) or die ("Error in query: $query. " . mysql_error());	
	$data=mysql_fetch_array($result);

	//$=$data['UTIL_ID'];
	$type=$data['UTIL_TYPE'];
	$login=$data['UTIL_USER'];
	$mdp=$data['UTIL_PASSWORD'];
	$date_inscr=$data['UTIL_DATE'];
	$date_log=$data['UTIL_DATE_LOG'];
	//$=$data['UTIL_IP'];
	$statut=$data['UTIL_STATUT'];
	$mail=$data['UTIL_MAIL'];
	//$cp=$data['UTIL_CP'];
	$phone=$data['UTIL_PHONE'];
	//$local_offre=$data['UTIL_CP'];
	$ville_id=$data['ID_VILLE'];
	$auth_mail=$data['AUTH_MAIL'];
	
	$query='SELECT * FROM ville, departement, region WHERE region.ID_REG=departement.ID_REG AND ville.ID_DEPT=departement.ID_DEPT AND ville.ID_VILLE="'.$ville_id. '"';
	$result=mysql_query($query) or die ("Error in query: $query. " . mysql_error());	
	$data=mysql_fetch_array($result);
	$ville=$data['LIB_VILLE'];
	$departement=$data['LIB_DEPT'];
	$region=$data['LIB_REG'];

	$id_departement=$data['ID_DEPT'];
	$id_region=$data['ID_REG'];
?>
<?php

$mdp=$_GET["mdp"];
$type=$_GET["type"];
$mail=$_GET["mail"];
$id_ville=$_GET["id_ville"];


if(isset($_GET["tel"])){
$tel=$_GET["tel"];
}else  $tel="";

$user_id=$_GET["user_id"];

//echo $user;

										/* ------------------------------------ */
										/*           Connection SQL            */
										/* ------------------------------------ */

include('../fonctions/connexion.php');
//$requete="INSERT INTO login values('$mail','$mdp',now(),'$dep','$type')"; //La fonction now() permet de recupérer la date du jour dans le format time de mysql
$requete="UPDATE `directreduc`.`utilisateur` SET `UTIL_TYPE` = '$type',
`UTIL_PASSWORD` = '$mdp',
`UTIL_MAIL` = '$mail',
`ID_VILLE` = '$id_ville',
`UTIL_PHONE` = '$tel' WHERE `utilisateur`.`UTIL_ID` ='$user_id'";


if(!mysql_query($requete))
{
	echo "Erreur n ",mysql_errno()," ",mysql_error();
	}else echo 'Modification finie';
?>


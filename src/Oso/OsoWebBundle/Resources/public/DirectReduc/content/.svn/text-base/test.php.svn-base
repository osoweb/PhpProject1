<?php
if(isset($_GET["mail"])){

	$mail=$_GET["mail"];
}else  $mail="";


if(isset($_GET["mdp"])){
	$mdp=$_GET["mdp"];
}else $mdp="";
$choix=$_GET["choix"];
if(isset($_GET['nom'])){
	$nom=$_GET["nom"];
}else $nom="";

function VerifierDispo($chaine,$type)
{
	if(isset($_GET["mail_base"])){
		$mail_base=$_GET["mail_base"];
	}else  
	{
	if($type)
		$mail_base=$chaine;
	else
		$mail_base='';
	}
		
	
	include('../fonctions/connexion.php');
	if($type)
	$requete="SELECT `UTIL_MAIL` FROM utilisateur";
	else $requete="SELECT `UTIL_USER` FROM utilisateur";
	$mess=mysql_query($requete);
	$rang=mysql_fetch_assoc($mess);

	while ($rang)
	{	
		if($type)
		$verif=$rang["UTIL_MAIL"];
		else $verif=$rang["UTIL_USER"];
		if (($verif==$chaine) && ($chaine!=$mail_base))
		{
			return false;
		}
		$rang=mysql_fetch_assoc($mess);
	}
	return true;
}



function VerifierAdresseMail($adresse)
{
	$Syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
	if(preg_match($Syntaxe,$adresse))
	return true;
	else
	return false;
}


switch($choix)
{
case 1 : {
		$erreur=2;
		if(!VerifierAdresseMail($mail))
		{
			$erreur=2; //mail incorrecte
		}else if(!VerifierDispo($mail,true))
		{
			$erreur=3; //mail non disponible
		}else $erreur=4;
		echo $erreur;
		/*if(empty($mdp))
		{
			$erreur2=1; // mot de passe vide
		}else $erreur2=0;*/
	}
	break;

case 2 : { 
		if(!VerifierDispo($nom,false))
		{ //echo "j'suis la heho regarde!";
			$erreur=1; //nom non disponible
		}else $erreur=2;
		echo $erreur;
	}
	break;

case 3  : {
		$erreur=2;
		if(!VerifierAdresseMail($mail))
		{
			$erreur=2; //mail incorrecte
		} else $erreur=4;
		
		echo $erreur;
	}
	break;
	
}



?>
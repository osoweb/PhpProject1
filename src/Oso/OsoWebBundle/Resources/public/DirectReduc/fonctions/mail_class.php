<?php

class mail
{

	var	 $destinataire;
	var	 $expediteur;
	var	 $reponse;
	var	 $sujet;	
	var $entetemail;
	var $message;

	
	function mail($dest,$exp,$suj)
	{
	$this->destinataire = $dest;
	$this->expediteur   = $exp;
	$this->reponse  = $this->expediteur;
	$this->sujet= $suj;	
	}
	
	public function test_envoi_local($message)
	{
		$this->entete();
		$this->message= $message;	
		//mail($this->destinataire,$this->sujet,$this->message,$this->entetemail);
		echo $message;
		
	}
	
	public function entete()
	{
		
		$entetedate  = date("D, j M Y H:i:s"); // Offset horaire
		$this->entetemail  = "From: ".$this->expediteur." \n"; // Adresse expéditeur
		$this->entetemail .= "Cc: \n";
		$this->entetemail .= "Bcc: \n"; // Copies cachées
		$this->entetemail .= "Reply-To: ".$this->reponse." \n"; // Adresse de retour
		$this->entetemail .= "X-Mailer: PHP/" . phpversion() . "\n" ;
		$this->entetemail .= "Date: $entetedate";
		$this->entetemail .= 'Mime-Version: 1.0'."\r\n";
		$this->entetemail .= 'Content-type: text/html; charset="iso-8859-1"'."\r\n";
		$this->entetemail .= 'Content-Transfer-Encoding: 8bit'."\n";
	}

		public function envoi_mail($message)
	{
		$this->entete();
		$this->message= $message;	
		$texte="Ce script envoie un mail au format HTML <br/>";
		mail($this->destinataire,$this->sujet,$this->message,$this->entetemail);
		//echo $texte;
	}

	
	public function envoi_mail_html()
	{
		
		$this->entete();
		$codehtml="
		<HTML>
	<HEAD>
		<TITLE>Direct Reduc</TITLE>
		<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
		<meta http-equiv=\"X-UA-Compatible\" content=\"IE=EmulateIE7\" />
	</HEAD>
	
	<BODY>
	
	<style type='text/css'>
	h1{
	color:red;
	display: inline;
	}
	h2{
		size:10px;
		display: inline;
	}
	#actu{
		
		position: relative;
		padding: 10px;
		margin-top: 10px;
		width: 30%;
		float: left; 
		border-right:1px;
	}
	
	#dossier{
		
		position: relative;
		padding: 10px;
		margin-top: 10px;
		width: 30%;
		float: left;
		margin-left: 10px;
		margin-bottom: 10px; 
	}
	
	#mouv{
		
		position: relative;
		padding: 10px;
		margin-top: 10px;
		width: 30%;
		margin-left: 10px;
		float: left; 
	}
	
	.separation_gch{
	clear: both;
	position: absolute;
	height: 400px;
	width : 1px;
	background: black;
	}
	
	.separation_dte{
	clear: both;
	margin-left: 320px;
	position: absolute;
	height: 600px;
	width : 1px;
	background: black;
	}
	
	A:link {
	text-decoration:none;
	font-weight:bold;
	display: inline;
	}

A:visited {
text-decoration:none;
font-weight:bold;
display: inline;
}

A:hover {
color: black ; 
text-decoration: underline; 
font-size: 16px; 
display: inline;
font-weight:bold;
display: inline;
}

#texte{

width: 80%;
}

	</style>
	
		
	<div id='actu'>
		
		
		<h1>Actualit&eacute;s</h1><br /><br />
		
			<a href='http://www.vidati.fr/priximmo.php'><h2>Prix de l'immobilier</h2></a><br />
			<div id='texte'>
	Les différentes sources d'informations peuvent vous mettre d'avoir une base d'informations, l'avis de valeur de votre agent immobilier VIDATI IMMO vous précise la valeur de votre bien immobilier en France. VIDATI IMMO, expert immobilier vous fournit une expertise immobiliere dans le cadre d'une déclaration d'impôt ISF, donation
			</div>
			<hr noshade style=\"width:250px; height:1px; margin-left:7px; border-color: #ccccc;\">
		
			<a href='http://www.vidati.fr/priximmo.php'><h2>Prix de l'immobilier</h2></a><br />
			<div id='texte'>
	Les différentes sources d'informations peuvent vous mettre d'avoir une base d'informations, l'avis de valeur de votre agent immobilier VIDATI IMMO vous précise la valeur de votre bien immobilier en France. VIDATI IMMO, expert immobilier vous fournit une expertise immobiliere dans le cadre d'une déclaration d'impôt ISF, donation
			</div>
			<hr noshade style=\"width:250px; height:1px; margin-left:7px; border-color: #ccccc;\">
	</div>
		
	<div id='dossier'>
		<div id='info'>
			
			
			<h1>Dossiers</h1><br /><br />
			<a href='http://www.vidati.fr/priximmo.php'><h2>Prix de l'immobilier</h2></a><br />
			<div id='texte'>
	Les différentes sources d'informations peuvent vous mettre d'avoir une base d'informations, l'avis de valeur de votre agent immobilier VIDATI IMMO vous précise la valeur de votre bien immobilier en France. VIDATI IMMO, expert immobilier vous fournit une expertise immobiliere dans le cadre d'une déclaration d'impôt ISF, donation
			</div>
			<hr noshade style=\"width:250px; height:1px; margin-left:7px; border-color: #ccccc;\">
			<a href='http://www.vidati.fr/priximmo.php'><h2>Prix de l'immobilier</h2></a><br />
			<div id='texte'>
	Les différentes sources d'informations peuvent vous mettre d'avoir une base d'informations, l'avis de valeur de votre agent immobilier VIDATI IMMO vous précise la valeur de votre bien immobilier en France. VIDATI IMMO, expert immobilier vous fournit une expertise immobiliere dans le cadre d'une déclaration d'impôt ISF, donation
			</div>
			<hr noshade style=\"width:250px; height:1px; margin-left:7px; border-color: #ccccc;\">
			
			<a href='http://www.vidati.fr/priximmo.php'><h2>Prix de l'immobilier</h2></a><br />
			<div id='texte'>
	Les différentes sources d'informations peuvent vous mettre d'avoir une base d'informations, l'avis de valeur de votre agent immobilier VIDATI IMMO vous précise la valeur de votre bien immobilier en France. VIDATI IMMO, expert immobilier vous fournit une expertise immobiliere dans le cadre d'une déclaration d'impôt ISF, donation
			</div>
			

			
		</div>
		<br />
		<div id='info2'>
			<h1>D&eacute;fiscalisation</h1><br /><br/>
						<a href=\'http://www.vidati.fr/priximmo.php\'><h2>Prix de l\'immobilier</h2></a><br />
			<div id=\'texte\'>
	Les différentes sources d\'informations peuvent vous mettre d\'avoir une base d\'informations, l\'avis de valeur de votre agent immobilier VIDATI IMMO vous précise la valeur de votre bien immobilier en France. VIDATI IMMO, expert immobilier vous fournit une expertise immobiliere dans le cadre d\'une déclaration d\'impôt ISF, donation
			</div>
			<hr noshade style=\"width:250px; height:1px; margin-left:7px; border-color: #ccccc;\">
						<a href=\'http://www.vidati.fr/priximmo.php\'><h2>Prix de l\'immobilier</h2></a><br />
			<div id=\'texte\'>
	Les différentes sources d\'informations peuvent vous mettre d\'avoir une base d\'informations, l\'avis de valeur de votre agent immobilier VIDATI IMMO vous précise la valeur de votre bien immobilier en France. VIDATI IMMO, expert immobilier vous fournit une expertise immobiliere dans le cadre d\'une déclaration d\'impôt ISF, donation
			</div>
			<hr noshade style=\"width:250px; height:1px; margin-left:7px; border-color: #ccccc;\">

		</div>
	</div>
	
	<div id=\'mouv\'>
		<div id=\'interview\'>
			<h1>Interview</h1><br/><br/>
						<a href=\'http://www.vidati.fr/priximmo.php\'><h2>Prix de l\'immobilier</h2></a><br />
			<div id=\'texte\'>
	Les différentes sources d\'informations peuvent vous mettre d\'avoir une base d\'informations, l\'avis de valeur de votre agent immobilier VIDATI IMMO vous précise la valeur de votre bien immobilier en France. VIDATI IMMO, expert immobilier vous fournit une expertise immobiliere dans le cadre d\'une déclaration d\'impôt ISF, donation
			</div>
			<hr noshade style=\"width:250px; height:1px; margin-left:7px; border-color: #ccccc;\">

		</div>
		<div id=\'fil\'>
			<h1>Fil de l\'actualit&eacute;</h1><br/><br/>
			<a href=\'http://www.vidati.fr/priximmo.php\'><h2>Prix de l\'immobilier</h2></a><br />
			<div id=\'texte\'>
	Les différentes sources d\'informations peuvent vous mettre d\'avoir une base d\'informations, l\'avis de valeur de votre agent immobilier VIDATI IMMO vous précise la valeur de votre bien immobilier en France. VIDATI IMMO, expert immobilier vous fournit une expertise immobiliere dans le cadre d\'une déclaration d\'impôt ISF, donation
			</div>
			<hr noshade style=\"width:250px; height:1px; margin-left:7px; border-color: #ccccc;\">

		</div>
		<div id=\'tableau\'>
			<h1>Tableau de bord</h1><br/><br/>
						<a href=\'http://www.vidati.fr/priximmo.php\'><h2>Prix de l\'immobilier</h2></a><br />
			<div id=\'texte\'>
	Les différentes sources d\'informations peuvent vous mettre d\'avoir une base d\'informations, l\'avis de valeur de votre agent immobilier VIDATI IMMO vous précise la valeur de votre bien immobilier en France. VIDATI IMMO, expert immobilier vous fournit une expertise immobiliere dans le cadre d\'une déclaration d\'impôt ISF, donation
			</div>
			<hr noshade style=\"width:250px; height:1px; margin-left:7px; border-color: #ccccc;\">

		</div>
	</div>
	
	</BODY>
</HTML>
		";
		$texte="Ce script envoie un mail au format HTML à $this->destinataire <br/>";
		mail($this->destinataire,$this->sujet,$codehtml,$this->entetemail);
		echo $texte;
		echo $codehtml;
	}
}
?>
<Script type='text/javascript' src="content/test.js"></script>
<?php
$id_annonce=$_GET['id_annonce'];
$titre=strtr($_GET['titre_annonce'], "_", " ");

if(isset($_POST['nom']))
{
	if((!isset($_SESSION['ADMIN']) AND ($_SESSION['ADMIN']<=0)) && !isset($_SESSION[$_GET['titre_annonce'].$id_annonce]))
	{
		echo '<br/><br/><p><center><font color=red>Vous avez deja envoyer un message pour cette annonce attendez une reponse de l\'utilisateur</font></center></p>';
	}
	else
	{
		$_SESSION[$_GET['titre_annonce'].$id_annonce]=1;
		include('fonctions/recup_donnee_annonce.php');
		include('fonctions/recup_donnee_user.php');
		include ('fonctions/date.php');
		include ('fonctions/fonctions.php');
		include('fonctions/mail_class.php');
		$d = new Date();
		
		$destinataire = $mail;
		$expediteur= $_POST['mail'];
		$sujet= 'Directreduc.com - '.$_POST['nom'].' est interesser par votre annonce: '.$titre.' - numero: '.$id_annonce;
		$message=nl2br(STRIPSLASHES( htmlspecialchars($_POST['message'])));
		
		$message.='<br/><br/>-------------------------------------------';
		$message.='<br/> Cet email vous est envoyer suite a votre annonce:<br/>';
		$message.='<a href="http://www.directreduc.com/'.$_GET['titre_annonce'].'-affiche_annonce-'.$id_annonce.'.html">';
		$message.='Cliquez-ici pour voir votre annonce</a>';
		$message.='<br/><br/> Merci de votre confiance et à très bientôt sur notre site,';
		$message.='<br/> N\'oubliez pas que l\'utilisateur ne connaitra votre email ';
		$message.='<br/> que si vous r&eacute;pondez.';
		
		echo '<br/><br/><p><center>Votre message a bien ete envoyer pour l\'annonce: '.$titre.' - numero: '.$id_annonce.',<br>';
		echo ' l\'utilisateur vous repondra sur votre email.</center></p>';
		$test=new mail($destinataire,$expediteur,$sujet);
		$test->envoi_mail($message);
		
		if(isset($_SESSION['ADMIN']) AND ($_SESSION['ADMIN']>0))
			echo $destinataire.'<br/>'.$expediteur.'<br/>'.$sujet.'<br/>'.$message;
	}
} else {
?>
<center>
<form action="<?php echo $_GET['titre_annonce'];?>-mail-<?php echo $id_annonce;?>.html" name="inscription" method="POST" onsubmit="return verif_envoi_mail()">
<table border="0"><tr><td>
<b>Nom : </b><input type="text" name="nom" size=72 maxlength=72><br>
<b>Mail : </b><input type="text" name="mail" size=72 maxlength=72 onKeyUp="verif_mail();"><br>
<textarea name="message" cols="60" rows="5"></textarea>
</td></tr>
<tr><td><div id="erreur"></div></td></tr>
</table><br>



<input type="submit" name="Envoyer" value="Envoyer">
<input type="reset" name="Submit" value="Effacer">
</form>
<hr>
</center>
<?php
}
?>
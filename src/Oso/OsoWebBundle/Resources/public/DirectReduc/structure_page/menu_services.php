<?php
echo '<ul id="menu_services_list"><div id="titre">Mon compte</div>';
		 
if(isset($_SESSION['ID']) ){
	
echo "<li><a> Bonjour ".$_SESSION['utilisateur']."! </a></li	>";
echo "<input type='button' value='Deconnexion' OnClick='logout();' />";

}else {
?>
<div id="error_login"></div>
<form method="GET"  name="connexion">
pseudo :<input type="text" name="myusername" value="<?php //echo $_COOKIE['nom_user']; ?>" size="15"></BR>
<?php
?>
mot de passe :<input type="password" name="mypassword" size="15">
</form>

<input type="button" name="submit" value="Connexion" onClick="login();" >
<form method='post' action='formInscription.html'>
<input type="submit"  value="Inscription">
</form>

<?php
}
?>
</ul>

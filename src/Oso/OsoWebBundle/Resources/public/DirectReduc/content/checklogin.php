<?php
session_start();
Header('Content-Type: text/html; charset=ISO-8859-1');
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="directreduc"; // Database name
$tbl_name="utilisateur"; // Table name
include('../fonctions/connexion.php');

// username and password sent from form
$myusername=$_GET['user'];
$mypassword=$_GET['mdp'];
// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE UTIL_USER='$myusername' and UTIL_PASSWORD='$mypassword'";
$result=mysql_query($sql);
$result2=mysql_fetch_assoc($result);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
if($result2['UTIL_STATUT']!=0)
{
// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("myusername");
//session_register("mypassword");
$_SESSION["mdp"]=$mypassword;
$_SESSION["ID"]=$result2['UTIL_ID'];
$_SESSION["ADMIN"]=$result2['ADMIN_LVL'];
$_SESSION["utilisateur"]=$myusername;
//header("location:login_success.php");
if(isset($_SESSION['ADMIN']) AND ($_SESSION['ADMIN']>0))
{
	echo "admin";
}else
{
echo '<ul id="menu_services_list"><div id="titre">Mon compte</div>';	
echo "<li><a> Bonjour ".$_SESSION['utilisateur']."! </a></li	>";
echo "<input type='button' value='Deconnexion' OnClick='logout();' />";
}

}else echo "1";
}
else {
echo "1";
}
include('../fonctions/deconnexion.php');
?>
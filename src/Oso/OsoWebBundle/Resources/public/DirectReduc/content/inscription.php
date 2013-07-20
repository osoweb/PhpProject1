<?php
/*
//fofo
	define('IN_PHPBB', true);
$phpbb_root_path =  '../phpBB3/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
require($phpbb_root_path . 'includes/functions_user.' . $phpEx);
$user->session_begin();
//fofo
//$auth->acl($user->data);

 */
?>


<?php
$mail=$_GET["mail"];
$mdp=$_GET["mdp"];
$type=$_GET["type"];
$tel=$_GET["tel"];
$ville=$_GET["ville"];
$nom=$_GET["nom"];
$siren = $_GET["siren"];


include('../fonctions/connexion.php');
										/* ------------------------------------------ */
										/*           inscription aux site             */
										/* ------------------------------------------ */									
//$requete="INSERT INTO login values('$mail','$mdp',now(),'$dep','$type')"; //La fonction now() permet de recupérer la date du jour dans le format time de mysql
$requete="INSERT INTO `directreduc`.`utilisateur` (`UTIL_ID`, `UTIL_TYPE`, `UTIL_USER`, `UTIL_PASSWORD`, `UTIL_DATE`, `ID_VILLE`, `UTIL_DATE_LOG`, `UTIL_IP`, `UTIL_STATUT`, `UTIL_MAIL`, `UTIL_PHONE`,`AUTH_MAIL`,`SIREN`) VALUES (NULL, '$type', '$nom', '$mdp', now(), '$ville', now(), NULL, '1', '$mail', '$tel', 0 ,'$siren')";



										/* ------------------------------------ */
										/*           partie forum               */
										/* ------------------------------------ */

/*
	//$user->setup('ucp');		
	$data = array(
   'username'         => utf8_normalize_nfc($nom),
   'password'         => $mdp,
   'password_confirm'   => $mdp,
   'email'            => $mail,
   'email_confirm'      => $mail,
	);
	
	
	     $group_name =  'REGISTERED';
      $sql = 'SELECT group_id
               FROM ' . GROUPS_TABLE . "
               WHERE group_name = '" . $db->sql_escape($group_name) . "'
                  AND group_type = " . GROUP_SPECIAL;
      $result = $db->sql_query($sql);
      $row = $db->sql_fetchrow($result);
      $db->sql_freeresult($result);
      
	  if (!$row)
      {
         trigger_error('NO_GROUP');
      }
      $group_id = $row['group_id'];
	  
	   $user_row = array(
         'username'            => $data['username'],
         'user_password'         => phpbb_hash($data['password']),
         'user_email'         => $data['email'],
         'group_id'            => (int) $group_id,
         'user_timezone'         => (float) $config['board_timezone'],
         'user_dst'            => $config['board_dst'],
         'user_lang'            => basename($user->lang_name),
         'user_type'            => USER_NORMAL,
         'user_actkey'         => '',
         'user_ip'            => $user->ip,
         'user_regdate'         => time(),
         'user_inactive_reason'   => 0,
         'user_inactive_time'   => 0,
      );
	  
	  
	  $user_id = user_add($user_row);
	  
	  
	   if ($user_id === false)
      {
         trigger_error('NO_USER', E_USER_ERROR);
      }
	  
	  
	  //fin fofo



*/

if(!mysql_query($requete))
{
	echo "Erreur n ",mysql_errno()," ",mysql_error();
	}else echo 'Inscription finie';
?>


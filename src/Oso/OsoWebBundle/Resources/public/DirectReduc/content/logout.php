<?php
/*
	define('IN_PHPBB', true);
$phpbb_root_path =  '../phpBB3/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
require($phpbb_root_path . 'includes/functions_user.' . $phpEx);
$user->session_begin();
*/

session_start();
session_destroy();


$user->session_kill();
$user->session_begin();
?>
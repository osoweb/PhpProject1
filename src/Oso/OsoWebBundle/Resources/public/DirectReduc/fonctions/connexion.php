<?php
//config BDD OSOWEB.FR   
     $bdd="directreduc";	$host="localhost";	$user="root";	$password=""; 

    
    $conn=mysql_connect($host, $user, $password) or die ("Connexion au serveur impossible");
    mysql_select_db($bdd) or die ("Connexion a la base impossible");

?>

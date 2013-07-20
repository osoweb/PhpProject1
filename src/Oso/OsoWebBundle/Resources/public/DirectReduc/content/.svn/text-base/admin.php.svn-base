<?php

include('../fonctions/connexion.php');
	$query='SELECT UTIL_ID FROM utilisateur';
	$result2=mysql_query($query) or die ("Error in query: $query. " . mysql_error());	
	$id_user=mysql_fetch_array($result2);
	

?>
<html>
<head>
    <title>Panneau d'administration</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

  <link type="text/css" href="../admin.css" rel="stylesheet" />
</head>

<body>
<div id="page">

  <div id="header">
      <div id="logo"><h1><a href="#" title="DirectReduc">Panneau d'administration</a></h1></div>
  </div>
      <div id="content">

                <h3><span class="title">Gestion de l'actualité</span><span class="underlined">&nbsp;</span></h3>
                Ceci permet de gérer l'actualité du site. A savoir, ajouter, supprimer ou modifier une actualité.<br/>
                <a href="../list_actu.html">Aller à la gestion de l'actualité</a>
                <h3><span class="title">Informations sur les comptes utilisateurs</span><span class="underlined">&nbsp;</span></h3>
<?php
//restaurer une entree
if(isset($_POST['restauration']))
{
echo 'Compte restauré<br /><br />';	


$query='SELECT * FROM utilisateur WHERE UTIL_ID="'.$_POST['restauration'].'"'; 
$result=mysql_query($query) or die ("Error in query: $query. " . mysql_error());
$data=mysql_fetch_array($result);

$query='UPDATE utilisateur SET `UTIL_STATUT` = "1" WHERE UTIL_ID ="'.$_POST['restauration'].'"';
mysql_query($query) or die ("Error in query: $query. " . mysql_error());
$query2='UPDATE offres SET OFFRE_STATUT = "1" WHERE UTIL_ID="'.$_POST['restauration'].'" AND OFFRE_STATUT= "-1"';
mysql_query($query2) or die ("Error in query: $query. " . mysql_error());
}

//suppression entree
if(isset($_POST['suppression']))
{
echo 'Compte effacé<br /><br />';	


$query='SELECT * FROM utilisateur WHERE UTIL_ID="'.$_POST['suppression'].'"'; 
$result=mysql_query($query) or die ("Error in query: $query. " . mysql_error());
$data=mysql_fetch_array($result);

$query='UPDATE utilisateur SET `UTIL_STATUT` = "-1" WHERE UTIL_ID ="'.$_POST['suppression'].'"';
mysql_query($query) or die ("Error in query: $query. " . mysql_error());
$query2='UPDATE offres SET OFFRE_STATUT = "-1" WHERE UTIL_ID="'.$_POST['suppression'].'" AND OFFRE_STATUT= "1"';
mysql_query($query2) or die ("Error in query: $query. " . mysql_error());
}
            echo "   <h3><span class='title'><span><span class='underlined'>&nbsp;</span></h3>";

                echo"  <table>
                      <thead>
                          <tr>
                            <th>ID Utilisateur</th>
                            <th>Type Utilisateur</th>
                            <th>Login</th>
							<th>Date Inscription</th>
							<th>Ville</th>
							<th>Dernière Visite</th>
							<th>Statut</th>
							<th>Mail</th>
							<th>Telephone</th>
							<th colspan='2' class='action'>Action</th>";
                        echo"  </tr>
                      </thead>
					  <tbody> ";

						
					  while($id_user)
					  {
						$id=$id_user['UTIL_ID'];
						include('../fonctions/recup_donnee_user.php');
						if($type==1) $type_lib="Particulier";
						else $type_lib="Professionel";
						
						if($statut==1) $statut_lib="Actif";
						else $statut_lib="En cours de suppression";
						
					  echo "

                          <tr class='row1'>
                            <td> ",$id,"</td>
							<td> ",$type_lib,"</td>
                            <td> ",$login,"</td>
							<td> ",$date_inscr,"</td>
							<td> ",$ville,"</td>
							<td> ",$date_log,"</td>
                            <td>",$statut_lib,"</td>
							<td>",$mail,"</td>
							
							<td>",$phone,"</td>"
							
							;?>
							<form id="delete<?php echo $id;?>" method="POST">
							<input type="hidden" name="suppression" value="<?php echo $id;?>" />
								<TD>
									<a href="#" onClick="if(confirm('Voulez vous vraiment supprimer ce compte? : '))	javascript:document.getElementById('delete<?php echo $id;?>').submit(); ">
										<img src='../images/icons/del.png' title='Suprimer' />
									</a>
								</TD>
							</form>
                           
							<?php

							if($statut!=1)
							{
								?>
								<form id="add<?php echo $id;?>" method="POST">
									<input type="hidden" name="restauration" value="<?php echo $id;?>" />
										<TD>
											<a href="#" onClick="if(confirm('Voulez vous vraiment restaurer ce compte? : '))	javascript:document.getElementById('add<?php echo $id;?>').submit(); ">
												<img src='../images/icons/add.gif' title='Restaurer' />
											</a>
										</TD>
									</form>
							<?php
							}
							else echo "<td></td>";
							
                        echo " </tr>";
						
				  $id_user=mysql_fetch_array($result2);
				  }

				  
				  echo "
				  </tbody>
				  </table>
                  <table>
                          <tr>
								Total: ",mysql_num_rows($result2)," enregistrement(s) ";?>trouv&eacute;(s)<?php echo"
                              </td>
                          </tr>
                  </table>";
				?>
<a href="../index.php">Retour au site</a>

                <div class="clear"></div>
      </div>
	
</div>
</body>

</html>

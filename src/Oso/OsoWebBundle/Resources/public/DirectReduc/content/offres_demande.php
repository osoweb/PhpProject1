<?php
if(isset($_SESSION['ID']))
{
$id=$_SESSION['ID'];
}else $id=0;
if(isset($_GET['offre_demande']))
	$offre_demande=$_GET['offre_demande'];
else
{
		echo '<meta http-equiv=refresh content="0; url=index.php?page=besoin_connect">';
		die('probleme interne desole');
}
if($offre_demande==1)
{
	$affiche_offre='Toutes les offres';
	$pas_offre='il n\'y a pas d\'offre pour le moment...';
}
else
{
	$affiche_offre='Toutes les demandes';
	$pas_offre='il n\'y a pas de demande pour le moment...';
}

//ou mettre en place une page erreur
?>



<center>
<h1> <?php echo $affiche_offre;?> </h1><br />
</center>


<?php


$nombreDeMessagesParPage = 7; 

$retour = mysql_query('SELECT COUNT(*) AS nb_messages FROM offres WHERE OFFRE_DEMANDE="'.$offre_demande.'" AND OFFRE_STATUT!="0"')or die ("Error in query: $query. " . mysql_error());
$donnees = mysql_fetch_array($retour);
$totalDesMessages = $donnees['nb_messages'];
$nombreDePages  = ceil($totalDesMessages / $nombreDeMessagesParPage);
if($nombreDePages > 1)
{
echo '<center>';
echo 'Page : ';
for ($i = 1 ; $i <= $nombreDePages ; $i++)
{
    echo '<a href="index.php?page=offres_demande&offre_demande='.$offre_demande.'&page_avis=' . $i . '">' . $i . '</a> ';
}
echo '</center>';
}
if($totalDesMessages==0)
{
	echo '<br />';
	echo '<center>';
	echo $pas_offre;
	echo '</center>';
}
?>
 
</p>
 
<?php
 
 
if (isset($_GET['page_avis']))
{
        $page = $_GET['page_avis']; 
}
else 
{
        $page = 1; 
}
 
$premierMessageAafficher = ($page - 1) * $nombreDeMessagesParPage;
 
$reponse = mysql_query('SELECT * FROM offres WHERE OFFRE_DEMANDE="'.$offre_demande.'" AND OFFRE_STATUT!="0" ORDER BY DATE_MISE_EN_VALEUR DESC LIMIT ' . $premierMessageAafficher . ', ' . $nombreDeMessagesParPage);
 $premier=0;
 
 include('fonctions/affiche_min_annonce.php');
while ($donnees = mysql_fetch_array($reponse))
{
		if($premier==1)
			echo '<hr noshade style="width:300px; height:1px; border-color: ff8c00; "><br />';
		aff_annonce($donnees);
		if(isset($_SESSION['ADMIN']) AND ($_SESSION['ADMIN']>0))
		{
				echo '<TD><a href="index.php?page=offre_modif&id_annonce='.$donnees['OFFRE_ID'].'">Modifier</a></TD>';
				?>
				<TD><a href="index.php?page=list_mes_annonce&action=offre_modif&suppression=<?php echo $donnees['OFFRE_ID']?>" onclick="return confirm('Voulez vous vraiment supprimer votre offre? : ')"> Supprimer</a></TD>

				<?php
		}
		
		/*
		
		$req2 = 'SELECT LIB_VILLE, LIB_DEPT, TYPE_SS_OFFRE_LIBELLE, OFFRE_PHOTO1  FROM ville, departement, type_ss_offre, utilisateur, offres';
			$req2 =  $req2.' WHERE offres.UTIL_ID = utilisateur.UTIL_ID AND utilisateur.ID_VILLE = ville.ID_VILLE AND ville.ID_DEPT = departement.ID_DEPT';
			$req2 =  $req2.' AND offres.OFFRE_TYPE = type_ss_offre.TYPE_SS_OFFRE_ID AND OFFRE_ID = '.$donnees['OFFRE_ID'].' ;';
			$exReq2=mysql_query($req2) or die("requete 2 invalide : " . mysql_error());
			$resuReq2=mysql_fetch_array($exReq2);
		echo '<DIV style="margin-top: 40px;"> ';
			
			echo '<table>';
			echo '<tr>';			
			echo '<td>';
			echo '</td>';
			
			echo '<td>';
			echo '</td>';
			echo '</tr>';
			
			
			
			echo '<tr>';
			echo '<td width=255>';
			echo $donnees['OFFRE_TITRE']."</BR> ";
			echo $donnees['OFFRE_PRIX'].' €</BR>';
			echo $donnees['OFFRE_DATE_MODIF']."</BR> ";
			echo '</td>';
			
			echo '<td>';
			echo $resuReq2['LIB_VILLE'].' </BR>';
			echo $resuReq2['LIB_DEPT'].'</BR> ';
			echo $resuReq2['TYPE_SS_OFFRE_LIBELLE'].'</BR> ';
			echo '</td>';
			echo '</tr>';
			echo '</table>';
			
			
			echo '<a href="index.php?page=affiche_annonce&id_annonce='.$donnees['OFFRE_ID'].'">voir cette annonce</a>';
			if ( $donnees['OFFRE_PHOTO'] != "")
			{
				echo '<DIV style= "margin-top:-130px; margin-left:570px; width:140px; height: 110px;';
				if ( ($donnees['OFFRE_PHOTO1'] != "") && ($donnees['OFFRE_PHOTO2'] != "")  )
				{
					echo 'background:url(images/exImg.png) 60% 60% no-repeat';
				}
				
				else  if ($donnees['OFFRE_PHOTO1'] != "" || $donnees['OFFRE_PHOTO2'] != "")
				{
				
				
					echo 'background:url(images/exImg1.png) 60% 60% no-repeat';
					
				}
				echo ';">';
				echo '<img src="content/image_offre/'.$donnees['OFFRE_PHOTO'].'" width=120 height=100/></DIV>';
				echo '</DIV>';
				echo '<br />';
			}
		
		
		echo '<DIV style="margin-top: 7px;"> ';
		echo $donnees['OFFRE_TITRE']."</BR> ";
		echo $donnees['OFFRE_PRIX'].' &#8364';
		echo '<br /><a href="index.php?page=affiche_annonce&id_annonce='.$donnees['OFFRE_ID'].'">visualiser l\'annonce</a>';
		echo '<DIV style= "position:relative; top:-50px; left: 170px;"><img src="content/image_offre/'.$donnees['OFFRE_PHOTO'].'" width=140 height=120/></DIV>' ;
		echo '</DIV></BR>';
		*/
		
		$premier=1;
		
}
 

?>
<?php
include_once('fonctions/fonctions.php');

function aff_annonce($donnees)
{
		include_once ('fonctions/date.php');
		$d = new Date();
if(preg_match("/2/",$donnees['OFFRE_MISE_EN_VALEUR'])) $MEV="font-weight:bold;";
else $MEV="";
		$req2 = 'SELECT UTIL_USER, UTIL_TYPE, LIB_VILLE, LIB_DEPT, TYPE_SS_OFFRE_LIBELLE, OFFRE_PHOTO1  FROM ville, departement, type_ss_offre, utilisateur, offres';
			$req2 =  $req2.' WHERE offres.UTIL_ID = utilisateur.UTIL_ID AND offres.ID_VILLE = ville.ID_VILLE AND ville.ID_DEPT = departement.ID_DEPT';
			$req2 =  $req2.' AND offres.OFFRE_TYPE = type_ss_offre.TYPE_SS_OFFRE_ID AND OFFRE_ID = '.$donnees['OFFRE_ID'].' ;';
			$exReq2=mysql_query($req2) or die("requete 2 invalide : " . mysql_error());
			$resuReq2=mysql_fetch_array($exReq2);
			if($donnees['OFFRE_DEMANDE']==1)
				$offre_demande='Offre';
			else
				$offre_demande='Demande';
				
				
			
			
			
			
			echo '<table width=100%>';
				//echo '<tr>';
							echo '<td>';
								echo '<table>';
									echo '<tr style="background-color:gray; color:white; '.$MEV.'">';			
										echo '<td width="50%">';					
											echo $offre_demande; 
											if(preg_match("/3/",$donnees['OFFRE_MISE_EN_VALEUR'])) echo '&nbsp&nbsp<img src="images/icons/alert.gif">';
											echo '<span style="padding-left:10%; text-align:right;">';
											if($resuReq2['UTIL_TYPE']==2)
												echo 'Pro';
											else
												echo 'Particulier';
											echo '</span>';
										echo '</td>';
				
										echo '<td>';
											echo 'Annonce Num&eacute;ro: '.$donnees['OFFRE_ID'];
										echo '</td>';
									echo '</tr>';																
									$datetmp=explode('-',$donnees['OFFRE_DATE']);
									$date=$datetmp[2].'/'.$datetmp[1].'/'.$datetmp[0];			
										echo '<tr>';
											echo '<td width=255 style='.$MEV.'>';
												echo '<a href="'.chaine_titre($donnees['OFFRE_TITRE']).'-affiche_annonce-'.$donnees['OFFRE_ID'].'.html">'.$donnees['OFFRE_TITRE'].'</a> &nbsp;&nbsp;';
												echo $donnees['OFFRE_PRIX'].' �</BR>';
												echo $date."<BR/> ";
												echo ' '.$resuReq2['UTIL_USER'];
											echo '</td>';
											
											echo '<td style='.$MEV.'>';
												echo strtoupper($resuReq2['LIB_DEPT']).'</BR> ';
												echo strtolower($resuReq2['LIB_VILLE']).' </BR>';
												echo $resuReq2['TYPE_SS_OFFRE_LIBELLE'].'</BR> ';
											echo '</td>';
										echo '</tr>';	
									echo '</table>';
							echo '</td>';
							
							
							
							
							echo '<td>';	
									
			//echo '<a href="index.php?page=affiche_annonce&id_annonce='.$donnees['OFFRE_ID'].'">voir cette annonce</a>';
									if ( $donnees['OFFRE_PHOTO'] != "")
									{
										echo '<DIV style= "width:140px; height: 110px;';
										if ( ($donnees['OFFRE_PHOTO1'] != "") && ($donnees['OFFRE_PHOTO2'] != "")  )
										{
											echo 'background:url(images/exImg.png) 60% 60% no-repeat';
										}
										
										else  if ($donnees['OFFRE_PHOTO1'] != "" || $donnees['OFFRE_PHOTO2'] != "")
										{
										
										
											echo 'background:url(images/exImg1.png) 60% 60% no-repeat';
											
										}
										echo ';">';
										echo '<a href="'.chaine_titre($donnees['OFFRE_TITRE']).'-affiche_annonce-'.$donnees['OFFRE_ID'].'.html"><img src="content/image_offre/'.$donnees['OFFRE_PHOTO'].'" width=120 height=100/></a></DIV>';
										echo '</DIV>';
										
									
										
									}
									else
									{
										echo '<DIV style= "width:140px; height: 110px;';
										if ( ($donnees['OFFRE_PHOTO1'] != "") && ($donnees['OFFRE_PHOTO2'] != "")  )
										{
											echo 'background:url(images/exImg.png) 60% 60% no-repeat';
										}
										
										else  if ($donnees['OFFRE_PHOTO1'] != "" || $donnees['OFFRE_PHOTO2'] != "")
										{
										
										
											echo 'background:url(images/exImg1.png) 60% 60% no-repeat';
											
										}
										echo ';">';
										echo '<a href="'.chaine_titre($donnees['OFFRE_TITRE']).'-affiche_annonce-'.$donnees['OFFRE_ID'].'.html"><img src="content/image_offre/www.vidati.fr(33).jpg" width=120 height=100/></a></DIV>';
										echo '</DIV>';
										
									}
							echo '</td>';
						//echo '</tr>';			
					echo '</table>';
}





function recup_annonce($donnees)
{
		include_once ('fonctions/date.php');
		$d = new Date();
if(preg_match("/2/",$donnees['OFFRE_MISE_EN_VALEUR'])) $MEV="font-weight:bold;";
else $MEV="";
		$req2 = 'SELECT UTIL_USER, UTIL_TYPE, LIB_VILLE, LIB_DEPT, TYPE_SS_OFFRE_LIBELLE, OFFRE_PHOTO1  FROM ville, departement, type_ss_offre, utilisateur, offres';
			$req2 =  $req2.' WHERE offres.UTIL_ID = utilisateur.UTIL_ID AND offres.ID_VILLE = ville.ID_VILLE AND ville.ID_DEPT = departement.ID_DEPT';
			$req2 =  $req2.' AND offres.OFFRE_TYPE = type_ss_offre.TYPE_SS_OFFRE_ID AND OFFRE_ID = '.$donnees['OFFRE_ID'].' ;';
			$exReq2=mysql_query($req2) or die("requete 2 invalide : " . mysql_error());
			$resuReq2=mysql_fetch_array($exReq2);
			if($donnees['OFFRE_DEMANDE']==1)
				$offre_demande='Offre';
			else
				$offre_demande='Demande';
				
				
			
			
			
			
			
			$annonce= '<table width=100%>';
				//$annonce= '<tr>';
							$annonce.= '<td>';
								$annonce.= '<table>';
									$annonce.= '<tr style="background-color:gray; color:white; '.$MEV.'">';			
										$annonce.= '<td width="50%">';					
											$annonce.= $offre_demande; 
											if(preg_match("/3/",$donnees['OFFRE_MISE_EN_VALEUR'])) $annonce.= '&nbsp&nbsp<img src="images/icons/alert.gif">';
											$annonce.= '<span style="padding-left:10%; text-align:right;">';
											if($resuReq2['UTIL_TYPE']==2)
												$annonce.= 'Pro';
											else
												$annonce.= 'Particulier';
											$annonce.= '</span>';
										$annonce.= '</td>';
				
										$annonce.= '<td>';
											$annonce.= 'Annonce Num&eacute;ro: '.$donnees['OFFRE_ID'];
										$annonce.= '</td>';
									$annonce.= '</tr>';																
									$datetmp=explode('-',$donnees['OFFRE_DATE']);
									$date=$datetmp[2].'/'.$datetmp[1].'/'.$datetmp[0];			
										$annonce.= '<tr>';
											$annonce.= '<td width=255 style='.$MEV.'>';
												$annonce.= '<a href="http://www.directreduc.com/'.chaine_titre($donnees['OFFRE_TITRE']).'-affiche_annonce-'.$donnees['OFFRE_ID'].'.html">'.$donnees['OFFRE_TITRE'].'</a> &nbsp;&nbsp;';
												$annonce.= $donnees['OFFRE_PRIX'].' �</BR>';
												$annonce.= $date."</BR> ";
												$annonce.= ' '.$resuReq2['UTIL_USER'];
											$annonce.= '</td>';
											
											$annonce.= '<td style='.$MEV.'>';
												$annonce.= strtoupper($resuReq2['LIB_DEPT']).'</BR> ';
												$annonce.= strtolower($resuReq2['LIB_VILLE']).' </BR>';
												$annonce.= $resuReq2['TYPE_SS_OFFRE_LIBELLE'].'</BR> ';
											$annonce.= '</td>';
										$annonce.= '</tr>';	
									$annonce.= '</table>';
							$annonce.= '</td>';
						
						//$annonce.= '</tr>';			
					$annonce.= '</table>';
					return $annonce;
}










?>
#!/usr/local/bin/php5
<?php
	// redéfinition de la méthode extractTo afin qu'elle prenne en compte ouverture d'une achirve zip.
	function extractTo($archive, $destination)	{
		if (($zip = zip_open($archive)) === FALSE) // on teste si l'ouverture est possible
		{
			die(var_dump($zip)); // -----
			return FALSE; // si elle n'est pas possible on quitte la fonction
		}
		if (!file_exists($destination)) // une fois la connexion faite, on teste si le dossier de destination existe
		{
			mkdir($destination); // si il existe pas on le crée.
		}
		while ($entree = zip_read($zip)) // on lit chaque fichier
		{
			$fichier = zip_entry_name($entree);
			if (zip_entry_open($zip, $entree)) 
			{
				$contenu = zip_entry_read($entree, zip_entry_filesize($entree));
				zip_entry_close($entree);
				if (!file_exists($destination . DIRECTORY_SEPARATOR . $fichier))
				{
					$fp = fopen($destination . DIRECTORY_SEPARATOR . $fichier, 'w');
					fwrite($fp, $contenu);
					fclose($fp);
				}
			}
			else 
			{
				zip_close($zip);
				return FALSE;
			}
		}
		zip_close($zip);
		return TRUE;
	}
?>


<?php
	
	include ('../fonctions/date.php'); // initialisation de la date utile pour les requêtes.
	$d = new Date ();
	$date = $d->aujourdhui();
	// connexion mysql
	include '../fonctions/connexion.php';
	//connexion au serveur ftp
	$ftp_server = "vidati.com";
	$ftp_user_name="u45023319";
	$ftp_user_pass="7nYV72jU";
	
	$conn_id = ftp_connect($ftp_server);
	$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
	
	if($login_result)
	{
		echo "connecté au serveur ftp : $ftp_server";
	}	
	else 
	{
		echo "connexion au serveur ftp $ftp_server échoué"."<br/>";
	}	
	
	if(ftp_get($conn_id, "ludwig.ZIP", "ludwig.ZIP", FTP_BINARY)) 
	{
		echo "Transfert réussi";
		ftp_chdir($conn_id,"directreduc.com");
		$monZip = "ludwig.ZIP";
		$destination = 'Util';
		
		// destination a remplacer;
		if(extractTo($monZip, $destination ))
		{
			echo 'succés';
		}
		else
		{
			echo 'echec';
		}

		// a remplacer 
 
		$url_fichier_xml = $destination.'/Ludwig.XML';
		$listeOffre = array();
		$xml=simplexml_load_file($url_fichier_xml);
		foreach($xml->BIEN as $bien) 
		{
			// récupération des biens du fichier XML
			
			$existe = FALSE;
			
                        if($bien->NO_ASP)
                        {
                            $noasp = $bien->NO_ASP;
                        }
                        else
                        {
                            $noasp = "aucun";
                        }
			if($bien->TYPE_OFFRE)
			{
				$typeoffre = $bien->TYPE_OFFRE;
			}
			else 
			{
				$typeoffre = 20;
			}
			
			
			if($bien->NO_DOSSIER) 
			{
				$numdossier = $bien->NO_DOSSIER;
				$listeOffre[] = $numdossier;
			}
			else 
			{
				$numdossier = 0;
			}
			
			if($bien->DATE_OFFRE)
			{
				$dateoffre = $bien->DATE_OFFRE;
			}
			else 
			{
				$dateoffre = $date;
			}
			
			if($bien->PRIX) 
			{
				$prix=$bien->PRIX;
				$type_vente = 1;
			}
			else if ($bien->LOYER) 
			{	
				$prix=$bien->LOYER;
				$type_vente = 2;
			}
			 
			if($bien->CP_OFFRE)
			{ 	
				 
				$cp = $bien->CP_OFFRE;
				$req8 = "SELECT ID_VILLE FROM ville WHERE CP_VILLE = ".$cp;
				$idville = ee ;
			}
			else 
			{	
				$cp=0;
			}
			
			if($bien->VILLE_OFFRE) 
			{
				$ville = addslashes($bien->VILLE_OFFRE);
			} 
			else 
			{
				$ville = "";
			}
			
			if($bien->QUARTIER)
			{
				$quartier= addslashes($bien->QUARTIER);
			}
			else 
			{
				$quartier="";
			}
			
			if($bien->CATEGORIE)
			{
				$titre = addslashes($bien->CATEGORIE);
			}
			else 
			{
				$titre = "";
			}
			
			if($bien->NB_PIECES)
			{
				$pieces = $bien->NB_PIECES;
			}
			else 
			{
				$pieces = "";
			}
			if($bien->NB_CHAMBRES)
			{
				$chambres = $bien->NB_CHAMBRES;
			}
			else
			{
				$chambres = "";
			}
			
			if($bien->SURF_HAB)
			{
				$surf_hab = $bien->SURF_HAB;
			}
			else
			{
				$surf_hab = "";
			}
			
			if($bien->SURF_TERRAIN)
			{
				$surfT = $bien->SURF_TERRAIN;
			}
			else 
			{
				$surfT = "";
			}
			
			if($bien->NB_ETAGES)
			{
				$nbetage = $bien->NB_ETAGES;
			}
			else 
			{
				$nbetage = "";
			}
			
			if($bien->ANNEE_CONS)
			{
				$annee = $bien->ANNEE_CONS;
			}
			else
			{
				$annee = "";
			}
			
			if($bien->CUISINE) 
			{
				$cuisine = $bien->CUISINE;
			}
			else
			{
				$cuisine = "";
			}
			
			if($bien->TEXTE_FR)
			{
				$texte = addslashes ($bien->TEXTE_FR); 
			}	
			else
			{	
				$texte="Pas de description, contactez vidati";
			}
			
			
			// recup image
                        $photo ="";
                        $photo1="";
                        $photo2="";
			$dossier = opendir($destination.'/');
                      
            $i = 1;       
			while ($entre = readdir($dossier) /*&& $i < 4*/)
			{
				if (preg_match('#'.$noasp.'#', $entre))
                {
                    $new_entre = 'vidati-'.$numdossier.'-fichier'.$i.'.jpg';
                    if (!copy($destination.'/'.$entre, '../content/image_offre/'.$new_entre))
                    {
						echo'la copie du fichier '.$entre.' n\' pas réussi';
                    }
                    if ( $i == 1)
                    {
						$photo = $new_entre;
                    }
                    if ( $i == 2)
                    {
                        $photo1 = $new_entre;
                    }
                    if ( $i == 3)
                    {
                        $photo2 = $new_entre;
                    }
					$i = $i + 1;
                }
			}
            $closedir = closedir($dossier);
            
            //on selectionne la bonne categorie 
            
            $categorie = "";
		 	if ($typeoffre == 1 || $typeoffre == 11) // appartement ou loft
            {
            	$categorie = 414;
            }
		     if ( $typeoffre == 2) // maison
             {
             	$categorie = 404;             
             }
			 if ($typeoffre == 5 ||$typeoffre == 6 || $titre == 13) // bureau et commerce
             {
             	$categorie = 440;
             }
             if ($typeoffre == 3)// terrain
             {
             	$categorie = 420; 
             }
             if ($typeoffre == 4)// immeuble
             {
             	$categorie = 430;
             }
			 if ($typeoffre == 7)// parking
             {
               $categorie = 450; 
             }

			// insertion base de données
			$req2 ="select OFFRE_ID, OFFRE_N_DOSSIER from offres";
			$execReq2 = mysql_query($req2) or die("erreur dans ma requête ($req2): ".mysql_error() );
			$prix = str_replace(",", '.', $prix);
			while($resuReq2 = mysql_fetch_array($execReq2))
            {
				if($resuReq2['OFFRE_N_DOSSIER'] == $numdossier)
				{
					echo 'Modification de l\'annonce numero : '.$resuReq2['OFFRE_ID'].'   ';
					$req3 = "UPDATE offres SET OFFRE_TITRE = '".$titre."', OFFRE_DATE= '".$d->convertion_mysql($dateoffre)."', OFFRE_DATE_MODIF = '".$date."', OFFRE_PRIX = '".$prix."', OFFRE_TEXTE = '".utf8_decode($texte)."', OFFRE_PHOTO = '".$photo."', OFFRE_PHOTO1 = '".$photo1."', OFFRE_PHOTO2 = '".$photo2."' WHERE OFFRE_ID = ".$resuReq2['OFFRE_ID']."; ";
					mysql_query($req3) or die("erreur dans ma requête($req3) : ".mysql_error() );
					$req4 = "UPDATE immobilier SET nb_piece = '".$pieces."', nb_chambre = '".$chambres."', surf_hab = '".$surf_hab."', surf_ter = '".$surfT."', nb_etage='".$nbetage."', annee_cons = '".$annee."', cuisine = '".$cuisine."' WHERE id_offre = '".$resuReq2['OFFRE_ID']."' ";
					mysql_query($req4) or die("erreur dans ma requête($req4) : ".mysql_error() );
					$existe = TRUE;
				}				
			}
			if($existe == FALSE)
			{
				//insertion de l'offres	
				$req5='INSERT INTO offres VALUES(NULL,"1", "'.$titre. '","' .$d->convertion_mysql($dateoffre). '","' .$date. '","'.$prix.'","' .utf8_decode($texte). '","1","'.$photo.'","'.$photo1.'","'.$photo2.'","'.$categorie.'","1","1","0" ,'.$numdossier.', 29037 )';
				mysql_query($req5) or die("erreur dans ma requête($req5) : ".mysql_error() );
				// récupération de l'id de l'offre créer ci-dessus
				$req6 = ' SELECT OFFRE_ID FROM offres WHERE OFFRE_N_DOSSIER = '.$numdossier.';';
				$execReq6 = mysql_query($req6) or die ("erreur dans ma requête ($req6) : ".mysql_error() );
				$resuReq6 = mysql_fetch_array($execReq6);
				//insertion des informations spécial immo
				$req7 ='INSERT INTO immobilier VALUES(NULL,"'.$numdossier.'" , "'.$pieces.'", "'.$chambres.'", "'.$surf_hab.'", "'.$surfT.'", "'.$nbetage.'", "'.$annee.'", "'.$cuisine.'","'.$resuReq6['OFFRE_ID'].'", '.$type_vente.' );' ; 
				mysql_query($req7) or die ("erreur dans ma requête($req7) : ".mysql_error() );
				echo 'création de l\'offre numéro : '.$resuReq6['OFFRE_ID'].'   eee  ';
			}				
		}
		// supression des annonces non présente dans le fichier XML

		$req3 ="select OFFRE_ID, OFFRE_N_DOSSIER from offres WHERE UTIL_ID = 1";
		$execReq3 = mysql_query($req3) or die("erreur dans ma requête ($req3): ".mysql_error() );
		while($resuReq3 = mysql_fetch_array($execReq3))
        {
			$present = false;
			foreach($listeOffre as $offre)
			{  
				if( $offre == $resuReq3['OFFRE_N_DOSSIER'])
				{
					
					$present = true;
				}
			}
			if(!$present)
			{
				$req3 = "UPDATE offres SET OFFRE_STATUT = 0 WHERE OFFRE_N_DOSSIER =".$resuReq3['OFFRE_N_DOSSIER']." AND UTIL_ID = 1; ";
				mysql_query($req3) or die("erreur dans ma requête($req3) : ".mysql_error() );
				$dossierphoto=opendir('../content/image_offre');
				$pattern = '#vidati-0'.$resuReq3['OFFRE_N_DOSSIER'].'-fichier | vidati-'.$resuReq3['OFFRE_N_DOSSIER'].'-fichier#';
				while ($photo = readdir($dossierphoto))
				{
					if (preg_match($pattern, $photo))
					{
						unlink("../content/image_offre/".$photo);
					}
				}
				echo 'suppresion de l\'offre numéro :'.$resuReq3['OFFRE_ID'];
			}
        }	
		// suppression des fichiers temporaires
		
		$ouverture=opendir($destination);
		$fichier=readdir($ouverture);
		while ($fichier=readdir($ouverture))  // tous les fichiers du dossier util
		{
			if($fichier != "..")
			{
				unlink($destination."/".$fichier);
			}
		}
		closedir($ouverture);
		rmdir($destination); // dossier util 
		unlink($monZip);// zip
		
	}
	else 
	{
		echo "Transfert échoué";
	}
			include '../fonctions/deconnexion.php';
?>

<?PHP 

	$rechecheEffec = false; // bool�en permetant de savoir si il faut faire une recherche. on lui attribue comme valeur par d�faut false
	//Dans le cas o� l'un des champs du formulaire contient une valeur,il passe � true afin de questionner la base de donn�e.
	include ('fonctions/date.php');
		include('fonctions/affiche_min_annonce.php');
	$d = new Date ();
/*-----------------------------------------------------------------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------------------------------------*/

	// Tout d'abord on r�cup�re tous les champs du formulaire dans le cas o� l'utilisateur aurait effectuer une recherche
	// Pour cela on teste si une valeur a �t� envoyer par la methode POST sinon on attribue une valeur par d�faut.
	include('fonctions/recherche_d/recup_valeur_commune_post.php');
	
	
/*-----------------------------------------------------------------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------------------------------------*/
	
	include('fonctions/recherche_d/recup_valeur_immo_post.php');
	include('fonctions/recherche_d/recup_valeur_voiture_post.php');
	
/*-----------------------------------------------------------------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------------------------------------*/
	
	if ($rechecheEffec)
	{ 
		//Ensuite si l'utilisateur a fait une recherche on va v�rifier la forme des donn�es du formulaire en particulier les chiffres.
		//Pour cela on instancie un bool�en avec la valeur true par d�faut et un regex pour distinguer les chriffres apr�s dans le cas
		// o� l'un des champs n'ait pas valide le bool�en passe � false. et on alerte l'utilisateur avec un message d'erreur.
		include('fonctions/recherche_d/controle_validite.php');

/*-----------------------------------------------------------------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------------------------------------*/
		
		if ($verif)
		{
			// Dans le cas o� la v�rification est un succ�s on �crit la requete afin r�cup�rer les annonces qui respecte les conditions
			// stipul�es par l'utilisateur.
			include('fonctions/recherche_d/requete.php');
		}
		else
		{
			echo "Veuillez corrrige vos erreurs";
		}		
	}
	
/*-----------------------------------------------------------------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------------------------------------*/

	// on inclus le formulaire 
	include('fonctions/recherche_d/formulaire_recherche_d.php');
	
/*-----------------------------------------------------------------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------------------------------------*/

	// Ici, on passe � la zone d'affichage des annonces
	if (isset($req4))
	{
		//dans le cas, o� il y a eu une recherche on affiche les annonces respectant les conditions.
		// pour cela �xecute la requ�te �crite plus haut.
		$exReq4=mysql_query($req4) or die("requete 1 invalide : " . mysql_error());
		$resuReq4=mysql_fetch_array($exReq4);
		$nombredAnnonce = mysql_num_rows($exReq4); // on r�cupere le nombre pour ensuite pr�venir l'utisateur dans le cas o� il y aurai aucune annonce poss�dant les crit�re sp�cifier.
		if ($nombredAnnonce >= 1) // dans le cas o� il y a des annonces
		{
	 		include('fonctions/recherche_d/decoupage.php');
			include('fonctions/recherche_d/affichage.php');
						
			// � la fin on affiche la barre de s�lection de la page.
			if($nombrePage>1)
			{
				include('fonctions/recherche_d/barre_page.php');
			}
		}	
		else
		{
			echo '<DIV style="margin-left: 190px; margin-top: 170px;" >d�sol�, il y a aucune annonce qui correspond � vos crit�res de recherche.</DIV>';
		}
	 
	}
	else
	{
		//si il y a pas de recherche on affiche les annonces les r�cents si seulement il y a une mise en valeurs.
	
	}	
?>

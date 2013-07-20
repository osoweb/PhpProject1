<?PHP 

	$rechecheEffec = false; // booléen permetant de savoir si il faut faire une recherche. on lui attribue comme valeur par défaut false
	//Dans le cas où l'un des champs du formulaire contient une valeur,il passe à true afin de questionner la base de donnée.
	include ('fonctions/date.php');
		include('fonctions/affiche_min_annonce.php');
	$d = new Date ();
/*-----------------------------------------------------------------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------------------------------------*/

	// Tout d'abord on récupére tous les champs du formulaire dans le cas où l'utilisateur aurait effectuer une recherche
	// Pour cela on teste si une valeur a été envoyer par la methode POST sinon on attribue une valeur par défaut.
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
		//Ensuite si l'utilisateur a fait une recherche on va vérifier la forme des données du formulaire en particulier les chiffres.
		//Pour cela on instancie un booléen avec la valeur true par défaut et un regex pour distinguer les chriffres aprés dans le cas
		// où l'un des champs n'ait pas valide le booléen passe à false. et on alerte l'utilisateur avec un message d'erreur.
		include('fonctions/recherche_d/controle_validite.php');

/*-----------------------------------------------------------------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------------------------------------*/
		
		if ($verif)
		{
			// Dans le cas où la vérification est un succès on écrit la requete afin récupérer les annonces qui respecte les conditions
			// stipulées par l'utilisateur.
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

	// Ici, on passe à la zone d'affichage des annonces
	if (isset($req4))
	{
		//dans le cas, où il y a eu une recherche on affiche les annonces respectant les conditions.
		// pour cela éxecute la requête écrite plus haut.
		$exReq4=mysql_query($req4) or die("requete 1 invalide : " . mysql_error());
		$resuReq4=mysql_fetch_array($exReq4);
		$nombredAnnonce = mysql_num_rows($exReq4); // on récupere le nombre pour ensuite prévenir l'utisateur dans le cas où il y aurai aucune annonce possédant les critère spécifier.
		if ($nombredAnnonce >= 1) // dans le cas où il y a des annonces
		{
	 		include('fonctions/recherche_d/decoupage.php');
			include('fonctions/recherche_d/affichage.php');
						
			// à la fin on affiche la barre de sélection de la page.
			if($nombrePage>1)
			{
				include('fonctions/recherche_d/barre_page.php');
			}
		}	
		else
		{
			echo '<DIV style="margin-left: 190px; margin-top: 170px;" >désolé, il y a aucune annonce qui correspond à vos critères de recherche.</DIV>';
		}
	 
	}
	else
	{
		//si il y a pas de recherche on affiche les annonces les récents si seulement il y a une mise en valeurs.
	
	}	
?>

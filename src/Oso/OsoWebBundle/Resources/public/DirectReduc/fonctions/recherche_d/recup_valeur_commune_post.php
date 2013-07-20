<?php
if (isset($_POST['mot'] )) // le mot-clé
	{
		$mot_cle = htmlentities($_POST['mot']);
		if($mot_cle != "")
		{
			$rechecheEffec = true; 
		}
	}
	else
	{
		$mot_cle = "";
	
	}
	
	if (isset($_POST['photo'] )) // si l'utilisateur souhaite qu'il y ait au moins une photo ou pas
	{
		$photo = $_POST['photo'];
		$rechecheEffec = true; 
	}
	else
	{
		$photo = 0;
	}
	
	if (isset($_POST['typeAnnonce'] )) // le type de l'annonce une offre ou une demande
	{
		$type_ann = $_POST['typeAnnonce'];
		$rechecheEffec = true; 
	}
	else
	{
		$type_ann = 0;
	}
	
	if (isset($_POST['type_produit'])) // catégorie de l'annonce recherchée
	{
		$type_prod = $_POST['type_produit'];
		$rechecheEffec = true; 
	}
	else
	{
		$type_prod ='';
	}
	
	if (isset($_POST['date'])) // la fraîcheur de l'annonce 
	{
		$fraicheur = $_POST['date'];
		$rechecheEffec = true; 
		
	}
	else
	{
		$fraicheur = 0;
	}
	// ensuite grâce à la classe date, on crée une date butoire à laquelle la période devra ne pas dépasser.
	if ( $fraicheur != 0)
	{
		if ( $fraicheur == 3)
		{
			$date = $d->aujourdhui();
		}
		else if ($fraicheur == 2)
		{	
			$date = $d->semaine_prec();
		}
		else
		{
			$date = $d->mois_prec();
		}
	}
	
	if(isset($_POST['vendeur'])) // le type de l'annonceur pro ou particulier.
	{
		$type_vend = $_POST['vendeur'];
		$rechecheEffec = true; 
	}
	else
	{
		$type_vend =	0;
	}
	
	if(isset($_POST['prixmin'])) //le prix mini
	{
		if( $_POST['prixmin'] != '')
		{
			$prix_min = $_POST['prixmin'];
			$rechecheEffec = true; 
		}
		else
		{
			$prix_min = 0;
		}
	}
	else
	{
			$prix_min = 0;
	}
	
	if (isset($_POST['prixmax'])) // le prix max
	{
		if( $_POST['prixmax'] != '')
		{
			$prix_max = $_POST['prixmax'];
			$rechecheEffec = true; 
		}
		else
		{
			$prix_max = 0;
		}
	}
	else
	{
			$prix_max = 0;
	}
	
	if(isset($_POST['regi']))// la région
	{
		$region = $_POST['regi'];
		$rechecheEffec = true; 
	}
	else
	{
		$region=99;
	}
	
	if (isset($_POST['depart'])) // le département
	{
		$departement = $_POST['depart'];
		$rechecheEffec = true; 
	}
	else 
	{
		$departement = 0;
	}
	
	if (isset($_POST['ville'])) // la ville
	{
		$ville = $_POST['ville'];
		$rechecheEffec = true; 
	}
	else
	{
		$ville = 0;
	}
?>
<?php	
		$nombreDAnnonceParPage = 50;  // on stock le nombre annonces voulu par page ( pour l'instant on le met en dur possibilit� d'�volution)
		$nombrePage = ceil($nombredAnnonce / $nombreDAnnonceParPage); // on calcule le nombre de page necessaire pour afficher la totalit� des annonces.
		// Dans le cas o� l'utilisateur a choisi une page pr�alablement
		if (isset($_POST['annonce']))
		{
			$page = $_POST['annonce']; 
		}
		else // sinon on le placera sur la 1 ere
		{
			$page = 1; 
		}
		$premiereAnn = ($page-1) * $nombreDAnnonceParPage; // on calcule l'index de la 1ere annonce de la page en fonction du nombre d'annonce par page et sur quelle page est-on positionner.
		$dernierAnn = $premiereAnn + $nombreDAnnonceParPage; // ainsi que la derni�re. 
?>
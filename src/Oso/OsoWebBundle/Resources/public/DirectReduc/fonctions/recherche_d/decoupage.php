<?php	
		$nombreDAnnonceParPage = 50;  // on stock le nombre annonces voulu par page ( pour l'instant on le met en dur possibilité d'évolution)
		$nombrePage = ceil($nombredAnnonce / $nombreDAnnonceParPage); // on calcule le nombre de page necessaire pour afficher la totalité des annonces.
		// Dans le cas où l'utilisateur a choisi une page préalablement
		if (isset($_POST['annonce']))
		{
			$page = $_POST['annonce']; 
		}
		else // sinon on le placera sur la 1 ere
		{
			$page = 1; 
		}
		$premiereAnn = ($page-1) * $nombreDAnnonceParPage; // on calcule l'index de la 1ere annonce de la page en fonction du nombre d'annonce par page et sur quelle page est-on positionner.
		$dernierAnn = $premiereAnn + $nombreDAnnonceParPage; // ainsi que la dernière. 
?>
<?php session_start();
?>

		<?php include 'fonctions/connexion.php' ?>	
			<DIV id="page"> <!-- le contenu -->
				<?php 
					
					if(isset($_GET['page']))
					{
						if( $_GET['page'] == 'recherche')
							{
								include 'content/recherche.php';
		
							}
						else
						{
							include('content/'.$_GET['page'].'.php');
						}
					}				
					else if(isset($_GET['lien']))
					{
						include $_GET['lien'];
					}
					else
					{
						include ('content/accueil.php');
					}
				?>
			</DIV>
			
<?php include 'fonctions/deconnexion.php' ?>
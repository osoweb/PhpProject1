<?php
	if(preg_match('"^4"',$type_prod)) // dans le cas où la catégorie est immobillier on récupere les variables spécial
	{
		$sousCategImmo = true;
		/***************/

		if (isset($_POST['nbPieceMin'])) // le nombre de Piece Maximum
		{
			if( $_POST['nbPieceMin'] != '')
			{
				$nbPieceMin = $_POST['nbPieceMin'];
				$rechecheEffec = true; 
			}
			else
			{
				$nbPieceMin = 0;
			}
		}
		else
		{
				$nbPieceMin = 0;
		}
		/***************/
		/***************/
		/***************/
		if (isset($_POST['nbPieceMax'])) // le nombre de Piece Maximum
		{
			if( $_POST['nbPieceMax'] != '')
			{
				$nbPieceMax = $_POST['nbPieceMax'];
				$rechecheEffec = true; 
			}
			else
			{
				$nbPieceMax = 0;
			}
		}
		else
		{
				$nbPieceMax = 0;
		}
		/***************/
		/***************/
		/***************/
		if (isset($_POST['nbChambreMini'])) // le nombre de Piece Maximum
		{
			if( $_POST['nbChambreMini'] != '')
			{
				$nbChambreMini = $_POST['nbChambreMini'];
				$rechecheEffec = true; 
			}
			else
			{
				$nbChambreMini = 0;
			}
		}
		else
		{
				$nbChambreMini = 0;
		}
		/***************/
		/***************/
		/***************/
		if (isset($_POST['nbChambremax']))
		{
			if( $_POST['nbChambremax'] != '')
			{
				$nbChambremax = $_POST['nbChambremax'];
				$rechecheEffec = true; 
			}
			else
			{
				$nbChambremax = 0;
			}
		}
		else
		{
				$nbChambremax = 0;
		}
		/***************/
		/***************/
		/***************/
		if (isset($_POST['surfHabMini']))
		{
			if( $_POST['surfHabMini'] != '')
			{
				$surfHabMini = $_POST['surfHabMini'];
				$rechecheEffec = true; 
			}
			else
			{
				$surfHabMini = 0;
			}
		}
		else
		{
				$surfHabMini = 0;
		}
		/***************/
		/***************/
		/***************/
		if (isset($_POST['surfHabMax']))
		{
			if( $_POST['surfHabMax'] != '')
			{
				$surfHabMax = $_POST['surfHabMax'];
				$rechecheEffec = true; 
			}
			else
			{
				$surfHabMax = 0;
			}
		}
		else
		{
				$surfHabMax = 0;
		}
		/***************/
		/***************/
		/***************/
		if (isset($_POST['surfTerMini']))
		{
			if( $_POST['surfTerMini'] != '')
			{
				$surfTerMini = $_POST['surfTerMini'];
				$rechecheEffec = true; 
			}
			else
			{
				$surfTerMini = 0;
			}
		}
		else
		{
				$surfTerMini = 0;
		}
		/***************/
		/***************/
		/***************/
		if (isset($_POST['surfTerMax']))
		{
			if( $_POST['surfTerMax'] != '')
			{
				$surfTerMax = $_POST['surfTerMax'];
				$rechecheEffec = true; 
			}
			else
			{
				$surfTerMax = 0;
			}
		}
		else
		{
				$surfTerMax = 0;
		}
		/***************/
		/***************/
		/***************/
		if (isset($_POST['nbEtageMini']))
		{
			if( $_POST['nbEtageMini'] != '')
			{
				$nbEtageMini = $_POST['nbEtageMini'];
				$rechecheEffec = true; 
			}
			else
			{
				$nbEtageMini = 0;
			}
		}
		else
		{
				$nbEtageMini = 0;
		}
		/***************/
		/***************/
		/***************/	
		if (isset($_POST['nbEtageMax']))
		{
			if( $_POST['nbEtageMax'] != '')
			{
				$nbEtageMax = $_POST['nbEtageMax'];
				$rechecheEffec = true; 
			}
			else
			{
				$nbEtageMax = 0;
			}
		}
		else
		{
				$nbEtageMax = 0;
		}
		/***************/
		/***************/
		/***************/	
		if (isset($_POST['anneConsMini']))
		{
			if( $_POST['anneConsMini'] != '')
			{
				$anneConsMini = $_POST['anneConsMini'];
				$rechecheEffec = true; 
			}
			else
			{
				$anneConsMini = 0;
			}
		}
		else
		{
				$anneConsMini = 0;
		}
		/***************/
		/***************/
		/***************/
		if (isset($_POST['anneConsMax']))
		{
			if( $_POST['anneConsMax'] != '')
			{
				$anneConsMax = $_POST['anneConsMax'];
				$rechecheEffec = true; 
			}
			else
			{
				$anneConsMax = 0;
			}
		}
		else
		{
				$anneConsMax = 0;
		}
		/***************/
		/***************/
		/***************/
	}
	else
	{
				$nbPieceMin = 0;
				$nbPieceMax = 0;
				$nbChambreMini = 0;
				$nbChambremax = 0;
				$surfHabMini = 0;
				$surfHabMax = 0;
				$surfTerMini = 0;
				$surfTerMax = 0;
				$nbEtageMini = 0;
				$nbEtageMax = 0;
				$anneConsMini = 0;
				$anneConsMax = 0;
				$sousCategImmo = 0;
				
	}
?>
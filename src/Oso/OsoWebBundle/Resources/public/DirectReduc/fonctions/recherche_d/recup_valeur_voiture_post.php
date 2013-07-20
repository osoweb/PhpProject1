<?php
	if(preg_match('"^3"',$type_prod))
	{
		$sousCategVoit = true;
		/***************/

		if (isset($_POST['kiloVoitMin']))
		{
			if( $_POST['kiloVoitMin'] != '')
			{
				$kiloVoitMin = $_POST['kiloVoitMin'];
				$rechecheEffec = true; 
			}
			else
			{
				$kiloVoitMin = 0;
			}
		}
		else
		{
				$kiloVoitMin = 0;
		}
		/***************/
		/***************/
		/***************/
		
		if (isset($_POST['kiloVoitMax']))
		{
			if( $_POST['kiloVoitMax'] != '')
			{
				$kiloVoitMax = $_POST['kiloVoitMax'];
				$rechecheEffec = true; 
			}
			else
			{
				$kiloVoitMax = 0;
			}
		}
		else
		{
				$kiloVoitMax = 0;
		}
		/***************/
		/***************/
		/***************/
		if (isset($_POST['energie_voit']))
		{
			if( $_POST['energie_voit'] != '')
			{
				$energie_voit = $_POST['energie_voit'];
				$rechecheEffec = true; 
			}
			else
			{
				$energie_voit = 0;
			}
		}
		else
		{
				$energie_voit = 0;
		}
		/***************/
		/***************/
		/***************/
		
		if (isset($_POST['boite_vitesse']))
		{
			if( $_POST['boite_vitesse'] != '')
			{
				$boite_vitesse = $_POST['boite_vitesse'];
				$rechecheEffec = true; 
			}
			else
			{
				$boite_vitesse = 0;
			}
		}
		else
		{
				$boite_vitesse = 0;
		}
		/***************/
		/***************/
		/***************/
		
		if (isset($_POST['anneMise']))
		{
			if( $_POST['anneMise'] != '')
			{
				$anneMise = $_POST['anneMise'];
				$rechecheEffec = true; 
			}
			else
			{
				$anneMise = 0;
			}
		}
		else
		{
				$anneMise = 0;
		}
		/***************/
		/***************/
		/***************/
	
	}
	else
	{
		$kiloVoitMin = 0;
		$kiloVoitMax = 0;
		$energie_voit = 0;
		$boite_vitesse = 0;
		$anneMise = 0;
		$sousCategVoit = 0;
	}
?>
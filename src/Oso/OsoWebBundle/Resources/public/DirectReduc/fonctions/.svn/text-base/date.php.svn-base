<?php

class Date
{
	public function aujourdhui()
	{
		$date = date("Y-m-j");
		return $date;
    }
	
	public function jour()
	{
		$date = date("j");
		return $date;
    }
	
	public function mois()
	{
		$date = date("m");
		return $date;
    }
	
	public function annnee()
	{
		$date = date("Y");
		return $date;
    }
	
	public function mois_prec()
	{
			$date = date('Y-m-d',mktime() - 31*3600*24);
			return $date;
	}
	
	public function mois_suiv()
	{
			$date = date('Y-m-d',mktime() + 31*3600*24);
			return $date;
	}
	
	public function semaine_prec()
	{
			$date = date("Y-m-d", time()-7*24*3600);
			return $date;
	}
	
		public function semaine_suiv()
	{
			$date = date("Y-m-d", time()+7*24*3600);
			return $date;
	}
	
	public function recup_annee($date)
	{
		list($annee, $mois, $jour) = explode('-', $date);
		return $annee;
	}
	
	public function recup_mois($date)
	{
		list($annee, $mois, $jour) = explode('-', $date);
		return $mois;
	}
	
	public function recup_jour($date)
	{
		list($annee, $mois, $jour) = explode('-', $date);
		return $jour;
	}
	
	public function convertion_fr($date)
	{
		list($annee, $mois, $jour) = explode('-', $date);
		$d = $jour."/".$mois."/".$annee;
		return $d;
	}
	
	public function convertion_mysql($date)
	{
		list($jour, $mois, $annee) = explode('/', $date);
		$d = $annee."-".$mois."-".$jour;
		return $d;
	}
	
		public function convertion_addresse($date)
	{
		list($jour, $mois, $annee) = explode('-', $date);
		$d = $jour."_".$mois."_".$annee;
		return $d;
	}
}
?>
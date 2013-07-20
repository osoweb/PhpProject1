function ajoutForm(sousCategImmo,sousCategVoit,sousCategMedia,nbPieceMin,nbPieceMax,nbChambreMini,nbChambremax,surfHabMini,surfHabMax,surfTerMini,surfTerMax,nbEtageMini,nbEtageMax,anneConsMini,anneConsMax,kiloVoitMin, kiloVoitMax, energie_voit, boite_vitesse, anneMise, kiloMotoMin, kiloMotoMax, cylindre,  anneMisemoto, marque, categpc)
{
	var immobilier = new RegExp('^414|^404'); 
	var voiture = new RegExp('^303');
	var moto = new RegExp('^313');
	var phone = new RegExp('^15');
	var pc = new RegExp('^12');
	var feuille = document.getElementById('form');
	var emplacement = document.getElementById('spe');
	var categ = document.getElementById('type_produit').value;
	if( immobilier.test(categ) || sousCategImmo)
	{ 
		ajoutInfoImmo(nbPieceMin,nbPieceMax,nbChambreMini,nbChambremax,surfHabMini,surfHabMax,surfTerMini,surfTerMax,nbEtageMini,nbEtageMax,anneConsMini,anneConsMax); 
	} 
	else
	{
		if(voiture.test(categ)|| sousCategVoit)
		{  
			ajoutInfoVoit(kiloVoitMin, kiloVoitMax, energie_voit, boite_vitesse, anneMise);
            		   
		} 
		else if (moto.test(categ)|| sousCategVoit)
		{
		    ajoutInfoMoto(kiloMotoMin, kiloMotoMax, cylindre,  anneMisemoto);
		}
		else if (phone.test(categ)|| sousCategMedia)
		{
		    ajoutInfoPhone(marque);
		}
		else if (pc.test(categ)|| sousCategMedia)
		{
		    ajoutInfoPc(categpc);
		}
		
		else 
		{ 
			emplacement.innerHTML = ''; emplacement.style.height ='0px'; feuille.style.height = '177px';
		}
	}	
}


function ajoutInfoImmo(nbPieceMin,nbPieceMax,nbChambreMini,nbChambremax,surfHabMini,surfHabMax,surfTerMini,surfTerMax,nbEtageMini,nbEtageMax,anneConsMini,anneConsMax )
{
	var emplacement = document.getElementById('spe'); 
	var feuille = document.getElementById('form'); 
	var donnees = "nbPieceMin=" + nbPieceMin + "&nbPieceMax=" + nbPieceMax + "&nbChambreMini=" + nbChambreMini + "&nbChambremax=" + nbChambremax + "&surfHabMini="+surfHabMini+"&surfHabMax="+surfHabMax+"&surfTerMini="+surfTerMini+"&surfTerMax="+surfTerMax+"&nbEtageMini="+nbEtageMini+"&nbEtageMax="+nbEtageMax+"&anneConsMini="+anneConsMini+"&anneConsMax="+anneConsMax;
	if(window.XMLHttpRequest)
	{
		dialogue = new XMLHttpRequest(); //les autres navigateurs
	}
	else if(window.ActiveXObject)
	{
		dialogue = new ActiveXObject("Microsoft.XMLHTTP"); //IE
	}
	else
	{
		emplacement.innerHTML = 'impossible , probl�mes de navigateur';
	}
	
	dialogue.open("POST", "fonctions/recherche_d/immo.php" , false);
	dialogue.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");  
	dialogue.send(donnees);
	if(dialogue.readyState == 4)
	{		
		emplacement.innerHTML = dialogue.responseText;
		emplacement.style.height ='200px';
		feuille.style.height = '377px';
	}
}

function ajoutInfoVoit(kiloVoitMin, kiloVoitMax, energie_voit, boite_vitesse, anneMise)
{
	var emplacement = document.getElementById('spe'); 
	var feuille = document.getElementById('form'); 
	var donnees = "kiloVoitMin=" + kiloVoitMin + "&kiloVoitMax=" + kiloVoitMax + "&energie_voit=" + energie_voit + "&boite_vitesse=" + boite_vitesse + "&anneMise="+ anneMise;
	if(window.XMLHttpRequest)
	{
		dialogue = new XMLHttpRequest(); //les autres navigateurs
	}
	else if(window.ActiveXObject)
	{
		dialogue = new ActiveXObject("Microsoft.XMLHTTP"); //IE
	}
	else
	{
		emplacement.innerHTML = 'impossible , probl�mes de navigateur';
	}
	
	dialogue.open("POST", "fonctions/recherche_d/voiture.php" , false);
	dialogue.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");  
	dialogue.send(donnees);
	if(dialogue.readyState == 4)
	{		
		emplacement.innerHTML = dialogue.responseText;
		emplacement.style.height ='200px';
		feuille.style.height = '277px';
	}
}

function ajoutInfoMoto(kiloMotoMin, kiloMotoMax, cylindre,  anneMisemoto)
{
	var emplacement = document.getElementById('spe'); 
	var feuille = document.getElementById('form'); 
	var donnees = "kiloMotoMin=" + kiloMotoMin + "&kiloMotoMax=" + kiloMotoMax + "&cylindre=" + cylindre + "&anneMisemoto="+ anneMisemoto;
	if(window.XMLHttpRequest)
	{
		dialogue = new XMLHttpRequest(); //les autres navigateurs
	}
	else if(window.ActiveXObject)
	{
		dialogue = new ActiveXObject("Microsoft.XMLHTTP"); //IE
	}
	else
	{
		emplacement.innerHTML = 'impossible , probl�mes de navigateur';
	}
	
	dialogue.open("POST", "fonctions/recherche_d/moto.php" , false);
	dialogue.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");  
	dialogue.send(donnees);
	if(dialogue.readyState == 4)
	{		
		emplacement.innerHTML = dialogue.responseText;
		emplacement.style.height ='200px';
		feuille.style.height = '250px';
	}
}

function ajoutInfoPhone(marque)
{
    var emplacement = document.getElementById('spe'); 
	var feuille = document.getElementById('form'); 
	var donnees = "marque=" + marque;
    	if(window.XMLHttpRequest)
	{
		dialogue = new XMLHttpRequest(); //les autres navigateurs
	}
	else if(window.ActiveXObject)
	{
		dialogue = new ActiveXObject("Microsoft.XMLHTTP"); //IE
	}
	else
	{
		emplacement.innerHTML = 'impossible , probl�mes de navigateur';
	}
	
	dialogue.open("POST", "fonctions/recherche_d/phone.php" , false);
	dialogue.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");  
	dialogue.send(donnees);
	if(dialogue.readyState == 4)
	{		
		emplacement.innerHTML = dialogue.responseText;
		emplacement.style.height ='200px';
		feuille.style.height = '200px';
	}

}
function ajoutInfoPc(categpc)
{
    var emplacement = document.getElementById('spe'); 
	var feuille = document.getElementById('form'); 
	var donnees = 'categpc=' + categpc;
    	if(window.XMLHttpRequest)
	{
		dialogue = new XMLHttpRequest(); //les autres navigateurs
	}
	else if(window.ActiveXObject)
	{
		dialogue = new ActiveXObject("Microsoft.XMLHTTP"); //IE
	}
	else
	{
		emplacement.innerHTML = 'impossible , probl�mes de navigateur';
	}
	
	dialogue.open("POST", "fonctions/recherche_d/pc.php" , false);
	dialogue.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");  
	dialogue.send(donnees);
	if(dialogue.readyState == 4)
	{		
		emplacement.innerHTML = dialogue.responseText;
		emplacement.style.height ='200px';
		feuille.style.height = '200px';
	}
}
function afficher_cacher()
{
	$(document).ready
	(
			function()
			{
					$("#aff").click
					(
							function()
							{
								$("#form").slideToggle("slow");
								if( $("#aff").html() == '<img src="images/cacher.png">Masquer le formulaire<img src="images/cacher.png">' )
								{ 
									$("#aff").html('<img src="images/afficher.png">Formulaire de recherche<img src="images/afficher.png">');
								} 
								else
								{
									$("#aff").html('<img src="images/cacher.png">Masquer le formulaire<img src="images/cacher.png">');
								} 
								return false;
							}
					);
			}
	);
}
function ajoutInfoAnnonce(nbPiece,nbChambre,surfHab,surfTer,nbEtage,anneCons, cuisine, type_vente )
{
	var emplacement = document.getElementById('spe'); 
	var feuille = document.getElementById('form'); 
	var donnees = "nbPiece=" + nbPiece + "&nbChambre=" + nbChambre + "&surfHab="+surfHab+"&surfTer="+surfTer+"&nbEtage="+nbEtage+"&anneCons="+anneCons+"&cuisine="+cuisine+"&type_vente="+type_vente;
	if(window.XMLHttpRequest)
	{
		dialogue = new XMLHttpRequest(); //les autres navigateurs
	}
	else if(window.ActiveXObject)
	{
		dialogue = new ActiveXObject("Microsoft.XMLHTTP"); //IE
	}
	else
	{
		emplacement.innerHTML = 'impossible , probl�mes de navigateur';	
	}
	
	dialogue.open("POST", "fonctions/precision_annonce.php" , false);
	dialogue.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");  
	dialogue.send(donnees);
	if(dialogue.readyState == 4)
	{		
		emplacement.innerHTML = dialogue.responseText;
		emplacement.style.height ='203px';
	}
}

function ajoutInfoVoitAnnonce(kiloVoit, energie_voit, boite_vitesse, anneMise, type_vente )
{
	var emplacement = document.getElementById('spe'); 
	var feuille = document.getElementById('form'); 
	var donnees = "kiloVoit=" + kiloVoit + "&energie_voit=" + energie_voit + "&boite_vitesse=" + boite_vitesse + "&anneMise="+ anneMise+"&type_vente="+type_vente;
	if(window.XMLHttpRequest)
	{
		dialogue = new XMLHttpRequest(); //les autres navigateurs
	}
	else if(window.ActiveXObject)
	{
		dialogue = new ActiveXObject("Microsoft.XMLHTTP"); //IE
	}
	else
	{
		emplacement.innerHTML = 'impossible , probl�mes de navigateur';	
	}
	
	dialogue.open("POST", "fonctions/precision_annonce_voiture.php" , false);
	dialogue.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");  
	dialogue.send(donnees);
	if(dialogue.readyState == 4)
	{		
		emplacement.innerHTML = dialogue.responseText;
		emplacement.style.height ='123px';
	}
}

function envoi_form(motCle,type_produit)
{
	if(window.XMLHttpRequest)
	{
		dialogue = new XMLHttpRequest(); //les autres navigateurs
	}
	else if(window.ActiveXObject)
	{
		dialogue = new ActiveXObject("Microsoft.XMLHTTP"); //IE
	}
	dialogue.open("GET", "fonctions/recherche_d/libelle_categorie.php?type_produit="+type_produit , false);
	dialogue.send(null);
	if(dialogue.readyState == 4)
	{	
		document.forms['recherche'].action = motCle+'_'+dialogue.responseText+'-recherche_detail-1.html';
	}
	//document.forms['recherche'].submit(); 
}

function envoi_page(motCle,type_produit,nbForm)
{
	pageForm = document.getElementById('elements'+nbForm+'');
	if(window.XMLHttpRequest)
	{
		dialogue = new XMLHttpRequest(); //les autres navigateurs
	}
	else if(window.ActiveXObject)
	{
		dialogue = new ActiveXObject("Microsoft.XMLHTTP"); //IE
	}
	dialogue.open("GET", "fonctions/recherche_d/libelle_categorie.php?type_produit="+type_produit , false);
	dialogue.send(null);
	if(dialogue.readyState == 4)
	{	
		pageForm.action = motCle+'_'+dialogue.responseText+'-recherche_detail-'+nbForm+'.html';
	}
	pageForm.submit(); 
}
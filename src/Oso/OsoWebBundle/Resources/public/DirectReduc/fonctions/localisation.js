function departement()
{
		var region = document.getElementById('regi').value;
		var emplacement = document.getElementById('departement');
		var ville = document.getElementById('ville');
		if(window.XMLHttpRequest)
		{
			dialogue = new XMLHttpRequest(); //les autres navigateurs
		}
	else if(window.ActiveXObject)
		{
			dialogue = new ActiveXObject("Microsoft.XMLHTTP"); //IE
		}
	else{
			emplacement.innerHTML = 'impossible , problèmes de navigateur';
		}
		dialogue.open("GET", "fonctions/ajout_select_localisation.php?region="+region , false);
		dialogue.send(null);
		if(dialogue.readyState == 4)
		{	
		
			emplacement.innerHTML = dialogue.responseText;
			if( dialogue.responseText == "")
			{	
				ville.innerHTML = dialogue.responseText;				
			}
		}	
}

function departement(depart_select)
{
		
		var region = document.getElementById('regi').value;
		var emplacement = document.getElementById('departement');
		var ville = document.getElementById('ville');
		if(window.XMLHttpRequest)
		{
			dialogue = new XMLHttpRequest(); //les autres navigateurs
		}
	else if(window.ActiveXObject)
		{
			dialogue = new ActiveXObject("Microsoft.XMLHTTP"); //IE
		}
	else{
			emplacement.innerHTML = 'impossible , problèmes de navigateur';
		}
		dialogue.open("GET", "fonctions/ajout_select_localisation.php?region="+region+"&depart="+depart_select, false);
		dialogue.send(null);
		if(dialogue.readyState == 4)
		{	
		
		emplacement.innerHTML = dialogue.responseText;
			if( dialogue.responseText == "")
			{	
				ville.innerHTML = dialogue.responseText;
			}
			if (ville)
			{ 
				vill();
			}
		}	
} 

function vill()
{
		
		var departement = document.getElementById('depart').value;
		var emplacement = document.getElementById('ville');
		
		if(window.XMLHttpRequest)
		{
			dialogue = new XMLHttpRequest(); //les autres navigateurs
		}
	else if(window.ActiveXObject)
		{
			dialogue = new ActiveXObject("Microsoft.XMLHTTP"); //IE
		}
	else{
			emplacement.innerHTML = 'impossible , problèmes de navigateur';
		}
		dialogue.open("GET", "fonctions/ajout_select_localisation.php?departement="+departement , false);
		dialogue.send(null);
		if(dialogue.readyState == 4)
		{
			emplacement.innerHTML = dialogue.responseText;	
		}	
		
}

function ville(ville_select)
{
		if(departement = document.getElementById('depart'))
		{
			var departement = document.getElementById('depart').value;
			var emplacement = document.getElementById('ville');
			
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
				emplacement.innerHTML = 'impossible , problèmes de navigateur';
			}
			dialogue.open("GET", "fonctions/ajout_select_localisation.php?departement="+departement+"&ville_select="+ville_select , false);
			dialogue.send(null);
			if(dialogue.readyState == 4)
			{
				emplacement.innerHTML = dialogue.responseText;	
			}
		}
}
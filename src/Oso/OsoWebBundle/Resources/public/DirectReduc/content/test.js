function contenu()
{
	
	if(document.inscription.mail_base)
		var mail_base = document.inscription.mail_base.value;
	else 
		var mail_base = '';
	
	
	var div = document.inscription.mail.value;
	var div2 =document.getElementById('erreur');
	div2.innerHTML='';
	
	var div3 =document.inscription.mdp.value;
	
	
	var div4 =document.getElementById('erreur2');
	var div5 =document.inscription.regi.value;
	
	
	var verif=true;
	
	if(document.inscription.type[0].checked) var div6 =document.inscription.type[0].value;
	else var div6 =document.inscription.type[1].value;
	
	if(window.XMLHttpRequest)
	{
		xhr_object = new XMLHttpRequest(); //les autre navigateur
	}
	else if(window.ActiveXObject)
	{
		xhr_object = new ActiveXObject("Microsoft.XMLHTTP"); //IE
	}
	else{
		div.innerHTML = 'impossible , problèmes de navigateur'; }
	
	xhr_object.open("GET", "content/test.php?choix=1&mail="+div+"&mdp="+div3+"&dep="+div5+"&type="+div6+"&mail_base="+mail_base	, false);

	xhr_object.send(null);
	if(xhr_object.readyState == 4)
	{ 	
		if(xhr_object.responseText == "2")
		{
			div2.innerHTML = "Mail incorrecte.";
			verif=false;
		}else if(xhr_object.responseText == "3")
		{
			div2.innerHTML = "Ce mail est déjà utilisé.";
			verif=false;
		}else if(xhr_object.responseText == "4"){
			div2.innerHTML = "Ce mail est libre";
			verif=true;
		}
		
		/*if(div3 == "1")
		{
			div4.innerHTML = "Mot de passe vide.";
			verif=false;
		}else if(err2=="0") {
		alert("kkk");
		div4.innerHTML = "kk";
		verif=true;
		}*/
		
		/*if(div3 == "") 
	{
		div2.innerHTML = "Aucun mot de passe";
		verif=false;
	}
*/	
		/*if(verif==true) {
		//alert("z");
		document.location.href="inscription.php?mail="+div+"&mdp="+div3;
		
		}*/
	}
}

function verif()
{
	var div = document.inscription.mail.value;
	var div2 =document.getElementById('erreur');
	var div3 =document.inscription.mdp.value;
	if( typeof(document.inscription.siren)!='undefined')
	{
		var siren = document.inscription.siren.value;
	}
	else
	{
		var siren = '';
	}
	var div4 =document.getElementById('erreur2');
	
	//var div5 =document.inscription.departement.value;
	var div7 =document.getElementById('erreur3');
	var div8 =document.inscription.tel.value;
	var div12=document.getElementById('erreur4');
	var div13=document.getElementById('erreur5');

	div12.innerHTML='';
	div4.innerHTML='';
	
	
	//var div9 =document.inscription.cp.value;
	var div10 =document.inscription.nom.value;
	
	
	if(document.getElementById('vi')  && document.inscription.ville.value !=0)
	{
		var div11 =document.getElementById('vi').value;
	}
	else
	{
		div12.innerHTML="<font color=red>Veuillez choisir une ville </font>";
		return false;
	}
	if(div == "")
		{
			div2.innerHTML="<font color=red>Veuillez tapez un mail</font>";
			div3.focus;
			return(false);
		}
	
	if(div3 == "")
		{
			div4.innerHTML="<font color=red>Pas de mot de passe</font>";
			div3.focus;
			return(false);
		}
	if(div10 == "")
		{
			div7.innerHTML="<font color=red>Veuillez choisir un nom</font>";
			div3.focus;
			return(false);
		}
	
	
		
	if(document.inscription.type[0].checked) var div6 =document.inscription.type[0].value;
	else var div6 =document.inscription.type[1].value;
	
	
	
	if(window.XMLHttpRequest)
	{
		xhr_object = new XMLHttpRequest(); //les autre navigateur
	}
	else if(window.ActiveXObject)
	{
		xhr_object = new ActiveXObject("Microsoft.XMLHTTP"); //IE
	}
	else{
		div.innerHTML = 'impossible , problèmes de navigateur'; }
	
	xhr_object.open("GET", "content/test.php?mail="+div+"&mdp="+div3+"&ville="+div11+"&type="+div6	, false);
	xhr_object.send(null);
	
	if(xhr_object.readyState == 4)
	{ 
		if(div2.innerHTML == "Ce mail est déjà utilisé." || div2.innerHTML == "Mail incorrecte." || div7.innerHTML =="Pseudo déjà utilisé.")
		{
			if(div7.innerHTML =="Pseudo déjà utilisé.")
				div13.innerHTML=div2.innerHTML+' '+div7.innerHTML;
			else
				div13.innerHTML=div2.innerHTML;
			return(false);
		}else {
			
			xhr_object.open("GET", "content/inscription.php?mail="+div+"&mdp="+div3+"&ville="+div11+"&type="+div6+"&tel="+div8+"&nom="+div10+"&siren="+siren , false);
			xhr_object.send(null);
			div13.innerHTML=xhr_object.responseText+' Vous pouvez d&eacute;sormais vous connectez.';
			document.inscription.mail.value="";
			document.inscription.mdp.value="";
			return true;
		}
		
	}
	return false;
}

function contenu2()
{

	var div = document.inscription.nom.value;
	var div2= document.getElementById('erreur3');
	
	div2.innerHTML='';
	if(window.XMLHttpRequest)
	{
		xhr_object = new XMLHttpRequest(); //les autre navigateur
	}
	else if(window.ActiveXObject)
	{
		xhr_object = new ActiveXObject("Microsoft.XMLHTTP"); //IE
	}
	else{
		div.innerHTML = 'impossible , problèmes de navigateur'; }
	
	xhr_object.open("GET", "content/test.php?choix=2&nom="+div	, false);
	
	xhr_object.send(null);
	if(xhr_object.readyState == 4)
	{ 	//alert(xhr_object.responseText);
		
		if(xhr_object.responseText == "1")
		{
			div2.innerHTML = "Pseudo déjà utilisé.";
			verif=false;
		}else div2.innerHTML = "Ce pseudo est libre.";
		
		/*if(div3 == "1")
		{
			div4.innerHTML = "Mot de passe vide.";
			verif=false;
		}else if(err2=="0") {
		alert("kkk");
		div4.innerHTML = "kk";
		verif=true;
		}*/
		
		/*if(div3 == "") 
	{
		div2.innerHTML = "Aucun mot de passe";
		verif=false;
	}
*/	
		/*if(verif==true) {
		//alert("z");
		document.location.href="inscription.php?mail="+div+"&mdp="+div3;
		
		}*/
	}
}


function verif2(user_id)
{
	//alert("lala");
	var mail = document.inscription.mail.value;
	var erreur =document.getElementById('erreur');
	var mdp =document.inscription.mdp.value;
	
	//var div4 =document.getElementById('erreur2');
	
	
	//var div7 =document.getElementById('erreur3');
	var tel =document.inscription.tel.value;
	
	//alert("lala");
	
	var id_ville =document.inscription.ville.value;
	
	
	
	if(document.inscription.type[0].checked) 
	var pro_perso =document.inscription.type[0].value;
	else 
	var pro_perso =document.inscription.type[1].value;
	
	
	if(window.XMLHttpRequest)
	{
		xhr_object = new XMLHttpRequest(); //les autre navigateur
	}
	else if(window.ActiveXObject)
	{
		xhr_object = new ActiveXObject("Microsoft.XMLHTTP"); //IE
	}
	else
	{
		div.innerHTML = 'impossible , problèmes de navigateur'; 
	}
	
	
	xhr_object.open("GET", "content/test.php?mail="+mail+"&mdp="+mdp+"&type="+pro_perso+"&choix=1"	, false);
	xhr_object.send(null);
	
	
	if(xhr_object.readyState == 4)
	{ 
		//alert('ok1');
		if(xhr_object.responseText==2) 
		{
			erreur.innerHTML="Mail incorrecte.";
			//return(false);
		}
		if(xhr_object.responseText==3) 
		{
			erreur.innerHTML = "Ce mail est déjà utilisé."
			//return(false);
		}
		
		if(mdp == "")
		{
			alert("Pas de mot de passe");
		} 
		
		else if(xhr_object.responseText==4) 
		{
			xhr_object.open("GET", "content/modif.php?mdp="+mdp+"&type="+pro_perso+"&tel="+tel+"&id_ville="+id_ville+"&user_id="+user_id+"&mail="+mail	, false);
			xhr_object.send(null);
			erreur.innerHTML = xhr_object.responseText;
		}
		
	}
}



function verif_envoi_mail()
{
	var div2 =document.getElementById('erreur');
	div2.innerHTML='';
	if(!verif_mail())
		return false;
		
	if(document.inscription.nom.value=='')
	{
		div2.innerHTML='Veuillez mettre un nom';
		return false;
	}

	if(document.inscription.message.value=='')
	{
		div2.innerHTML='Veuillez mettre un message';
		return false;
	}
}



function verif_mail()
{

	var div = document.inscription.mail.value;
	var div2 =document.getElementById('erreur');
	div2.innerHTML='';
	
	var verif=true;
	
	if(window.XMLHttpRequest)
	{
		xhr_object = new XMLHttpRequest(); //les autre navigateur
	}
	else if(window.ActiveXObject)
	{
		xhr_object = new ActiveXObject("Microsoft.XMLHTTP"); //IE
	}
	else{
		div.innerHTML = 'impossible , problèmes de navigateur'; }
	
	xhr_object.open("GET", "content/test.php?choix=3&mail="+div	, false);

	xhr_object.send(null);
	if(xhr_object.readyState == 4)
	{ 	
		if(xhr_object.responseText == "2")
		{
			div2.innerHTML = "Mail incorrecte.";
			verif=false;
			return false;
		}else if(xhr_object.responseText == "3")
		{
			div2.innerHTML = "Ce mail est déjà utilisé.";
			verif=false;
			return false;
		}else if(xhr_object.responseText == "4"){
			div2.innerHTML = "Ce mail est correct";
			verif=true;
			return true;
		}

	}
	return false;
}

function login(pseudo, mdp)
{		
	if(window.XMLHttpRequest)
	{
		xhr_object = new XMLHttpRequest(); //les autre navigateur
	}
	else if(window.ActiveXObject)
	{
		xhr_object = new ActiveXObject("Microsoft.XMLHTTP"); //IE
	}
	else
	{
		div.innerHTML = 'impossible , problèmes de navigateur';
	}
		
	xhr_object.open("GET", "content/checklogin.php?user="+pseudo+"&mdp="+mdp ,false);
	xhr_object.send(null);
	alert('normalment connecté');
		
}
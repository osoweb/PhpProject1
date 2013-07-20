function suppr(offre_id, user_id)
{	
	var div3 =document.getElementById('panier');
	if(window.XMLHttpRequest)
		{
			xhr_object = new XMLHttpRequest(); //les autre navigateur
			x= new XMLHttpRequest();
		}
	else if(window.ActiveXObject)
		{
			xhr_object = new ActiveXObject("Microsoft.XMLHTTP"); //IE
			x= new ActiveXObject("Microsoft.XMLHTTP");
		}
	else{
		alert('impossible , problèmes de navigateur'); 
		}
	
	xhr_object.open("GET", "content/suppr_panier.php?offre_id="+offre_id+"&user_id="+user_id	, false);
	xhr_object.send(null);
	//alert(xhr_object.responseText);




	if(xhr_object.readyState == 4)
	{
				
				x.open("GET", "inclus.php?page=panier&chargement=1"	, false);
				x.send(null);
				if(x.readyState == 4)
				{
					div3.innerHTML = x.responseText;
				}
	}	
		

}
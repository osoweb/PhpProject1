function login()
{
	
	var div = document.getElementsByName("myusername")[0].value;
	var div2 =document.getElementsByName("mypassword")[0].value;
	var div3 =document.getElementById('menu_services_list');
	var div4 =document.getElementById('error_login');
		
	if(window.XMLHttpRequest)
		{
			xhr_object = new XMLHttpRequest(); //les autre navigateur
		}
	else if(window.ActiveXObject)
		{
			xhr_object = new ActiveXObject("Microsoft.XMLHTTP"); //IE
		}
	else{
		div.innerHTML = 'impossible , probl�mes de navigateur'; }
		
	xhr_object.open("GET", "content/checklogin.php?user="+div+"&mdp="+div2	, false);
	xhr_object.send(null);
	if(xhr_object.readyState == 4)
	{ 	
		if(xhr_object.responseText == "1")
			{
				div4.innerHTML = "<span style='color:red; font-size:12; font-weight:bold;'>Mot de passe ou identifiant incorrecte.</span>";
				}else
					div3.innerHTML = xhr_object.responseText;
					
	}
	if(div3.innerHTML == "admin") window.location = "content/admin.php";
		
}

function logout()
{

	var div3 = document.getElementById('menu_services_list');

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
		alert('impossible , probl�mes de navigateur'); 
		}
		
	xhr_object.open("GET", "content/logout.php"	, false);
	xhr_object.send(null);
	window.location = "index.php";
		
}
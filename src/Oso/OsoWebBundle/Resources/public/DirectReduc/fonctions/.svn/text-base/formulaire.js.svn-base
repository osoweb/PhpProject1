function photo1(taille_ko)
{
	document.getElementById('photo1').innerHTML="<TH>photo 1</TH><TD><INPUT type=hidden name=MAX_FILE_SIZE  VALUE="+taille_ko+"><INPUT type=file name='fichier1' onChange='photo2();></TD>";
}

function photo2(taille_ko)
{
	document.getElementById('photo2').innerHTML="<TH>photo 2</TH><TD><INPUT type=hidden name=MAX_FILE_SIZE  VALUE="+taille_ko+"><INPUT type=file name='fichier2'></TD>";
}

function valider_formulaire(thisForm)
{
	
	
	for(var i=0;i<=thisForm.length;i++)
	{


		if(thisForm.elements[i].className=='obligatoire')
		{
		
			if(thisForm.elements[i].value=='')
			{

				alert('Veuillez remplir le champ '+thisForm.elements[i].name);
				thisForm.elements[i].focus();
				return false;
			}
		}
		
		if(thisForm.elements[i].className=='obligatoire2')
		{
			if(thisForm.elements[i].value=='0')
			{
				alert('Veuillez choisir le champ '+thisForm.elements[i].name);
				thisForm.elements[i].focus();
				return false;
			}
		}
		
		if(thisForm.elements[i].className=='obligatoire3')
		{
			if(thisForm.elements[i].value=='99')
			{
				alert('Veuillez choisir le champ '+thisForm.elements[i].name);
				thisForm.elements[i].focus();
				return false;
			}
		}
		
		if(thisForm.elements[i].className=='chiffre')
		{
			if(thisForm.elements[i].value!='')
			{
				var chifr=/^[0-9]+$/;
				if(chifr.exec(thisForm.elements[i].value)==null)
				{
					alert('Veuillez tapez un chiffre s\'il vous plait.');
					thisForm.elements[i].focus();
					return false;
				}
			}
		}
	
	}
	
	
	return true;
}

function test()
{
return false;
}



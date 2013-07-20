<?php
function test_rempli($get_post,$var_test,$texte)
{
	if($get_post=='get')
	$get_post=$_GET;
	else if($get_post=='post')
	$get_post=$_POST;
	
	if(isset($get_post[$var_test]))
	{
		if(!empty($get_post[$var_test]))
		$var=mysql_real_escape_string($get_post[$var_test]);
		else
		{
			die ($texte);
		}
	}
	else
	{
		die ($texte);
	}
	return $var;
}

function test_rempli2($get_post,$var_test)
{
	if($get_post=='get')
	$get_post=$_GET;
	else if($get_post=='post')
	$get_post=$_POST;
	
	if(isset($get_post[$var_test]))
	{
		if(!empty($get_post[$var_test]))
		$var=mysql_real_escape_string($get_post[$var_test]);
		else
		{
			$var='';
		}
	}
	else
	{
		$var='';
	}
	return $var;
}

function optionel($var)
{
	if(isset($var))
	{
		if(!empty($var))
		{
			$photo=$var;
			return $photo;
		}
		else 
		$photo='';
	} 
	else
	$photo='';

}



function get_extension($nom) {
	$nom = explode(".", $nom);
	$nb = count($nom);
	return strtolower($nom[$nb-1]);
}

function charcode ($text) {
    $text = htmlentities($text); //to convert the simple spec chars
    $search = array("& otilde;","&O tilde;","& ucirc;","&U circ;");
    $replace = array("& #337;","& #336;","& #369;","& #368;");
    $text = str_replace($search, $replace, $text);
    return $text;
} 


function photo($var)
{
	
	if(isset($_FILES[$var]))
	{
		$taille_ko=1024;
		$taille_max=$taille_ko*1024;
		$extensions_ok = array('jpg', 'jpeg','png','bmp','gif');
		$typeimages_ok = array(2);
		
		if($_FILES[$var]['error']!=0)
		{
			switch ($_FILES[$var]['error']) {
			case 1:
				$erreurs[] = "Votre image doit faire moins de $taille_ko Ko !";
				break;
			case 2:
				$erreurs[] = "Votre image doit faire moins de $taille_ko Ko !";
				break;
			case 3:
				$erreurs[] = "L'image n'a ÈtÈ que partiellement tÈlÈchargÈ.";
				break;
			case 4:
				//$erreurs[] = "Aucun fichier n'a ÈtÈ tÈlÈchargÈ.";
				$pas_fichier=1;
				break; 
			case 6:
				$erreurs[] = "Un dossier temporaire est manquant.";
				break;
			case 7:
				$erreurs[] = "…chec de l'Ècriture du fichier sur le disque.";
				break;
			}
		}
		if(isset($pas_fichier))
		{
			$photo='';
		}
		else 
		{
			if(!$getimagesize = getimagesize($_FILES[$var]['tmp_name'])) 
			{
				$erreurs[] = "Le fichier n'est pas une image valide.";
			}
			
			$extension=get_extension($_FILES[$var]['name']);
			if( (!in_array( $extension, $extensions_ok ))
					//or (!in_array($getimagesize[2], $typeimages_ok ))
					)
			{
				$extensions_string='';
				foreach($extensions_ok as $text) { $extensions_string .= $text.', '; }
				$erreurs[] = 'Veuillez s√©lectionner un fichier de type '.substr($extensions_string, 0, -2).' !';
			}
			if( file_exists($_FILES[$var]['tmp_name']) 
					and (filesize($_FILES[$var]['tmp_name']) > $taille_max) )
			{
				$erreurs[] = "Votre fichier doit faire moins de $taille_ko Ko !";
			}
			
			
			if(!isset($erreurs) or empty($erreurs) )
			{
				$utilisateur=$_SESSION['utilisateur'];
				global $id_annonce;
				$name=$utilisateur.'-'.$id_annonce.'-'.$var.'.'.$extension; 
				$uploadpath="content/image_offre/"; 
				$photo=$uploadpath.$name;
				
				
				//a tester
				$i=1;
				while(file_exists($photo)) 
				{
					$name=$utilisateur.'-'.$id_annonce.'-fichier'.$i.'.'.$extension;
					$photo = $uploadpath.$name; 
					$i++;
				}
				
				if(move_uploaded_file($_FILES[$var]['tmp_name'], $photo)) {
					$valid[] = "Image upload√© avec succ√©s (<a href='".$photo."'>Voir</a>)";
					$photo=$name;
				} else {
					$erreurs[] = "Impossible d'uploader le fichier.<br />Veuillez v√©rifier que le dossier ".$uploadpath." existe avec un chmod 755 (ou 777).";
					$photo='';
				}
				
			}	
			else
			{
				
				$photo='';
				$erreurs_str='Votre image n\'a pas ete upload! ';
				foreach($erreurs as $erreur) 
				{
					$erreurs_str.=$erreur;
				}
				echo $erreurs_str;
				
				?>
				<script language="javascript">
				alert("RAPPEL: <?php echo $erreurs_str; ?> ");
				</script>
				<?php
			}
		}
		
	}
	else
	{
		$photo='';
	}
	
	return $photo;
	
	
}
function test_login()
{
$id='';
if(isset($_SESSION['ID']))
{
	$id=$_SESSION['ID'];
}
else
{
	echo '<meta http-equiv=refresh content="0; url=besoin_connect.html">';
	die('la section necessite la connexion, merci.');
}
return $id;
}





function boite_haut()
{
?>
<div id='boite_entete'>
<img src='images/test_arrondi.png' width='820px' height='21px'/>
</div>
<div id='boite_corps' >
<div id='boite_texte'>

<?php
}



function boite_bas()
{
?>
</div>
</div>

<div id='boite_foot'>
<img src='images/test_arrondi_bas.png' width='820px' height='21px'/>
</div>

<?php
}

function mini_boite_haut()
{
?>
<div id='mini_boite_entete'>
<img src='images/test_arrondi.png' width='270px' height='11px'/>
</div>
<div id='mini_boite_corps' >
<div id='boite_texte'>

<?php
}



function mini_boite_bas()
{
?>

</div>
</div>
<div id='mini_boite_foot'>
<img src='images/test_arrondi_bas.png' width='270px' height='11px'/>
</div>

<?php
}





function chaine_titre($text) {
      $tofind = "¿¡¬√ƒ≈‡·‚„‰Â“”‘’÷ÿÚÛÙıˆ¯»… ÀËÈÍÎ«ÁÃÕŒœÏÌÓÔŸ⁄€‹˘˙˚¸ˇ—Ò";
      $replac = "AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuyNn";
      $text = strtr($text,$tofind,$replac);
      
      $text = strtolower($text);
      
      //$text = ereg_replace("[^a-zA-Z0-9]", "_", $text);
      $text = str_replace(' ', '_', $text);
	  $text = str_replace("'", '_', $text);
	  $text = str_replace("-", '_', $text);
	  $text = str_replace("/", '_', $text);
	  $text = str_replace(".", '_', $text);
      while (strstr($text, '__'))
         $text = str_replace('__', '_', $text);
         
      return(str_replace("_$", "", $text));
   }







?>
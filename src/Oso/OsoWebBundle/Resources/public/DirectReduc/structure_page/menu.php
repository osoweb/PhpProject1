<ul id="nav_menu_list">
<form method="post" id="rech" action="recherche_detail.html">
<input type="hidden" name="typeAnnonce" id="typeAnnonce" value="" />
<input type="hidden" name="mot" id="mot" value="" />

		
<center>
	<li style="width:165px;" OnMouseOver="document.getElementById('sous').style['visibility'] = 'visible';"OnMouseOut="document.getElementById('sous').style['visibility'] = 'hidden';";>
	<a href="actu.html">Actualit�s</a>
		<ul id='sous' class="sous_menu">
			<li>
				<a href="annuaire.html">Partenaires</a>
			</li>	
			<li>
				<a href="inscription_annuaire.html">Inscription annuaire</a>
			</li>	
			
		</ul>
	</li>	
		
	
		
		<li style="width:165px;" OnMouseOver="document.getElementById('sous').style['visibility'] = 'visible';"OnMouseOut="document.getElementById('sous').style['visibility'] = 'hidden';";>
			<a href="#" onClick="document.getElementById('rech').submit(); ">
				Annonces
			</a>
			<ul id='sous' class="sous_menu">
		<li>
			<a href="#" onClick="document.getElementById('typeAnnonce').value=1; document.getElementById('rech').submit(); ">
				Offres
			</a>						
		</li>
		
	    <li>
			<a href="#" onClick="document.getElementById('typeAnnonce').value=2; document.getElementById('rech').submit(); ">
				Demandes
			</a>
		</li>
			</ul>
			
		</li>
	
	
	<li style="width:120px;"><a href="recherche_detail.html">Recherche</a>
       
    </li>
    <li style="width:165px;"><a href="ajout_offre.html">D�poser des annonces</a>
    	
    </li>
	<?php 
		//if ($_SESSION['login'] != "")
			//{
		//		echo "<li style=\"width:15%;\"><a href=\" \">Mes annonces</a> </li>";
		//	}
	?>
	<li style="width:165px;"><a href="phpBB3">Forum</a></li>
    <li style="width:165px;" OnMouseOver="document.getElementById('sous').style['visibility'] = 'visible';" OnMouseOut="document.getElementById('sous').style['visibility'] = 'hidden';";><a href="">Mon compte</a>
		<ul id='sous' class="sous_menu">
			<?php 
		if (isset($_SESSION['ID']))
			{
				echo '<li><a href="index.html">me d�connecter</a></li>
					<li><a href="list_mes_annonce.html">Mes annonces</a></li>
					<li><a href="panier.html">Mon panier</a></li>
					<li><a href="infoperso.html">changer mes param�tre</a></li>';
			}
			else
			{
				echo'<li><a href="index.html">me connecter</a></li>
    		<li><a href="formInscription.html">inscription</a></li>';
			}
	?>
			
        </ul>
    </li>
	
</center>
</form>
</ul>
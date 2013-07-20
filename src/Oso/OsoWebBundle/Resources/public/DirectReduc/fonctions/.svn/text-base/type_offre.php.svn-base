<?php

	$query='SELECT * FROM type_offre';
	$result=mysql_query($query) or die ("Error in query: $query. " . mysql_error());	  	  	  
	
	
	while($data=mysql_fetch_array($result))
	{		
		echo '<OPTGROUP   label="'.$data['TYPE_OFFRE_LIBELLE'].'">';
		$query='SELECT * FROM type_ss_offre WHERE TYPE_OFFRE_ID="'.$data['TYPE_OFFRE_ID'].'"';
		$result2=mysql_query($query) or die ("Error in query: $query. " . mysql_error());	  	  	  
		while($data2=mysql_fetch_array($result2))
		{
			if(isset($type_annonce_id))
			{
				
				echo '	<option value="'.$data2['TYPE_SS_OFFRE_ID'].'"';
				if($type_annonce_id==$data2['TYPE_SS_OFFRE_ID'])
				{
					echo ' selected ';
				}
				echo' >'.$data2['TYPE_SS_OFFRE_LIBELLE'].'</option>';
			}
			else
			{
				echo '	<option value="'.$data2['TYPE_SS_OFFRE_ID'].'" >'.$data2['TYPE_SS_OFFRE_LIBELLE'].'</option>';
			}
		}
		echo '</optgroup>';
		
	}
	

?>

<?php

include('../model/config.php'); 

               // On utilise les fonctions PHP mysql_real_escape_string et htmlspecialchars pour la sécurité
		
               $IDENTIFIANT_VERS =htmlspecialchars($_POST['IDENTIFIANT_VERS']);
			   $datetime =htmlspecialchars($_POST['datetime']);
			   $somme_vers = htmlspecialchars($_POST['somme_vers']);
			   
 
			   
			$requete = "UPDATE versement SET SOMME_VERS='$somme_vers', DATE_VERS='$datetime' WHERE IDENTIFIANT_VERS='$IDENTIFIANT_VERS';" ;
			   
			   $resultat = $con->query($requete);
			  
			   $query="select * from versement where IDENTIFIANT_VERS=$IDENTIFIANT_VERS;";
		       $res =$con->query($query) or die (mysql_error());
			   $rowCount = $res->num_rows;
			   if( $rowCount>0){ 
			   echo '<script language =javascript> alert(\'op\351ration r\351ussie\') </script>';
			    echo '<script language =javascript> location.href = \'../model/caisse.php?page=versementGlobal.php\' </script>';
			
			 }
		        else 
			{
				echo '<script language =javascript> alert(\'\351chec de l\'op\351ration\') </script>';
				 echo '<script language =javascript> location.href = \'../model/caisse.php?page=versementGlobal.php\' </script>';
			
			}

	  
?>
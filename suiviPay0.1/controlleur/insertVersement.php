
<?php

include('../model/config.php'); 

               // On utilise les fonctions PHP mysql_real_escape_string et htmlspecialchars pour la sécurité
		
               
			   $datetime =htmlspecialchars($_POST['datetime']);
			   $somme_vers = htmlspecialchars($_POST['somme_vers']);
			  			   
     		   $requete = "INSERT INTO versement(SOMME_VERS, DATE_VERS) VALUES($somme_vers,'$datetime');";
			   $resultat = $con->query($requete);
			  
			   $query="select * from versement where DATE_VERS='$datetime';";
		       $res =$con->query($query) or die (mysql_error());
			   $rowCount = $res->num_rows;
			   if( $rowCount>0){ 
			   echo '<script language =javascript> alert(\'op\351ration r\351ussie\') </script>';
			    echo '<script language =javascript> location.href = \'../model/caisse.php?page=liste_versement.php\' </script>';
			
			 }
		        else 
			{
				echo '<script language =javascript> alert(\'\351chec de l\'op\351ration\') </script>';
				echo '<script language =javascript> location.href = \'../model/caisse.php?page=newVersement.php\' </script>';
			
			}

	  
?>
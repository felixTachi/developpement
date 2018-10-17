

<?php

include('../model/config.php'); 

               // On utilise les fonctions PHP mysql_real_escape_string et htmlspecialchars pour la sécurité
		
               
			   $ID_Personnel =htmlspecialchars($_POST['ID_Personnel']);
			   $categorie = htmlspecialchars($_POST['categorie']);
		       $user_name = htmlspecialchars($_POST['user_name']);
			   $mot_de_passe = htmlspecialchars($_POST['mot_de_passe']);
			   
     		   $requete = "INSERT INTO compte(ID_PERSONNEL,NOM_UTILISATEUR,MOT_DE_PASSE,CATEGORIE_COMPTE) VALUES($ID_Personnel,'$user_name','$mot_de_passe','$categorie');";
			   $resultat = $con->query($requete) or die (mysql_error());
			  
			   $query="select * from compte where MOT_DE_PASSE='$mot_de_passe';";
			   $res =$con->query($query) or die (mysql_error());
			   $rowCount = $res->num_rows;
			   if( $rowCount>0){ 
			   echo '<script language =javascript> alert(\'op\351ration r\351ussie\') </script>';
			    echo '<script language =javascript> location.href = \'../model/admin.php?page=newUser.php\' </script>';
			
			 }
		        else 
			{
				echo '<script language =javascript> alert(\'\351chec de l\'op\351ration\') </script>';
				 echo '<script language =javascript> location.href = \'../model/admin.php?page=newUser.php\' </script>';
			
			}

	  
?>
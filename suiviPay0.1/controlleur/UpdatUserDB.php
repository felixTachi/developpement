

<?php

include('../model/config.php'); 

               // On utilise les fonctions PHP mysql_real_escape_string et htmlspecialchars pour la sécurité
		
               $id_user=$_POST['id_user'];
			   $ID_Personnel =htmlspecialchars($_POST['ID_Personnel']);
			   $categorie = htmlspecialchars($_POST['categorie']);
		       $user_name = htmlspecialchars($_POST['user_name']);
			   $mot_de_passe = htmlspecialchars($_POST['mot_de_passe']);
			   
			    $requete = "UPDATE compte SET ID_PERSONNEL='$ID_Personnel', NOM_UTILISATEUR='$user_name', MOT_DE_PASSE='$mot_de_passe',CATEGORIE_COMPTE='$categorie' WHERE IDENTIFIANT_COMPTE='$id_user';" ;
			   $resultat = $con->query($requete);
			  
			   $query="select * from compte where MOT_DE_PASSE='$mot_de_passe';";
		       $res =$con->query($query) or die (mysql_error());
			   if($res->rowCount()>0){ 
			   echo '<script language =javascript> alert(\'op\351ration r\351ussie\') </script>';
			   echo '<script language =javascript> location.href = \'../model/admin.php?page=../vue/liste_Utilisateur.php\' </script>';
			 }
		        else 
			{
			echo '<script language =javascript> alert(\'échec de l\'op\351ration\') </script>';
			echo '<script language =javascript> location.href = \'../model/admin.php?page=../vue/liste_Utilisateur.php\' </script>';
			}

	  
?>
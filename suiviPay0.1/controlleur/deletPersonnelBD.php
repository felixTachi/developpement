

<?php

include('../model/config.php'); 

               // On utilise les fonctions PHP mysql_real_escape_string et htmlspecialchars pour la sécurité
		if(isset($_POST['id_user'])){
			$id_user=$_POST['id_user'];
               $deletPersonnel=$_POST['deletPersonnel'];
			   $requeteUser="DELETE FROM compte WHERE IDENTIFIANT_COMPTE=$id_user;";
			    $requete="DELETE FROM personnel WHERE ID_PERSONNEL=$deletPersonnel;";
			    $resultat = $con->query($requeteUser);
			   $resultat = $con->query($requete);
			   echo '<script language =javascript> alert(\'op\351ration r\351ussie\') </script>';
			   echo '<script language =javascript> location.href = \'../model/admin.php?page=../vue/liste_personnel.php\' </script>';
		}
		else
		{
		
		  $deletPersonnel=$_POST['deletPersonnel'];
			   $requete="DELETE FROM personnel WHERE ID_PERSONNEL=$deletPersonnel;";
			   $resultat = $con->query($requete);
			   echo '<script language =javascript> alert(\'op\351ration r\351ussie\') </script>';
			   echo '<script language =javascript> location.href = \'../model/admin.php?page=../vue/liste_personnel.php\' </script>';
			
		}
	  
?>
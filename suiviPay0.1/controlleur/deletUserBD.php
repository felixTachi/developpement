

<?php

include('../model/config.php'); 

               // On utilise les fonctions PHP mysql_real_escape_string et htmlspecialchars pour la sécurité
		
               $id_user=$_POST['id_user'];
			   $requete="DELETE FROM compte WHERE IDENTIFIANT_COMPTE=$id_user;";
			   $resultat = $con->query($requete);
			   echo '<script language =javascript> alert(\'op\351ration r\351ussie\') </script>';
			   echo '<script language =javascript> location.href = \'../model/admin.php?page=../vue/liste_Utilisateur.php\' </script>';
	  
?>
<?php

include('../model/config.php'); 

               // On utilise les fonctions PHP mysql_real_escape_string et htmlspecialchars pour la sécurité
		
             $IDENTIFIANT_VERS =htmlspecialchars($_POST['IDENTIFIANT_VERS']);
			   $requete="DELETE FROM versement WHERE IDENTIFIANT_VERS=$IDENTIFIANT_VERS ;";
			   $resultat = $con->query($requete);
			   echo '<script language =javascript> alert(\'op\351ration r\351ussie\') </script>';
			   echo '<script language =javascript> location.href = \'../model/caisse.php?page=versementGlobal.php\' </script>';
	  
?>
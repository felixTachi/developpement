
<?php

include('../model/config.php'); 

               // On utilise les fonctions PHP mysql_real_escape_string et htmlspecialchars pour la sécurité
		
               $IDENTIFIANT_VERS =htmlspecialchars($_POST['IDENTIFIANT_VERS']);
			   $id_comande =htmlspecialchars($_POST['id_comande']);
			   $somme_vers = htmlspecialchars($_POST['somme_vers']);
		        $heure =date('H:i:s', time());
				if($_POST['date_vers']=='')
			   $date_vers=date("Y-m-d");
			   else
			    $date_vers =htmlspecialchars($_POST['date_vers']);
			   $date_Heure=$date_vers.' '. $heure;
			   
 
			   
			     $requete = "UPDATE versement SET SOMME_VERS='$somme_vers', IDENTIFIANT_COMMANDE='$id_comande',DATE_VERS='$date_Heure' WHERE IDENTIFIANT_VERS='$IDENTIFIANT_VERS';" ;
			   
			   $resultat = $con->query($requete);
			  
			   $query="select * from versement where IDENTIFIANT_COMMANDE='$id_comande' and DATE_VERS='$date_Heure' AND IDENTIFIANT_COMMANDE=$id_comande;";
		       $res =$con->query($query) or die (mysql_error());
			   if($res->rowCount()>0){ 
			   echo '<script language =javascript> alert(\'op\351ration r\351ussie\') </script>';
			    echo '<script language =javascript> location.href = \'../model/caisse.php?page=versementGlobal.php\' </script>';
			
			 }
		        else 
			{
				echo '<script language =javascript> alert(\'\351chec de l\'op\351ration\') </script>';
				 echo '<script language =javascript> location.href = \'../model/caisse.php?page=versementGlobal.php\' </script>';
			
			}

	  
?>
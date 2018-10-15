

<?php

include('../model/config.php'); 

               // On utilise les fonctions PHP mysql_real_escape_string et htmlspecialchars pour la sécurité
		
               $id_personnel =htmlspecialchars($_POST['id_personnel']);
			   $nom_personnel =htmlspecialchars($_POST['nom_personnel']);
			   $prenom_personnel = htmlspecialchars($_POST['prenom_personnel']);
		       $num_cni = htmlspecialchars($_POST['num_cni']);
			   $num_tel = htmlspecialchars($_POST['num_tel']);
			   $poste = htmlspecialchars($_POST['poste']);
		       $date_enregistrement = htmlspecialchars($_POST['date_enregistrement']);
			   
			    $requete = "UPDATE personnel SET  NOM_DU_PERSONNEL='$nom_personnel', PRENOM_PERSONNEL='$prenom_personnel',NUMERO_CNI='$num_cni',POSTE='$poste',NUM_TEL='$num_tel',DATE_FONCTION='$date_enregistrement' WHERE ID_PERSONNEL='$id_personnel';" ;
			   $resultat = $con->query($requete);
			  			  
			   $query="select * from personnel where ID_PERSONNEL='$id_personnel';";
		       $res =$con->query($query) or die (mysql_error());
			   if($res->rowCount()>0){ 
			   echo '<script language =javascript> alert(\'op\351ration r\351ussie\') </script>';
			   echo '<script language =javascript> location.href = \'../model/admin.php?page=../vue/liste_personnel.php\' </script>';
			 }
		        else 
			{
			echo '<script language =javascript> alert(\'échec de l\'op\351ration\') </script>';
			echo '<script language =javascript> location.href = \'../model/admin.php?page=../vue/liste_personnel.php\' </script>';
			}

	  
?>
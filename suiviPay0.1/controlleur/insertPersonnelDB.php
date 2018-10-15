

<?php

include('../model/config.php'); 

         // On utilise les fonctions PHP mysql_real_escape_string et htmlspecialchars pour la sécurité	
               
			   $nom_personnel =htmlspecialchars($_POST['nom_personnel']);
			   $prenom_personnel = htmlspecialchars($_POST['prenom_personnel']);
		       $num_cni = htmlspecialchars($_POST['num_cni']);
			   $num_tel = htmlspecialchars($_POST['num_tel']);
			   $poste = htmlspecialchars($_POST['poste']);
		       $date_enregistrement = htmlspecialchars($_POST['date_enregistrement']);
			   
     		   $requete = "insert into personnel VALUES('','$nom_personnel','$prenom_personnel','$num_cni','$poste','$num_tel','$date_enregistrement');" or die (mysql_error());
			   $resultat = $con->query($requete);
			  
			   $query="select * from personnel where NUMERO_CNI='$num_cni'";
		       $res =$con->query($query) or die (mysql_error());
			   if($res->rowCount()>0){ 
			   echo '<script language =javascript> alert(\'op\351ration r\351ussie\') </script>';
			  echo '<script language =javascript> location.href = \'../model/admin.php?page=Ajout_Personnel.php\' </script>';
			 }
		        else 
			{
					echo '<script language =javascript> alert(\'\351chec de l\'op\351ration\') </script>';
				 echo '<script language =javascript> location.href = \'../model/admin.php?page=Ajout_Personnel.php\' </script>';
			}

	  
?>

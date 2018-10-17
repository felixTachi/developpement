<?php
include('config.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SERVICES PLUS SARL</title>
</head>
<?php

if (isset($_POST['username']) AND isset($_POST['password'])) //si l'utilisateur a posté un mot de passe
{ 
     
    $nom_utilisateur = htmlspecialchars($_POST['username']);
    $mot_de_passe = htmlspecialchars($_POST['password']);//on crypte le mot de passe
             
    $requete_ident = $con->query("SELECT * FROM compte WHERE NOM_UTILISATEUR='".$nom_utilisateur."'") or die (mysql_error());
    $identification = $requete_ident->fetch_assoc();
     
    if ($identification['NOM_UTILISATEUR']==$nom_utilisateur AND $identification['MOT_DE_PASSE']==$mot_de_passe)  //et on le compare au nom d'utilisateur et mot de passe stocké dans la bdd
    {
		 switch ($identification['CATEGORIE_COMPTE'])
	 {
		 case 1:
		 session_start();
		  $_SESSION['connecté']=1;
        $_SESSION['NOM_UTILISATEUR'] = $identification['NOM_UTILISATEUR'];
		$_user_connet=$nom_utilisateur;
       		
		//code test
		// if($nbreLigne>0){//si le client exist
				
		//on l'envoi à la page d'accueil
		
		
	     echo '<script language =javascript> location.href = \'admin.php?utilisateur='.$_user_connet.'\' </script>';break;
		 case 2: 
		  session_start();
		  $_SESSION['NOM_UTILISATEUR'] = $identification['NOM_UTILISATEUR'];
		 $_SESSION['CATEGORIE_COMPTE']= 2;
		//code test
		// if($nbreLigne>0){//si le client exist
				
		//on l'envoi à la page d'accueil
		
	     echo '<script language =javascript> location.href = \'economat.php\' </script>';break;
		 case 3:
		  session_start();
		  $_SESSION['NOM_UTILISATEUR'] = $identification['NOM_UTILISATEUR'];
		$_user_connet=  $_SESSION['NOM_UTILISATEUR'];
        $_SESSION['connecté']=1;
		$_SESSION['CATEGORIE_COMPTE']= 3;
		//code test
		// if($nbreLigne>0){//si le client exist
				
		//on l'envoi à la page d'accueil
		
	     echo '<script language =javascript> location.href = \'caisse.php?utilisateur='.$_user_connet.'\' </script>';break;
		 case 4:
		  session_start();
		  $_SESSION['NOM_UTILISATEUR'] = $identification['NOM_UTILISATEUR'];
		$_user_connet=  $_SESSION['NOM_UTILISATEUR'];
        $_SESSION['connecte']=1;
		$_SESSION['CATEGORIE_COMPTE']= 4;
		//code test
		// if($nbreLigne>0){//si le client exist
				
		//on l'envoi à la page d'accueil
		
	     echo '<script language =javascript> location.href = \'supervisionGlobal.php?utilisateur='.$_user_connet.'\' </script>';break;
		}
	}
		 else 
		 {
		echo '<script language =javascript> alert(\'utilisateur non identifié\') </script>';
		echo '<script language =javascript> location.href = \'../index.php\'</script>';
		 				
			
		exit;		
    }
	
	$con = null;
}
?>

<body>
</body>
</html>
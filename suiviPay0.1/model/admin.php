<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <link href="../bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet">
    <link href="../vue/style.css" rel="stylesheet">
  <!-- Un peu de style pour la visualisation -->
  <style type="text/css">
    .col-md-8, .col-sm-10 { line-height: 200px; }
    .col-md-12 { line-height: 80px; }
  </style>
  <title>AFRIKPAY SUIVI PAY UD -- VUE ADMINISTRATEUR</title>
  <script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
  <link href="../SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css">
</head>
  <body style="margin-top:0px;">
    <div class="container-fluid">
    <?php
	
session_start();	
	if(!isset($_SESSION['NOM_UTILISATEUR'])){
	echo '<script language="JavaScript" > alert("VOUS N\'AVEZ PAS ACCES A CE CONTENU !!");document.location="../index.php";</script>';}
	$user=$_SESSION['NOM_UTILISATEUR'];
	
    include('entete.php');

	 include('menudroitAdmin.php');
	 switch (@$_GET['page'])
	 {
	case 'newPersonnel.php': include('newPersonnel.php'); break;
	case '../vue/liste_personnel.php': include('../vue/liste_personnel.php'); break;
	case 'Ajout_Personnel.php': include('Ajout_Personnel.php'); break;
	case 'newUser.php': include('newUser.php'); break;
	case '../vue/liste_Utilisateur.php': include('../vue/liste_Utilisateur.php'); break;
	case 'adminGlobale.php': include('adminGlobale.php'); break;

	//case 'liste_Utilisateur.php': include('liste_Utilisateur.php'); break;
	
	
	case 'updatFormUser.php': $id_user=$_GET['id_user']; include('updatFormUser.php'); break;
	case 'deletUser.php': $id_user=$_GET['id_user']; include('deletUser.php'); break;
	case 'deletPersonnel.php': $id_personnel=$_GET['id_personnel']; include('deletPersonnel.php'); break;
	case 'updatFormPersonnel.php': $id_personnel=$_GET['id_personnel'];include('updatFormPersonnel.php'); break;	
	default : include('../vue/liste_Utilisateur.php'); break;
		 
	} 

	?>
      </div>
  </div>
</div>
  <?php
     include('piedPage.php');	 
	 ?>
    </div>
  <script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
    </script>
  </body>
</html>
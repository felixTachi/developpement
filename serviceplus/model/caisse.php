<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <link href="../bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet">
    <link href="../vue/style.css" rel="stylesheet">
  <!-- Un peu de style pour la visualisation -->
  <title>SERVICES PLUS SARL -- VUE CONTROLE</title>
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
	 include('menudroitCaisse.php');
	 
	 switch (@$_GET[page])
	 {
	case 'newVersement.php': include('newVersement.php'); break;

	case '../vue/liste_versement.php': include('../vue/liste_versement.php'); break;
	default : include('../vue/listAllPaiement.php'); break; 	 
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
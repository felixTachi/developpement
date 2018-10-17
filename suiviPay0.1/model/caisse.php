<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
	<style>
		#menu{
			text-align: center;
			font-size: 16px;
			color:#CCC;
		}
		.fixedTop{
			position: fixed;
			top:0;
			width: 100%;
			margin-left: auto;
			margin-right: auto;
		}
	</style>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <link href="../bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet">
		<link href="../vue/style.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.css" rel="stylesheet">
		<link href="../bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Un peu de style pour la visualisation -->
  <title>AFRIKPAY -- VUE DE CONTROLE</title>
  <script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
  <link href="../SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="../bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" />  
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
	case 'deletVersementForm.php': $IDENTIFIANT_VERS=$_GET['IDENTIFIANT_VERS'];	include('deletVersementForm.php'); break; 
	case 'updatFormVersement.php': $IDENTIFIANT_VERS=$_GET['IDENTIFIANT_VERS']; include('updatFormVersement.php'); break;	 
	case 'newVersement.php': include('newVersement.php'); break;
	case 'versementGlobal.php': include('versementGlobal.php'); break;
	case 'listAllPaiementByOffice.php': include('../vue/listAllPaiementByOffice.php'); break;
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
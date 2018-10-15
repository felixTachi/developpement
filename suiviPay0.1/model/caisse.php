<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <link href="../bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet">
    <link href="../vue/style.css" rel="stylesheet">
  <!-- Un peu de style pour la visualisation -->
  <title>AFRIKPAY -- VUE DE CONTROLE</title>
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
	case '../vue/liste_Met.php': include('../vue/liste_Met.php'); break;	 
	
	case '../vue/BillanBuffet.php': include('../vue/BillanBuffet.php'); break;	 
	
	case 'newElemetCouvert.php': include('newElemetCouvert.php'); break;	 
	case '../vue/recapJournaliere.php':include('../vue/recapJournaliere.php'); break;
	case '../vue/recatitulatifGlobal.php':include('../vue/recatitulatifGlobal.php'); break; 
	case 'deletVersementForm.php': $IDENTIFIANT_VERS=$_GET['IDENTIFIANT_VERS'];	include('deletVersementForm.php'); break; 
	case 'updatFormVersement.php': $IDENTIFIANT_VERS=$_GET['IDENTIFIANT_VERS']; include('updatFormVersement.php'); break;	 
	case 'newCouvert.php': $id_command=$_GET['IDENTIFIANT_COMMANDE']; include('newCouvert.php'); break;
	case 'newVersement.php': include('newVersement.php'); break;
	case 'newCommand.php': include('newCommand.php'); break;
	case 'commandeGlobal.php': include('commandeGlobal.php'); break;
	case 'versementGlobal.php': include('versementGlobal.php'); break;
	
	case 'deletMet.php': $IDENTIFIANT_MET =$_GET['IDENTIFIANT_MET']; include('deletMet.php'); break;
	
	case 'deletBuffet.php': $id_buffet =$_GET['IDENTIFIANT_BUFFET']; include('deletBuffet.php'); break;
	case 'deletCommandForm.php': $id_command =$_GET['IDENTIFIANT_COMMANDE']; include('deletCommandForm.php'); break;
	case 'deletCouvertForm.php': $id_couvert =$_GET['IDENTIFIANT_COUVERT'];$id_command =$_GET['IDENTIFIANT_COMMANDE']; include('deletCouvertForm.php'); break;
	case 'updatFormBuffet.php': $id_buffet =$_GET['IDENTIFIANT_BUFFET']; include('updatFormBuffet.php'); break;
	case 'updatFormCommande.php': $id_command=$_GET['IDENTIFIANT_COMMANDE']; include('updatFormCommande.php'); break;
	case 'updatFormMet.php': $IDENTIFIANT_MET=$_GET['IDENTIFIANT_MET']; include('updatFormMet.php'); break;
	case 'updatFormCouvert.php': $id_command =$_GET['IDENTIFIANT_COMMANDE']; $id_couvert =$_GET['IDENTIFIANT_COUVERT'];include('updatFormCouvert.php'); break;
	case 'BuffetGlobal.php': include('BuffetGlobal.php'); break;
	case 'detailBuffet.php': $id_buffet=$_GET['IDENTIFIANT_BUFFET']; include('detailBuffet.php'); break;
	case 'detailCommande.php': $id_command=$_GET['IDENTIFIANT_COMMANDE']; include('detailCommande.php'); break;
	case '../vue/liste_ElementBuffet.php': include('../vue/liste_ElementBuffet.php'); break;
	case '../vue/liste_commande.php': include('../vue/liste_commande.php'); break;
	case '../vue/liste_versement.php': include('../vue/liste_versement.php'); break;
	case '../vue/liste_buffet.php': include('../vue/liste_buffet.php'); break;
	case 'newBuffet.php': include('newBuffet.php'); break;
	case 'elementBuffet.php': $id_buffet=$_GET['IDENTIFIANT_Buffet']; include('elementBuffet.php'); break;
	case 'updatFormElementBuffet.php':$id_element=$_GET['IDENTIFIANT_ELEMENT'];$id_buffet=$_GET['IDENTIFIANT_BUFFET1']; include('updatFormElementBuffet.php'); break;
	case 'deletElementBuffet.php': $_idElement = $_GET['IDENTIFIANT_ELEMENT'];$_idBuffet=$_GET['IDENTIFIANT_BUFFET1']; include('deletElementBuffet.php'); break;
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
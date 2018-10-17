
<div   class="row menuLateral" width="60px">
 
        <div id="menu"  style="background-color:#003366; height: 100%" class="col-md-3">
          <ul style="margin-left:2px;" class="list-group list-unstyled">
		   <a href="#" class="list-group-item active">
            <span class="glyphicon glyphicon-chevron-right pull-right"></span>
             SUIVI DES PAIEMENTS
          </a>
           <li ><a href="caisse.php?page=listAllPaiement.php">ETAT DES PAIEMENTS</a></li>
           <li><a href="caisse.php?page=listAllPaiementByOffice.php">PAIEMENTS PAR ETABLISSEMENT</a></li>
           <li><a href="#">FRAIS DE PREINSCRIPTION</a></li> 
           
          
         <a href="caisse.php?page=versementGlobal.php" class="list-group-item">
            <span class="glyphicon glyphicon-chevron-right pull-right"></span>
              VERSEMENT
          </a>
           <li><a href="caisse.php?page=newVersement.php">NOUVEAU VERSEMENT</a></li>
           <li><a href="caisse.php?page=versementGlobal.php">ETAT DES VERSEMENTS</a></li>
           <a href="" class="list-group-item">
            <span class="glyphicon glyphicon-chevron-right pull-right"></span>
              TABLEAU RECAPITULATIF
          </a>
          <li><a href="#">FICHE DE SUIVI</a></li>
                 
        </ul>
        <BR/><BR/><BR/>
        <script type="text/javascript" src="jquery.sticky.js"></script>
        <script>
        $(window).load(function(){
      $("#menu").sticky({ topSpacing: 0 });
    });

        </script>
        </div>
        
       
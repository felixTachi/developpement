 <?php
 include('config.php');
 
$requeteVers=" SELECT
  `commandetable`.`IDENTIFIANT_COMMANDE`,
  `commandetable`.`NUMERO_FACTURE`,
  `commandetable`.`ID_PERSONNEL`,
  `commandetable`.`NOM_CLIENT`,
  `commandetable`.`DATE_COMMANDE`,
  `commandetable`.`IDENTIFIANT_TABLE_CLIENT`,
  `commandetable`.`NUMERO_TABLE`,
  `commandetable`.`ESPACE__DE_VENTE`,
  `versement`.`IDENTIFIANT_VERS`,
  `versement`.`SOMME_VERS`,
  `versement`.`IDENTIFIANT_COMMANDE` AS `IDENTIFIANT_COMMANDE1`,
  `versement`.`DATE_VERS`
FROM
  `commandetable`
  INNER JOIN `versement` ON `commandetable`.`IDENTIFIANT_COMMANDE` =
    `versement`.`IDENTIFIANT_COMMANDE` WHERE  `versement`.`IDENTIFIANT_VERS` = $IDENTIFIANT_VERS;";
 $resultatVers = $con->query($requeteVers);
$requete="select * FROM commande ";
$resultat = $con->query($requete);


 ?>
  <div class=" col-md-ofset-3 col-xm-9 col-sm-9 col-md-9 col-lg-9">
 <form  class="form-horizontal col-md-ofset-3 col-xm-9 col-sm-9 col-md-9 col-lg-9" action="../controlleur/updatVersementBD.php" method="post">
 
 <input name="IDENTIFIANT_VERS" type="hidden" value="<?php echo  $IDENTIFIANT_VERS ; ?>" />

  <div class="form-group">

    <legend> Modification d'un versement</legend>

  </div>

  <div class="row">

    <div class="form-group">

      <label for="text" class="col-sm-3 col-md-3 col-lg-2 control-label">indice commande : </label>

      <div class="col-sm-4 col-md-6 col-lg-9">

        <select name="id_comande" class="form-control" required>
         <?php
		
		while ($resultVersem = $resultatVers->fetch(PDO::FETCH_ASSOC)){
		?>
        <option value="<?php echo $resultVersem['IDENTIFIANT_COMMANDE']; ?>">
        <?php echo $resultVersem['DATE_COMMANDE'].'  N°Bon:'.$resultVersem['NUMERO_FACTURE'].'   '.$resultVersem['NUMERO_TABLE'].'  '.$resultVersem['ESPACE__DE_VENTE']; ?></option>
        </select>

      </div>

    </div>

  </div>

  <div class="row">


  </div>

  <div class="row">

    <div class="form-group">

      <label for="textarea" class="col-sm-3 col-md-3 col-lg-2 control-label" >Somme : </label>

     <div class="col-sm-4 col-md-6 col-lg-9">

        <input type="textarea" class="form-control" name="somme_vers" value="<?php echo $resultVersem['SOMME_VERS']; ?>" required>

      </div>

    </div>

  </div>

   <div class="row">

    <div class="form-group">

      <label for="textarea" class="col-sm-3 col-md-3 col-lg-2 control-label" >Date: </label>

    <div class="col-sm-4 col-md-6 col-lg-9">

        <input type="date" class="form-control" value="<?php echo $resultVersem['DATE_VERS']; ?>" name="date_vers" >

      </div>
<?php } ?>
    </div>

  </div>
   
   <div class="input-group-btn">

    <button type="reset" class="btn btn-primary">Annuler</button>
	<button type="submit" class="btn btn-primary">Enregistrer</button>

   </div>   

</form>
  </div>
  </div>
 <?php
 include('config.php');
 
$requete="select * FROM personnel";
$resultat = $con->query($requete);
$requeteTable="select * FROM table_client";
$resultatTable = $con->query($requeteTable);

 ?>
 <div class=" col-md-ofset-3 col-xm-9 col-sm-9 col-md-9 col-lg-9">
 <h4>Etats des commandes </h4>
 <form  style="margin-top:0px; " class="form-horizontal col-md-ofset-3 col-xm-9 col-sm-9 col-md-9 col-lg-12"  method="post" action="caisse.php?page=commandeGlobal.php">
  <div class="row">
    <div class="form-group" style="width:100%">
	  <label  for="date"  class="col-sm-1 col-md-1 col-lg-1 control-label">N°BON:</label>
      <div class="col-sm-4 col-md-4 col-lg-4">
        <input  type="number" class="form-control input-sm" name="number" />
      </div>     
      <div class="col-sm-2 col-md-2 col-lg-2">
    <button type="submit" name="bouton" style="height:30px;margin-left:-40px; margin-top:-15px" class="btn btn-primary">OK</button>
    </div>
   </div>
  </div>
 </form>
 <?php
 if(isset($_POST['bouton'])){

	$number =htmlspecialchars(@$_POST['number']);

			 $query="SELECT
  `commandetable`.`NOM_CLIENT`,
  `commandetable`.`ID_PERSONNEL`,
  `commandetable`.`DATE_COMMANDE`,
  `commandetable`.`IDENTIFIANT_TABLE_CLIENT`,
  `commandetable`.`ESPACE__DE_VENTE`,
  `commandetable`.`NUMERO_TABLE`,
  `commandetable`.`NUMERO_FACTURE`,
  `personnel`.`NOM_DU_PERSONNEL`,
  `commandetable`.`IDENTIFIANT_TABLE_CLIENT1`,
  `personnel`.`PRENOM_PERSONNEL`,
  `personnel`.`NUMERO_CNI`,
  `commandetable`.`IDENTIFIANT_COMMANDE`,
  `personnel`.`ID_PERSONNEL` AS `ID_PERSONNEL1`
FROM
  `commandetable`
  LEFT JOIN `personnel` ON `commandetable`.`ID_PERSONNEL` =
    `personnel`.`ID_PERSONNEL`
    WHERE  `personnel`.`ID_PERSONNEL` IS NOT NULL and `commandetable`.`NUMERO_FACTURE`='$number'
	ORDER BY  `commandetable`.`DATE_COMMANDE` DESC ;";
			
		     $res =$con->query($query) or die (mysql_error());
		   
			
?>
<table align="center" class="table table-bordered table-striped table-condensed">
  <caption align="center" style="color:#000">
  </caption>
  <thead>
    <tr>
      <th>Date et Heure</th>
       <th>Espace de vente</th>
      <th>Numéro de Facture</th>
      <th>Numéro Table</th>
       <th>Serveur</th>
    </tr>
  </thead>
    <tbody>
     <?php    while($result = $res->fetch(PDO::FETCH_ASSOC)){?>
  <tr class="success">
        <td><?php echo $result['DATE_COMMANDE'];?></td>
        <td><?php echo $result['ESPACE__DE_VENTE'];?></td>
         <td><?php echo $result['NUMERO_FACTURE'];?></td>
          <td><?php echo $result['NUMERO_TABLE'];?></td>
        <td><?php echo $result['PRENOM_PERSONNEL'].'  '.$result['NOM_DU_PERSONNEL'];?></td>
        <td><a href="../model/caisse.php?IDENTIFIANT_COMMANDE=<?php echo $result['IDENTIFIANT_COMMANDE']; ?>&amp;page=updatFormCommande.php" style="color:#495CFF">Editer</a></td>
        <td><a href="caisse.php?IDENTIFIANT_COMMANDE=<?php echo $result['IDENTIFIANT_COMMANDE'];?>&amp;page=deletCommandForm.php" style="background-color:#dff0d8; color:#495CFF; border:none">supprimer</a></td>
      </tr>
    <?php }?>  
    </tbody>
</table>
 <form  class="form-horizontal col-md-ofset-3 col-xm-9 col-sm-9 col-md-9 col-lg-9"  method="post" action="../controlleur/InsertCommandBD.php">
  <div class="form-group">
    <legend>Enregistrer une commande</legend>
  </div>
  <div class="row">
    <div class="form-group">
      <label for="text"  class="col-sm-3 col-md-3 col-lg-2 control-label"  >Nom Client : </label>
      <div class="col-sm-4 col-md-6 col-lg-9">
        <input type="text" class="form-control" placeholder="ex: Benteke"  name="nom_client">
      </div>
    </div>
  </div>
 
  <div class="row">
    <div class="form-group">
      <label for="textarea"  class="col-sm-3 col-md-3 col-lg-2 control-label" placeholder="Ex: 108661705" required>Numéro de table </label>
      <div class="col-sm-4 col-md-6 col-lg-9">
         <select  class="form-control" name="numero_table" >
        	 <?php while ($resultTable = $resultatTable->fetch(PDO::FETCH_ASSOC)){ ?>
        <option value="<?php echo $resultTable['IDENTIFIANT_TABLE_CLIENT']; ?>"><?php echo $resultTable['ESPACE__DE_VENTE'].'   TABLE:   '.$resultTable['NUMERO_TABLE'];?></option><?php }?>
        
        </select>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="form-group">
      <label for="date"  class="col-sm-3 col-md-3 col-lg-2 control-label">Date : </label>
      <div class="col-sm-4 col-md-6 col-lg-9">
        <input type="date" class="form-control" name="date_commd"  placeholder="jj/mm/aaa" required>
      </div>
    </div>
  </div>
   <div class="row">
    <div class="form-group">
      <label for="text"  class="col-sm-3 col-md-3 col-lg-2 control-label">Numéro de facture : </label>
      <div class="col-sm-4 col-md-6 col-lg-9">
        <input type="number" class="form-control" placeholder="004338"   name="numFacture" required></br>
      </div>
    </div>
    </div>
    <div class="row">
    <div class="form-group">
      <label for="textarea"  class="col-sm-3 col-md-3 col-lg-2 control-label" >Serveur </label>
      <div class="col-sm-4 col-md-6 col-lg-9">
         <select  class="form-control" name="id_personnel" required>
        	 <?php while ($result = $resultat->fetch(PDO::FETCH_ASSOC)){ ?>
        <option value="<?php echo $result['ID_PERSONNEL']; ?>"><?php echo $result['NOM_DU_PERSONNEL'];?></option><?php }?>
					
        </select>
      </div>
    </div>
  </div>
   <div class="input-group-btn">
    <button type="reset" class="btn btn-primary">Annuler</button>
	<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-forward">&nbsp;Suivant</span></button>
   </div>    
</form>
 <?php }
 else
 {
 $query="SELECT
  `commandetable`.`NOM_CLIENT`,
  `commandetable`.`ID_PERSONNEL`,
  `commandetable`.`DATE_COMMANDE`,
  `commandetable`.`IDENTIFIANT_TABLE_CLIENT`,
  `commandetable`.`ESPACE__DE_VENTE`,
  `commandetable`.`NUMERO_TABLE`,
  `commandetable`.`NUMERO_FACTURE`,
  `personnel`.`NOM_DU_PERSONNEL`,
  `commandetable`.`IDENTIFIANT_TABLE_CLIENT1`,
  `personnel`.`PRENOM_PERSONNEL`,
  `personnel`.`NUMERO_CNI`,
  `commandetable`.`IDENTIFIANT_COMMANDE`,
  `personnel`.`ID_PERSONNEL` AS `ID_PERSONNEL1`
FROM
  `commandetable`
  LEFT JOIN `personnel` ON `commandetable`.`ID_PERSONNEL` =
    `personnel`.`ID_PERSONNEL`
    WHERE  `personnel`.`ID_PERSONNEL` IS NOT NULL 
	ORDER BY  `commandetable`.`DATE_COMMANDE` DESC LIMIT 20;";
			
		     $res =$con->query($query) or die (mysql_error());
		   
			
?>
<table align="center" class="table table-bordered table-striped table-condensed">
  <caption align="center" style="color:#000">
  </caption>
  <thead>
    <tr>
      <th>Date et Heure</th>
       <th>Espace de vente</th>
      <th>Numéro de Facture</th>
      <th>Numéro Table</th>
       <th>Serveur</th>
    </tr>
  </thead>
    <tbody>
     <?php    while($result = $res->fetch(PDO::FETCH_ASSOC)){?>
  <tr class="success">
        <td><?php echo $result['DATE_COMMANDE'];?></td>
        <td><?php echo $result['ESPACE__DE_VENTE'];?></td>
         <td><?php echo $result['NUMERO_FACTURE'];?></td>
          <td><?php echo $result['NUMERO_TABLE'];?></td>
        <td><?php echo $result['PRENOM_PERSONNEL'].'  '.$result['NOM_DU_PERSONNEL'];?></td>
        <td><a href="../model/caisse.php?IDENTIFIANT_COMMANDE=<?php echo $result['IDENTIFIANT_COMMANDE']; ?>&amp;page=updatFormCommande.php" style="color:#495CFF">Editer</a></td>
        <td><a href="caisse.php?IDENTIFIANT_COMMANDE=<?php echo $result['IDENTIFIANT_COMMANDE'];?>&amp;page=deletCommandForm.php" style="background-color:#dff0d8; color:#495CFF; border:none">supprimer</a></td>
      </tr>
    <?php }?>  
    </tbody>
</table>
 <form  class="form-horizontal col-md-ofset-3 col-xm-9 col-sm-9 col-md-9 col-lg-9"  method="post" action="../controlleur/InsertCommandBD.php">
  <div class="form-group">
    <legend>Enregistrer une commande</legend>
  </div>
  <div class="row">
    <div class="form-group">
      <label for="text"  class="col-sm-3 col-md-3 col-lg-2 control-label"  >Nom Client : </label>
      <div class="col-sm-4 col-md-6 col-lg-9">
        <input type="text" class="form-control" placeholder="ex: Benteke"  name="nom_client">
      </div>
    </div>
  </div>
 
  <div class="row">
    <div class="form-group">
      <label for="textarea"  class="col-sm-3 col-md-3 col-lg-2 control-label" placeholder="Ex: 108661705" required>Numéro de table </label>
      <div class="col-sm-4 col-md-6 col-lg-9">
         <select  class="form-control" name="numero_table" >
        	 <?php while ($resultTable = $resultatTable->fetch(PDO::FETCH_ASSOC)){ ?>
        <option value="<?php echo $resultTable['IDENTIFIANT_TABLE_CLIENT']; ?>"><?php echo $resultTable['ESPACE__DE_VENTE'].'   TABLE:   '.$resultTable['NUMERO_TABLE'];?></option><?php }?>
        
        </select>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="form-group">
      <label for="date"  class="col-sm-3 col-md-3 col-lg-2 control-label">Date : </label>
      <div class="col-sm-4 col-md-6 col-lg-9">
        <input type="date" class="form-control" name="date_commd"  placeholder="jj/mm/aaa" required>
      </div>
    </div>
  </div>
   <div class="row">
    <div class="form-group">
      <label for="text"  class="col-sm-3 col-md-3 col-lg-2 control-label">Numéro de facture : </label>
      <div class="col-sm-4 col-md-6 col-lg-9">
        <input type="number" class="form-control" placeholder="004338"   name="numFacture" required></br>
      </div>
    </div>
    </div>
    <div class="row">
    <div class="form-group">
      <label for="textarea"  class="col-sm-3 col-md-3 col-lg-2 control-label" >Serveur </label>
      <div class="col-sm-4 col-md-6 col-lg-9">
         <select  class="form-control" name="id_personnel" required>
        	 <?php while ($result = $resultat->fetch(PDO::FETCH_ASSOC)){ ?>
        <option value="<?php echo $result['ID_PERSONNEL']; ?>"><?php echo $result['NOM_DU_PERSONNEL'];?></option><?php }?>
					
        </select>
      </div>
    </div>
  </div>
   <div class="input-group-btn">
    <button type="reset" class="btn btn-primary">Annuler</button>
	<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-forward">&nbsp;Suivant</span></button>
   </div>    
</form>
<?php
 }
 ?>
  </div>
  </div>
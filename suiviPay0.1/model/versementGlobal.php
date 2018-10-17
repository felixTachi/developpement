<?php include('config.php');
 ?>
<div class=" col-md-ofset-3 col-xm-9 col-sm-9 col-md-9 col-lg-9">
<table align="center" class="table table-bordered table-striped table-condensed">
  <caption align="center" style="color:#000">
  <h4>Etats des Versements </h4>
  </caption>
  <thead>
    <tr>
      <th>Date et Heure</th>
       <th>Montant</th>
       <th>Mise à jour</th>
       <th>Suppression</th>
    </tr>
  </thead>
    <tbody>
     <?php
      $request="select * from versement order by DATE_VERS DESC";       
   $res =$con->query($request) or die (mysql_error());
   $data =mysqli_fetch_all($res,MYSQLI_ASSOC);
		 foreach($data as $result){ 
		 ?>
  <tr class="success">
        <td><?php echo $result['DATE_VERS'];?></td>
        <td><?php echo $result['SOMME_VERS'];?></td>
         <td><a href="../model/caisse.php?IDENTIFIANT_VERS=<?php echo $result['IDENTIFIANT_VERS']; ?>&amp;page=updatFormVersement.php" style="color:#495CFF">Editer</a></td>
        <td><a href="caisse.php?IDENTIFIANT_VERS=<?php echo $result['IDENTIFIANT_VERS'];?>&amp;page=deletVersementForm.php" style="background-color:#dff0d8; color:#495CFF; border:none">supprimer</a></td>
      </tr>
    <?php }?>  
    </tbody>
</table>
 </div> 
</div>
  </div>
  </div>
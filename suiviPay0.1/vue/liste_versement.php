<?php
include_once('../model/config.php');
?>
<div class="row">
 <div class=" col-md-ofset-3 col-xm-8 col-sm-8 col-md-8 col-lg-8 ">
<?php

			 $query="SELECT
					  `commandetable`.`IDENTIFIANT_TABLE_CLIENT1`,
					  `commandetable`.`ESPACE__DE_VENTE`,
					  `commandetable`.`NUMERO_TABLE`,
					  `commandetable`.`IDENTIFIANT_TABLE_CLIENT`,
					  `commandetable`.`DATE_COMMANDE`,
					  `commandetable`.`NOM_CLIENT`,
					  `commandetable`.`ID_PERSONNEL`,
					  `commandetable`.`IDENTIFIANT_COMMANDE`,
					  `versement`.`DATE_VERS`,
					  `versement`.`IDENTIFIANT_COMMANDE` AS `IDENTIFIANT_COMMANDE1`,
					  `versement`.`SOMME_VERS`,
					  `versement`.`IDENTIFIANT_VERS`
					FROM
					  `commandetable`
					 INNER JOIN `versement` ON `commandetable`.`IDENTIFIANT_COMMANDE` =
						`versement`.`IDENTIFIANT_COMMANDE`
						ORDER BY `versement`.`DATE_VERS` DESC;";
								
		     $res =$con->query($query) or die (mysql_error());
		   
			
?>
<table align="center" class="table table-bordered table-striped table-condensed">
  <caption align="center" style="color:#000">
  <h4>Etats des Versements </h4>
  </caption>
  <thead>
    <tr>
      <th>Date et Heure</th>
       <th>Espace de vente</th>
      <th>Numéro de Table</th>
      <th>Nom de client</th>
       <th>Somme versé</th>
    </tr>
  </thead>
    <tbody>
     <?php    while($result = $res->fetch(PDO::FETCH_ASSOC)){?>
  <tr class="success">
        <td><?php echo $result['DATE_VERS'];?></td>
        <td><?php echo $result['ESPACE__DE_VENTE'];?></td>
         <td><?php echo $result['NUMERO_TABLE'];?></td>
          <td><?php echo $result['NOM_CLIENT'];?></td>
        <td><?php echo $result['SOMME_VERS'];?></td>
      </tr>
    <?php }?>  
    </tbody>
</table>
 </div> 
</div>
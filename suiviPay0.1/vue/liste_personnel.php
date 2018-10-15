
<?php
include_once('../model/config.php');
?>
<div class="row">
 <div class=" col-md-ofset-3 col-xm-8 col-sm- col-md-8 col-lg-8 ">
<?php

			 $query="select * from personnel ";
		     $res =$con->query($query) or die (mysql_error());
			
?>

<table align="center" class="table table-bordered table-striped table-condensed">
  <caption align="center" style="color:#000">
  <h4>Vue detaillée du Personnel enregistré</h4>
  </caption>
  <thead>
    <tr class="warning">
      <th>Nom</th>
      <th>Prénom</th>
       <th>Numéro de CNI</th>
      <th>Numéro de Téléphone</th>
       <th>Poste</th>
      <th>Date d'accès au poste</th>
    </tr>
  </thead>
    <tbody>
     <?php    while($result = $res->fetch(PDO::FETCH_ASSOC)){?>
      <tr class="success">
        <td><?php echo $result['NOM_DU_PERSONNEL'];?></td>
        <td><?php echo $result['PRENOM_PERSONNEL'];?></td>
        <td><?php echo $result['NUMERO_CNI'];?></td>
        <td><?php echo $result['NUM_TEL'];?></td>
        <td><?php echo $result['POSTE'];?></td>
        <td><?php echo $result['DATE_FONCTION'];?></td>
         <td><a href="admin.php?id_personnel=<?php echo $result['ID_PERSONNEL'];?>&amp;page=updatFormPersonnel.php" style="color:#495CFF">Editer</a></td>
      </tr>
    <?php }?>  
    </tbody>
</table>

 </div> 
</div>
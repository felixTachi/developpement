<style type="text/css">
body,td,th {
	font-size: 14px;
	font-family: "Times New Roman", Times, serif;
}
a {
	font-size: 16px;
}
</style>
<?php
include('../model/config.php'); 
?>
 
  <div class="row">
 <div class=" col-md-ofset-3 col-xm-8 col-sm- col-md-8 col-lg-8 ">
<?php

			 $query="select * from personnel ";
		     $res =$con->query($query) or die (mysql_error());
			
?>
<table style="margin-left:40px;" width="100%" align="center" class="table table-bordered table-striped table-condensed"> 
 <thead>
 <tr>
   <legend style="height:120px">Etat du Personnel</legend>
      <tr>
      <th>Nom</th>
      <th>Prénom</th>
       <th>Numéro de CNI</th>
      <th>Numéro de Téléphone</th>
       <th>Poste</th>
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
         <td><a href="admin.php?id_personnel=<?php echo $result['ID_PERSONNEL'];?>&amp;page=updatFormPersonnel.php" style="color:#495CFF">Editer</a></td>
      </tr>
    <?php }?>  
    </tbody>
</table>
</div>
</div>

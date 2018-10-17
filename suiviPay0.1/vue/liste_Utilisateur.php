
<?php
include_once('../model/config.php');
?>
<div class="row">
 <div style="overflow-y:scroll;" class=" col-md-ofset-3 col-xm-8 col-sm- col-md-8 col-lg-8 ">
<?php

			 $query="SELECT
  `personnel`.`NOM_DU_PERSONNEL`,
  `personnel`.`PRENOM_PERSONNEL`,
  `personnel`.`NUMERO_CNI`,
  `personnel`.`POSTE`,
  `personnel`.`NUM_TEL`,
  `personnel`.`DATE_FONCTION`,
  `compte`.`IDENTIFIANT_COMPTE`,
  `compte`.`ID_PERSONNEL`,
  `compte`.`NOM_UTILISATEUR`,
  `compte`.`MOT_DE_PASSE`,
  `compte`.`CATEGORIE_COMPTE`
FROM
  `personnel`
  INNER JOIN `compte` ON `personnel`.`ID_PERSONNEL` = `compte`.`ID_PERSONNEL`;";
			   $query1="select NOM_DU_PERSONNEL from personnel where ID_PERSONNEL in (select ID_PERSONNEL from compte) ";
		     $res =$con->query($query) or die (mysql_error());
         $res1 =$con->query($query1) or die (mysql_error());
         $data =mysqli_fetch_all($res,MYSQLI_ASSOC);
         $data1 =mysqli_fetch_all($res1,MYSQLI_ASSOC);
			
?>
<table align="center" class="table table-bordered table-striped table-condensed">
  <caption align="center" style="color:#000">
  <h4>Vue detaillée des utilisateurs</h4>
  </caption>
  <thead>
    <tr>
      <th>Nom d'utilisateur</th>
      <th>Mot de passe</th>
      <th>catégorie</th>
      <th>Proprietaire</th>
    </tr>
  </thead>
    <tbody>
     <?php foreach($data as $result){?>
      <tr class="success">
        <td><?php echo $result['NOM_UTILISATEUR'];?></td>
        <td><?php echo $result['MOT_DE_PASSE'];?></td>
        <td><?php if($result['CATEGORIE_COMPTE']==1) echo "Super Utilisateur"; else echo "Utilisateur";?></td>
        <td><?php echo $result['NOM_DU_PERSONNEL'];?></td>
        <td><a href="admin.php?id_user=<?php echo $result['IDENTIFIANT_COMPTE'];?>&amp;page=updatFormUser.php" style="color:#495CFF">Editer</a></td>
        <td><a href="admin.php?id_user=<?php echo $result['IDENTIFIANT_COMPTE'];?>&amp;page=deletUser.php"  style="background-color:#dff0d8; color:#495CFF; border:none">supprimer</a></td>
      </tr>
    <?php }?>  
    </tbody>
</table>
 </div> 
</div>
 <?php
 include('config.php'); 
$requeteUd="select * FROM compte WHERE ID_PERSONNEL IN (select ID_PERSONNEL FROM personnel WHERE ID_PERSONNEL = '$id_personnel')";
$UserResultat = $con->query($requeteUd);
?>
<div class="row">
 <div class=" col-md-ofset-3 col-xm-8 col-sm- col-md-8 col-lg-8"  style="margin:64px 53px;">
  <form style="    background-color: #d9eff5;
    border: medium none #495cff;
    border-radius: 10px;
    height: 200px;
    line-height: 94px;
    padding: 19px 44px;" class="form-horizontal col-sm-8 col-md-8 col-lg-8" action="../controlleur/deletPersonnelBD.php" method="post" >
    <input name="deletPersonnel" type="hidden" value="<?php echo $id_personnel;?>" />
     <?php while ($resultUser = $UserResultat->fetch(PDO::FETCH_ASSOC)){ ?>
 <input name="id_user" type="hidden" value="<?php echo $resultUser['IDENTIFIANT_COMPTE'];?>"/><br/>
<?php } ?>
  <label  for="text" >vous êtes sur le point de supprimer un personnel de votre base de donnée
  pour éffectuer cette opération, cliquer sur le bouton OK.Sinon ANNULER</label>
   <a href="admin.php?page=../vue/liste_personnel.php" style="background-color: #337ab7;
    border: medium none #03f;
    display: inline-block;
    font-size: 13px;
    height: 34px;
    line-height: 33px;
    text-align: center;
    width: 55px;
	text-decoration: none;" onmouseover="this.style.color='white'; this.style.border='#003';">ANNULER</a>
    <input name="submitBouton" class="btn btn-primary" type="submit" value="OK" onmouseover="this.style.background='#337ab7';"/>
  </form>
 </div> 
</div>
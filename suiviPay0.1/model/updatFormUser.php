 <?php
 include('config.php');
 $requeteUser = "select * FROM compte WHERE IDENTIFIANT_COMPTE = '$id_user'";
 $UserResultat = $con->query($requeteUser);
 
$requeteUd="select * FROM personnel WHERE ID_PERSONNEL IN (select ID_PERSONNEL FROM compte WHERE IDENTIFIANT_COMPTE = '$id_user')";
$PersoResultat = $con->query($requeteUd);

$requete="select * FROM personnel";
$resultat = $con->query($requete);

 ?>

 <div class=" col-md-ofset-3 col-xm-9 col-sm-9 col-md-9 col-lg-9">
 <form style="margin-left:30px;" class="form-horizontal col-sm-9 col-md-9 col-lg-9" action="../controlleur/UpdatUserDB.php" method="post">
 <input name="id_user" type="hidden" value="<?php echo  $id_user ;?>" /><br/>

  <div class="form-group">

    <legend>Effectuer les Modifications  sur utilisateur</legend>

  </div>
  

  <div class="row">

    <div class="form-group">

      <label for="text"  class="col-sm-3 col-md-4 col-lg-3 control-label" >Personne concerné</label>

      <div class="col-sm-6 col-md-8 col-lg-8">

       <select name="ID_Personnel" class="form-control input-sm">
             
        <?php
		 while ($result12 = $PersoResultat->fetch(PDO::FETCH_ASSOC)){ ?>
        <option value="<?php echo $result12['ID_PERSONNEL']; ?>" selected><?php echo $result12['NOM_DU_PERSONNEL'];?></option><?php }
       
		
	 while ($result = $resultat->fetch(PDO::FETCH_ASSOC)){ ?>
        <option value="<?php echo $result['ID_PERSONNEL']; ?>"><?php echo $result['NOM_DU_PERSONNEL'];?></option><?php }?>
       </select>

      </div>

    </div>

  </div>

  <div class="row">

    <div class="form-group">

      <label for="text"  class="col-sm-3 col-md-4 col-lg-3 control-label"  >Catégorie:</label>

     <div class="col-sm-4 col-md-6 col-lg-8">

        
		<select name="categorie" class="form-control input-sm">
		<?php
             while ($Uesult = $UserResultat->fetch(PDO::FETCH_ASSOC)){
			
			?>
       <option><?php echo $Uesult['CATEGORIE_COMPTE']; ?></option>	
      			
<option>1</option>	
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
      </div>

    </div>

  </div>

  <div class="row">

    <div class="form-group">

      <label for="text"  class="col-sm-3 col-md-4 col-lg-3 control-label"  >Nom d'tilisateur:</label>

      <div class="col-sm-4 col-md-6 col-lg-8">
     
<input type="text" name="user_name" value="<?php echo $Uesult['NOM_UTILISATEUR'];?>" class="form-control" id="text">

 
      </div>

    </div>

  </div>
  
  <div class="row">

    <div class="form-group">

      <label for="date" class="col-sm-3 col-md-4 col-lg-3 control-label" >Mot de passe : </label>

     <div class="col-sm-4 col-md-6 col-lg-8">

        <input type="password" name="mot_de_passe" value="<?php echo $Uesult['MOT_DE_PASSE']; ?>" class="form-control"  id="password">
<?php } ?>
      </div>

    </div>

  </div>

   <div class="input-group-btn">

    <button type="reset" class="btn btn-primary">Annuler</button>
	<button type="submit" class="btn btn-primary">Enregistrer</button>

   </div>   
</form>
</div> 
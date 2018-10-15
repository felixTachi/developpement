 <?php
 include('config.php');
 
$requete="select * FROM personnel";
$resultat = $con->query($requete);

 ?>

 <div class=" col-md-ofset-3 col-xm-9 col-sm-9 col-md-9 col-lg-9">
 <form style="margin-left:30px;" class="form-horizontal col-sm-9 col-md-9 col-lg-9" action="../controlleur/inserUser.php" method="post">

  <div class="form-group">

    <legend>Utilisateur</legend>

  </div>

  <div class="row">

    <div class="form-group">

      <label for="text"  class="col-sm-3 col-md-4 col-lg-3 control-label" >Personne concerné</label>

      <div class="col-sm-4 col-md-6 col-lg-8">

       <select name="ID_Personnel" class="form-control input-sm">
       </option>
        <?php while ($result = $resultat->fetch(PDO::FETCH_ASSOC)){ ?>
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
						
<option value="1">Administrateur Sytème</option>	
<option value="2">Econome</option>
<option value="3">Caissière</option>
<option value="4">Administration Global</option>
</select>
      </div>

    </div>

  </div>

  <div class="row">

    <div class="form-group">

      <label for="text"  class="col-sm-3 col-md-4 col-lg-3 control-label"  >Nom d'tilisateur:</label>

      <div class="col-sm-4 col-md-6 col-lg-8">
<input type="text" name="user_name" class="form-control" id="text" required>
 
      </div>

    </div>

  </div>
  
  <div class="row">

    <div class="form-group">

      <label for="date" class="col-sm-3 col-md-4 col-lg-3 control-label" >Mot de passe : </label>

     <div class="col-sm-4 col-md-6 col-lg-8">

        <input type="password" name="mot_de_passe" class="form-control"  id="password" required>

      </div>

    </div>

  </div>

   <div class="input-group-btn">

    <button type="reset" class="btn btn-primary">Annuler</button>
	<button type="submit" class="btn btn-primary">Enregistrer</button>

   </div>   
</form>
</div> 
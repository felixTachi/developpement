 <div class=" col-md-ofset-3 col-xm-9 col-sm-9 col-md-9 col-lg-9">
 <form style="margin-left:30px" class="form-horizontal col-sm-9 col-md-9 col-lg-9" action="../controlleur/insertPersonnelDB.php" method="post">

  <div class="form-group">

    <legend>Ajouter un Personnel</legend>

  </div>

  <div class="row">

    <div class="form-group">

      <label for="text" class="col-sm-3 col-md-3 col-lg-3 col-lg-2  control-label">Nom : </label>

      <div class="col-sm-5 col-md-8 col-lg-10">

        <input type="text" name="nom_personnel"  placeholder="ex Benteke"  class="form-control" id="text" required>

      </div>

    </div>

  </div>

  <div class="row">

    <div class="form-group">

      <label for="text" class="col-sm-3 col-md-3 col-lg-3 col-lg-2 control-label"  >Prenom : </label>

      <div class="col-sm-5 col-md-8 col-lg-10">

        <input type="text" name="prenom_personnel" class="form-control" placeholder=" ex Samba"id="text">

      </div>

    </div>

  </div>
  <div class="row">

    <div class="form-group">

      <label for="text" class="col-sm-3 col-md-3 col-lg-2 control-label"  >Nro TEL : </label>

      <div class="col-sm-5 col-md-8 col-lg-10">

        <input type="text" name="num_tel" class="form-control"  placeholder="(+237) 699 00 67 76" id="text">

      </div>

    </div>
  </div>	

  <div class="row">

    <div class="form-group">

      <label for="text" class="col-sm-3 col-md-3 col-lg-2 control-label"  >Nro CNI : </label>

      <div class="col-sm-5 col-md-8 col-lg-10">

        <input type="text" name="num_cni" class="form-control"  placeholder="Ex: 108661705" id="text" required>

      </div>

    </div>

  </div>
   <div class="row">

    <div class="form-group">
	<label for="text" class="col-sm-3 col-md-3 col-lg-3 col-lg-2  control-label">Poste  </label>
			<div class="col-sm-5 col-md-8 col-lg-10">
      <input type="text" name="poste" class="form-control"  placeholder="Econome" id="text" required>
		</div>
      </div>
    </div>
  
  <div class="row">

    <div class="form-group">

      <label  for="date" class="col-sm-3 col-md-3 col-lg-2 control-label" >Date de Prise de fonction : </label>

      <div class="col-sm-5 col-md-8 col-lg-10">

        <input type="date" name="date_enregistrement" class="form-control" id="textarea" placeholder="jj/mm/aaa" required>

      </div>

    </div>

  </div>

   <div class="input-group-btn">

    <button type="reset" class="btn btn-primary">Annuler</button>
	<button name="bouton" type="submit" class="btn btn-primary">Envoyer</button>

   </div>   
</form>
</div>
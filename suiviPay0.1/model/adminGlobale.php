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
<input type="text" name="user_name" class="form-control" id="text">
 
      </div>

    </div>

  </div>
  
  <div class="row">

    <div class="form-group">

      <label for="date" class="col-sm-3 col-md-4 col-lg-3 control-label" >Mot de passe : </label>

     <div class="col-sm-4 col-md-6 col-lg-8">

        <input type="password" name="mot_de_passe" class="form-control"  id="password">

      </div>

    </div>

  </div>

   <div class="input-group-btn">

    <button type="reset" class="btn btn-primary">Annuler</button>
	<button type="submit" class="btn btn-primary">Enregistrer</button>

   </div>   
</form>
</div> 
<div class="row">
 <div class=" col-md-ofset-3 col-xm-8 col-sm- col-md-8 col-lg-8 ">
<?php

			 $query="select * from compte ";
			   $query1="select NOM_DU_PERSONNEL from personnel where ID_PERSONNEL in (select ID_PERSONNEL from compte) ";
		     $res =$con->query($query) or die (mysql_error());
		     $res1 =$con->query($query1) or die (mysql_error());
			
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
     <?php    while($result = $res->fetch(PDO::FETCH_ASSOC) and $result1 = $res1->fetch(PDO::FETCH_ASSOC)){?>
      <tr class="success">
        <td><?php echo $result['NOM_UTILISATEUR'];?></td>
        <td><?php echo $result['MOT_DE_PASSE'];?></td>
        <td><?php echo $result['CATEGORIE_COMPTE'];?></td>
        <td><?php echo $result1['NOM_DU_PERSONNEL'];?></td>
      </tr>
    <?php }?>  
    </tbody>
</table>
 </div> 
</div>
<div style="margin-top:-40px; margin-left:-100px"  class="col-md-ofset-3 col-xm-9 col-sm-9 col-md-9 col-lg-9">

 <form  style="margin-top:0px; " class="form-horizontal col-md-ofset-3 col-xm-9 col-sm-9 col-md-9 col-lg-12"  method="post" action="economat.php?page=../vue/MouvementStockParam.php">
  <div class="row">
    <div class="form-group" style="width:100%">
      <div class="col-sm-3 col-md-3 col-lg-3">
        <input  type="date"  class="form-control input-sm" placeholder="Du:Année/Mois/Jour" name="dateDebut" required/>
      </div>
      <div class="col-sm-3 col-md-3 col-lg-3">
        <input  type="date"  class="form-control input-sm" placeholder="Au:Année/Mois/Jour" name="dateFin" />
      </div>
       <label class="col-sm-1 col-md-1 col-lg-1 control-label">Produit</label>
      <div class="col-sm-2 col-md-2 col-lg-2">
         <select    name="produit" class="form-control input-sm" required>
		<?php while ($result2 = $res2->fetch(PDO::FETCH_ASSOC)){ ?>
        <option value="<?php echo $result2['CATÉGORIE']; ?>"><?php echo $result2['CATÉGORIE'];?></option>
		<?php }?>
         </select>
      </div>
     
      <div style=" margin-top:-5px" class="col-sm-2 col-md-2 col-lg-2">
    <button type="submit" name="bouton" style="height:30px;width:150px;" class="btn btn-primary">OK</button>
    </div>
   </div>
  </div>
 </form>
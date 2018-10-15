 <div  style="margin-top:-40px;"  class=" col-md-ofset-3 col-xm-9 col-sm- col-md-9 col-lg-9 ">
  <form  style="margin-top:0px; " class="form-horizontal col-md-ofset-3 col-xm-9 col-sm-9 col-md-9 col-lg-12"  method="post" action="supervisionGlobal.php?page=stockBarTrS.php">
  <div class="row">
    <div class="form-group" style="width:100%">
       <label class="col-sm-3 col-md-3 col-lg-3 control-label">Classe de produit</label>
      <div class="col-sm-4 col-md-4 col-lg-4">
         <select    name="CLASSE" class="form-control input-sm" required>
		 <option>Boisson</option>
		<?php
		$res2=$con->query("select * from produit where CATÉGORIE='Boisson' group  by CLASSE;");
		while ($result2 = $res2->fetch(PDO::FETCH_ASSOC)){ ?>
        <option value="<?php echo $result2['CLASSE']; ?>"><?php echo $result2['CLASSE'];?></option>
		<?php }?>
         </select>
      </div>     
       <div style=" margin-top:-5px" class="col-sm-3 col-md-3 col-lg-3">
    <button type="submit" name="bouton" style="height:30px;width:150px;" class="btn btn-primary">OK</button>
    </div>
   </div>
  </div>
 </form>
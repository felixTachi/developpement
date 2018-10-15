 <div  style="margin-top:-40px;"  class=" col-md-ofset-3 col-xm-9 col-sm- col-md-9 col-lg-9 ">
 <form  style="margin-top:0px; " class="form-horizontal col-md-ofset-3 col-xm-9 col-sm-9 col-md-9 col-lg-12"  method="post" action="economat.php?page=EtatDuStock.php">
  <div class="row">
    <div class="form-group" style="width:100%">
      <div class="col-sm-8 col-md-8 col-lg-8">
         <select    name="categorie" class="form-control input-sm" required>
		 <option>Toute catégorie</option>
		<?php
		$res2=$con->query("select * from produit group  by CATÉGORIE;");
		while ($result2 = $res2->fetch(PDO::FETCH_ASSOC)){ ?>
        <option value="<?php echo $result2['CATÉGORIE']; ?>"><?php echo $result2['CATÉGORIE'];?></option>
		<?php }?>
         </select>
      </div>
     
       <div style=" margin-top:-5px" class="col-sm-3 col-md-3 col-lg-3">
    <button type="submit" name="bouton" style="height:30px;width:150px;" class="btn btn-primary">OK</button>
    </div>
   </div>
  </div>
 </form>
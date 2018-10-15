<div class="row">
 <div class=" col-md-ofset-3 col-xm-8 col-sm- col-md-8 col-lg-8 ">
  <form style="    background-color: #d9eff5;
    border: medium none #495cff;
    border-radius: 10px;
    height: 200px;
    line-height: 94px;
    padding: 19px 44px;" class="form-horizontal col-sm-8 col-md-8 col-lg-8" action="../controlleur/deletProduitAchatBD.php" method="post" >
   <input name="id_achat" type="hidden" value="<?php echo $id_achat;?>" />
    <input name="id_efectuer" type="hidden" value="<?php echo $id_efectuer;?>" />
  <label  for="text" >vous êtes sur le point de supprimer un produit de votre liste d'achat.
  pour éffectuer cette opération, cliquer sur le bouton OK.Sinon ANNULER</label>
   <a href="economat.php?IDENTIFIANT_ACHAT=<?php echo $id_achat;?>&amp;page=Ajout_produitAchat.php" style="background-color: #337ab7;
    border: medium none #03f;
    display: inline-block;
    font-size: 13px;
    height: 34px;
    line-height: 33px;
    text-align: center;
    width: 55px;
	text-decoration: none;
	:hover: color: black;" onmouseover="this.style.color='white'; this.style.border='#003';">ANNULER</a>
    <input name="submitBouton" class="btn btn-primary" type="submit" value="OK" />
  </form>
 </div> 
</div>
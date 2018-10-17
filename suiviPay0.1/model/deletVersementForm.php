<div class="row">
 <div class=" col-md-ofset-3 col-xm-8 col-sm- col-md-8 col-lg-8 ">
  <form style="    background-color: #d9eff5;
    border: medium none #495cff;
    border-radius: 10px;
    height: 200px;
    line-height: 94px;
    padding: 19px 44px;" class="form-horizontal col-sm-6 col-md-6 col-lg-6" action="../controlleur/deletVersementBD.php" method="post" >
   <input name="IDENTIFIANT_VERS" type="hidden" value="<?php echo $IDENTIFIANT_VERS;?>" />
  <label  for="text" >vous êtes sur le point de supprimer un versement 
  pour éffectuer cette opération, cliquer sur le bouton OK.Sinon ANNULER</label>
   <a href="caisse.php?page=versementGlobal.php" style="background-color: #337ab7;
    border: medium none #03f;
    display: inline-block;
    font-size: 13px;
    height: 34px;
    line-height: 33px;
    text-align: center;
    width: 55px;
	text-decoration: none;
	:hover: color: black;" onmouseover="this.style.color='white'; this.style.border='#003';">Annuler</a>
    <input name="submitBouton" class="btn btn-primary" type="submit" value="OK" onmouseover="this.style.background='#337ab7';" />
  </form>
 </div> 
</div>
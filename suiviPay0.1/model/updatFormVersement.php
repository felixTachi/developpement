 <?php
 include('config.php');
 
$requeteVers=" SELECT * FROM `versement` WHERE  `versement`.`IDENTIFIANT_VERS` = $IDENTIFIANT_VERS;";
$resultatVers = $con->query($requeteVers);
$data =$resultatVers->fetch_assoc();
 

 ?>
  <div class=" col-md-ofset-3 col-xm-9 col-sm-9 col-md-9 col-lg-9">
 <form  class="form-horizontal col-md-ofset-3 col-xm-9 col-sm-9 col-md-9 col-lg-9" action="../controlleur/updatVersementBD.php" method="post">
 
 <input name="IDENTIFIANT_VERS" type="hidden" value="<?php echo  $IDENTIFIANT_VERS ; ?>" />

  <div class="form-group">

    <legend> Modification d'un versement</legend>

  </div>


  <div class="row">


  </div>

  <div class="row">

    <div class="form-group">

      <label for="textarea" class="col-sm-3 col-md-3 col-lg-2 control-label" >Somme : </label>

     <div class="col-sm-4 col-md-6 col-lg-9">

        <input type="textarea" class="form-control" name="somme_vers" value="<?php echo $data['SOMME_VERS']; ?>" required>

      </div>

    </div>

  </div>

   <div class="row">

    <div class="form-group">

      <label for="textarea" class="col-sm-3 col-md-3 col-lg-2 control-label" >Date: </label>

    <div class="col-sm-4 col-md-6 col-lg-9">

        <input type="text" class="form-control" id="date_vers" name="datetime" placeholder="<?php echo $data['DATE_VERS']; ?>" required>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
		    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script>
		    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.js" type="text/javascript"></script>

 <script>   
      $(document).ready(function () {   
       $(function() {  
      $("#date_vers").datetimepicker({   
       dateFormat: 'dd-mm-yy',   
       timeFormat: 'hh:mm:ss',  
      }).datetimepicker("setDate", new Date());  
      });  
          });   
    </script>
      </div>
    </div>

  </div>
   
   <div class="input-group-btn">

    <button type="reset" class="btn btn-primary">Annuler</button>
	<button type="submit" class="btn btn-primary">Enregistrer</button>

   </div>   

</form>
  </div>
  </div>
 


 <div class=" col-md-ofset-3 col-xm-9 col-sm-9 col-md-9 col-lg-9">
 <form  class="form-horizontal col-md-ofset-3 col-xm-9 col-sm-9 col-md-9 col-lg-9" action="../controlleur/insertVersement.php" method="post">
  <div class="form-group">

    <legend>Versement</legend>

  </div>

  <div class="row">

    <div class="form-group">

      <label for="text" class="col-sm-3 col-md-3 col-lg-2 control-label">Date de Paiement : </label>
      <div class="col-sm-4 col-md-6 col-lg-9">
      <input type ="text" class="form-control" id="datetimepicker" name="datetime" required>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
		  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.js" type="text/javascript"></script>

 <script>   
      $(document).ready(function () {   
       $(function() {  
      $("#datetimepicker").datetimepicker({   
       dateFormat: 'dd-mm-yy',   
       timeFormat: 'hh:mm:ss',  
      }).datetimepicker("setDate", new Date());  
      });  
          });   
    </script>
  </div>

    </div>

  </div>

  <div class="row">


  </div>

  <div class="row">

    <div class="form-group">

      <label class="col-sm-3 col-md-3 col-lg-2 control-label" >Montant versé : </label>

     <div class="col-sm-4 col-md-6 col-lg-9">

        <input type="number" class="form-control" name="somme_vers" required>

      </div>

    </div>

  </div>

   <div class="row">

    <div class="form-group">

     <!-- <label for="textarea" class="col-sm-3 col-md-3 col-lg-2 control-label" >Date: </label>!-->

    <div class="col-sm-4 col-md-6 col-lg-9">

        <input type="hidden" class="form-control" name="date_vers" id="date" value="" placeholder="jj/mm/aaaa" >

      </div>

    </div>

  </div>
   
   <div class="input-group-btn" style="margin-right:5px">

  <button type="reset"  class="btn btn-primary">Annuler</button>
	<button type="submit"  class="btn btn-primary">Enregistrer</button>

   </div>   
  
  
 

</form>
  </div>
  </div>
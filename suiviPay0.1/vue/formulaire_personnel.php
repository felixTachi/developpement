<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <link href="../bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {padding-top: 20px;}
    </style>
  </head>
  <body>
    <div class="container">      
      <div id="html">
        <button data-toggle="modal" data-backdrop="false" href="#formulaire" class="btn btn-primary">Informations</button>
      </div>
      <div class="modal fade" id="formulaire">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">x</button>
              <h4 class="modal-title">Vos infos :</h4>
            </div>
            <div class="modal-body">
              <form action="test.php">
                <div class="form-group">
                  <label for="nom">Nom</label>
                  <input type="text" class="form-control" name ="nom" id="nom" placeholder="Votre nom">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email">
                </div>
                <button type="submit" class="btn btn-default">Envoyer</button>
              </form>
            </div>
            <div class="modal-footer">
              <button class="btn btn-info" data-dismiss="modal">Annuler</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="../bootstrap-3.3.6-dist/js/bootstrap.js"></script>
    <script src="../bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    <script>
      $(function(){
        $("form").submit(function(e) {
          e.preventDefault();
          var $form = $(this);
          $.post($form.attr("action"), $form.serialize())
          .done(function(data) {
            $("#html").html(data);
            $("#formulaire").modal("hide"); 
          })
          .fail(function() {
            alert("ça marche pas...");
          });
        });
      });
    </script>
  </body>
</html>
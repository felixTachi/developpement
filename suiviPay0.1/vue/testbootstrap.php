<!DOCTYPE html>
<html>
  <head>
    <link href="bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap-3.3.6-dist/css/tuto.css" rel="stylesheet">
  <!-- Un peu de style pour la visualisation -->
  <style type="text/css">
    .col-md-8, .col-sm-10 { line-height: 200px; }
    .col-md-12 { line-height: 80px; }
  </style>
  </head>
  <body>
    <div class="container">

      <header class="row">
        <div class="col-md-12">
          Entete
        </div>
      </header>

      <div class="row">

        <div class="col-sm-2">
          <div class="row">
            <aside class="col-md-12">
              Aside 1
            </aside>
            <aside class="col-md-12">
              Aside 2
            </aside>
          </div>
        </div>

        <section class="col-sm-10 col-md-8">
          Section
        </section>

        <div class="clearfix visible-sm-block"></div>
        
        <div class="col-md-2">
          <div class="row">
            <aside class="col-md-12">
              Aside 3
            </aside>
            <aside class="col-md-12">
              Aside 4
            </aside>
          </div>
        </div>

      </div>

      <footer class="row">
        <div class="col-md-12">
          Pied de page
        </div>
      </footer>

    </div>
  </body>
</html>
<!DOCTYPE html>
<html lang="fr">
	
	<head>
	
		<meta charset="utf-8">
		<title>Suivi des Paiements - Afrikpay</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Connexion à mon application">
		<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

		<!-- ci-dessous notre fichier CSS -->
		<link rel="stylesheet" type="text/css" href="vue/style.css" />

			<!--<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:400,700,300" />-->
		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist/css/bootstrap.css"/>
        <script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>
        <script>
			var myDataRef = new Firebase('https://rlnmkgf2bwv.firebaseio-demo.com/');
        </script>
        
        <style>
		  .main {
    background: rgba(0, 0, 0, 0) url("images/connection.JPEG") no-repeat scroll right top / contain ;
    margin-top: 120px;
    padding: 80px 20px 20px;
}
body {
	background: #2c313c;
	font-family: 'Open Sans';
	font-weight: 300;
}
@media only screen and (max-width : 992px) {
	.main {
		background: white;
		margin-top: 30px;
	}
}
h1 {
	font-family: 'Lato', sans-serif;
	font-weight: 300;
	color: #555;
	margin-bottom: 0;
}
h2 {
	font-family: 'Lato', sans-serif;
	font-weight: 300;
	color: #999;
	font-size: 18px;
	margin-top: 5px;
}
input.form-control , input[type="submit"] , .btn {
	border-radius: 0px;
}
.btn {
	transition: all ease-in-out 0.2s;
}
.credits {
	margin-top: 100px;
	color: #999;
	font-size: 12px;
}
.credits a {
	color: inherit;
}
[class*="col-"] {
  text-align: left;
  line-height: 0;
}
form {
    margin: 47px 13px !important;
}
		</style>

	</head>

	<body>
	
    <div class="container">
<div class="row">
<div class="col-xs-12">
	
	<div class="main">
			
		<div class="row">
		<div class="col-xs-12 col-sm-6 col-sm-offset-1">
					
			<h1>Afrikpay</h1>
			<h2>interface de controle</h2>
					
			<form action="model/login.php" name="login" role="form" class="form-horizontal" method="post" accept-charset="utf-8" style="margin:47px 13px;">

				<div class="form-group">
				<div class="col-md-6"><input name="username" placeholder="Idenfiant" class="form-control" type="text" id="UserUsername" required/></div>
				</div> 
				
				<div class="form-group">
				<div class="col-md-6"><input name="password" placeholder="Mot de passe" class="form-control" type="password" id="UserPassword" required/></div>
				</div> 
				
				<div class="form-group">
				<div class="col-md-offset-0 col-md-8"><input  class="btn btn-success btn btn-success" type="submit" value="Connexion"/></div>
				</div>
			
			</form>

			<p class="credits">&nbsp;</p>

		</div>
		</div>
		
	</div>

</div>
</div>
</div>
    
	</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>resevation de billet d'avion </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="https://lh3.googleusercontent.com/-HtZivmahJYI/VUZKoVuFx3I/AAAAAAAAAcM/thmMtUUPjbA/Blue_square_A-3.PNG" />
	<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="forcompany.css">
	<link rel="stylesheet" href="AdminSignin.css">
	<script  src="jquery-1.9.1.min.js"></script>
	<script src="Admin.js"></script>
	
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="homepage.html"><span class="glyphicon glyphicon-home"></span> Home</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="homepage.html"><span class="glyphicon glyphicon-user"> Deconnecter&nbsp;</span>						</a>
						
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="jumbotron text-center">
		<h2>système de réservation de billets d'avion</h2> 
	 
	</div>

	<div class="container">
		
		<div class="btn-group btn-group-justified">
			<div class="btn btn-primary" id="a">Ajouter</div>
			<div class="btn btn-primary" id="u">Modifier</div>
			<div class="btn btn-primary" id="d">Supprimer</div>
		</div>
		<hr />
		<div id = "add">
		<form class="form-horizontal" role="form" id="addf" method="GET" action="adminadd.php" >
			<div class="form-group">
				<label class="control-label col-sm-2" for="flightno2">Vol No.</label>
				<div class="col-sm-6">
					<input type="flightno" class="form-control" id="flightno2" placeholder="" name="flightno">
					
				</div>
				
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="airplaneid2">Avion ID</label>
				<div class="col-sm-6">
					<input type="airplaneid" class="form-control" id="airplaneid2" placeholder="" name="airplaneid">
				</div>
				<label class="control-label col-sm-1" for="airpiddetail" id = "ad1"><font color="gray">details</font></label>
				<div class="col-sm-3" id = "detail">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="departure"> Aéroport de départ</label>
				<div class="col-sm-6">
					<input type="departure" class="form-control" id="departure2" placeholder="" name="departure">
				</div>
				<label class="control-label col-sm-1" for="dairportdetail" id="ad2" ><font color="gray">details</font></label>
				<div class="col-sm-3" id = "adetail2">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="dtime">Temps de départ</label>
				<div class="col-sm-6">
					<input type="dtime" class="form-control" id="dtime2" placeholder="" name="dtime">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="arrival">Aéroport d'arrivée</label>
				<div class="col-sm-6">
					<input type="arrival" class="form-control" id="arrival2" placeholder="" name="arrival">
				</div>
				<label class="control-label col-sm-1" for="dairportdetail" id="ad3" ><font color="gray">details</font></label>
				<div class="col-sm-3" id = "adetail3">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="atime">Temps d'arrivée</label>
				<div class="col-sm-6">
					<input type="atime" class="form-control" id="atime2" placeholder="" name="atime">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="ecapacity">Capacité d'économie</label>
				<div class="col-sm-6">
					<input type="ecapacity" class="form-control" id="ecapacity2" placeholder="" name="ecapacity">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="eprice"> Prix économique</label>
				<div class="col-sm-6">
					<input type="eprice" class="form-control" id="eprice2" placeholder="" name="eprice">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="bcapacity">Capacité d'affaires</label>
				<div class="col-sm-6">
					<input type="bcapacity" class="form-control" id="bcapacity2" placeholder="" name="bcapacity">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="bprice">Prix d'affaires</label>
				<div class="col-sm-6">
					<input type="bprice" class="form-control" id="bprice2" placeholder="" name="bprice">
				</div>
			</div>
			
			<br />
			<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-6">
					<input type = "button" class="btn btn-primary btn-block" name="btn-submit" id="ad" value = "submit" />
				</div>
			</div>
		</form>
		</div>
		<div id = "update">
		<form class="form-horizontal" role="form"   >
			<div class="form-group">
				<label class="control-label col-sm-2" for="number">Vol No.</label>
				<div class="col-sm-6">
					<input type="flightno" class="form-control" name="number" id="number" placeholder="">
					
				</div>
				<div class="col-sm-2">
					<input type="button" class="btn btn-success btn-block" name="search" id="search" value = "Chercher Vol" />
				</div>
			</div>
		</form>
		<form class="form-horizontal" role="form" id="result" method="GET" action="Adminupdate.php" >
			<div class="form-group">
				<label class="control-label col-sm-2" for="flightno">Vol No.</label>
				<div class="col-sm-6">
					<input type="flightno" class="form-control" id="flightno1" placeholder="" name="flightno">
					
				</div>
				
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="airplaneid">Avion ID</label>
				<div class="col-sm-6">
					<input type="airplaneid" class="form-control" id="airplaneid1" placeholder="" name="airplaneid">
				</div>
				
				<label class="control-label col-sm-1" for="dairportdetail" id="ud1" ><font color="gray">details</font></label>
				<div class="col-sm-3" id = "detail1">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="departure"> Aéroport de depart </label>
				<div class="col-sm-6">
					<input type="departure" class="form-control" id="departure1" placeholder="" name="departure"> 
				</div>
				<label class="control-label col-sm-1" for="dairportdetail" id="ud2" ><font color="gray">details</font></label>
				<div class="col-sm-3" id = "udetail2">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="dtime">Temps de depart</label>
				<div class="col-sm-6">
					<input type="dtime" class="form-control" id="dtime1" placeholder="" name="dtime">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="arrival">Aéroport d'arrivée</label>
				<div class="col-sm-6">
					<input type="arrival" class="form-control" id="arrival1" placeholder="" name="arrival">
				</div>
				<label class="control-label col-sm-1" for="dairportdetail" id="ud3" ><font color="gray">details</font></label>
				<div class="col-sm-3" id = "udetail3">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="atime">Temps d'arrivée</label>
				<div class="col-sm-6">
					<input type="atime" class="form-control" id="atime1" placeholder="" name="atime">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="ecapacity"> Capacité d'économie</label>
				<div class="col-sm-6">
					<input type="ecapacity" class="form-control" id="ecapacity1" placeholder="" name="ecapacity">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="eprice">Prix économique</label>
				<div class="col-sm-6">
					<input type="eprice" class="form-control" id="eprice1" placeholder="" name="eprice">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="bcapacity"> Capacité d'affaires</label>
				<div class="col-sm-6">
					<input type="bcapacity" class="form-control" id="bcapacity1" placeholder="" name="bcapacity">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="bprice">Prix d'affaires</label>
				<div class="col-sm-6">
					<input type="bprice" class="form-control" id="bprice1" placeholder="" name="bprice">
				</div>
			</div>
			
			<br />
			<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-6">
					<input type = "button" class="btn btn-primary btn-block"    value="Modifier" id="up" />
					<input type = "button" class="btn btn-primary btn-block" value="Supprimer" id="de" />
				</div>
			</div>
		</form>
		</div>
		<div id = "delete">
	
	    </div>
		<br /><br /><br />
	</div>	
	
	<footer class="container-fluid text-center">
		<a href="#signUpPage" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		</a>
		 	
	</footer>
</body>
</html>
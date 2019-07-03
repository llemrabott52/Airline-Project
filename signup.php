<!DOCTYPE html>
<html lang="en">
<head>
	<title> billets d'avion, vols pas chers</title>
	<meta name="language" content="english" />
	<meta name="keywords" content="airprice, travel, cheap airfare, discount airfare" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta name="viewpoint" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="https://lh3.googleusercontent.com/-HtZivmahJYI/VUZKoVuFx3I/AAAAAAAAAcM/thmMtUUPjbA/Blue_square_A-3.PNG" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="forcompany.css">
	<link rel="stylesheet" href="AdminSignin.css">
	<link rel="stylesheet" href="pswd.css">
	<link rel="stylesheet" href="manda.css">
	<script src="pswd.js"></script>
	<script src="manda.js"></script>
	<script src="formValidation.js"></script>
	<script src="checkUser.js"></script>
	<script src="login.js"> </script>
</head>
<body id="signUpPage" data-spy="scroll" data-target=".navbar" data-offset="60">
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
					<li id = "cart">
						<a class="navbar-brand" href="cartshow.php"><span class="glyphicon glyphicon-shopping-cart"></span> Panier </a>
					</li>


					<li class="dropdown" id = "new">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user">  connecter/s'inscrire&nbsp;</span><span class="caret"></span>
						</a>
						<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
						  <li><a href="signup.php">S'inscrire</a></li>
						  
						  <li class="dropdown-submenu">
							<a tabindex="-1" href="#">se connecter</a>
							<ul class="dropdown-menu">
							  <li><a tabindex="-1" href="Adminsignin.html">en tant que Admin</a></li>
							  <li><a href="customersignin.html">en tant que Client</a></li>
							  </li>
						
					
							</ul>
						  </li>
						
						</ul>
					</li>
					  <li class="dropdown" id = "old">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" ><span class="glyphicon glyphicon-user" id="wuser">Bienvenue!</span>
						<span class="caret"></span>
						</a>
						<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
							<li><a href="showhistory.php">Histoire</a></li>							
							<li><a href="#" id="logout">Deconnecter</a></li>
						</ul>
						</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="jumbotron text-center">
		<h2>système de réservation de billets d'avion</h2> 
		 
	</div>

	<div class="container">
		<div class="page-header">
			<h2>S'inscrire</h2>
		</div>
		<form  class="form-horizontal"  action="register.php" method="POST"><!-- name="myForm" onsubmit="return validateForm()" role="form"  -->
			<div class="form-group">
				<label class="control-label col-sm-2" for="username"><span style="color:red;">*</span> Nom utilisateur:</label>
				<div class="col-sm-6">
					<input type="username" class="form-control" id="username" placeholder="Uniquement les caractères Alphabetiques ou numériques " name="username">
				</div>
				<div class="col-sm-2">
					<input type="button" class="btn btn-success btn-block" id="check_username_availability" value="verifier valabilité">
					
				</div>
				<span class="error">Nom utilisateur est obligatoire</span>
			</div>
			<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-6" id="username_availability_result">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="pwd1"><span style="color:red;">*</span> Mot de passe :</label>
				<div class="col-sm-6">
					<input type="password" class="form-control" id="pwd1" placeholder="pas un caractère specifié,Au moins une lettre,Au moins une lettre majuscule,Au moins un numéro" name="pwd1">
				</div>
				<span class="error">Mot de passe est obligatoire</span>
			</div>
			<div class="form-group" id="pswd_info">
				<h4>Le mot de passe doit répondre aux exigences suivantes :</h4>
				<ul>
					<li id="letter" class="invalid">Au moins une lettre</li>
					<li id="capital" class="invalid">Au moins une lettre majuscule</li>
					<li id="number" class="invalid">Au moins un numéro</li>
					<li id="length" class="invalid">Au moins 6 caractères</li>
				</ul>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="firstname"><span style="color:red;">*</span>Prénom:</label>
				<div class="col-sm-6">
					<input type="firstname" class="form-control" id="firstname" placeholder="Entrer votre Prénom" name="firstname">
				</div>
				<span class="error">Prénom est obligatoire</span>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="middlename">Nom:</label>
				<div class="col-sm-6">
					<input type="middlename" class="form-control" id="middlename" name="middlename" placeholder="Entrer votre Nom">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="lastname"><span style="color:red;">*</span>Nom de famille:</label>
				<div class="col-sm-6">
					<input type="lastname" class="form-control" id="lastname" placeholder="Entrer le Nom de famille " name="lastname">
				</div>
				<span class="error">Nom de famille est obligatoire </span>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email"><span style="color:red;">*</span> Email:</label>
				<div class="col-sm-6">
					<input type="email" class="form-control" id="email" placeholder="Entrer votre Email" name="email">
				</div>
				<span class="error">Email est obligatoire  </span>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="gender">Genre:</label>
				<div class="col-sm-6">
					<label class="radio-inline">
						<input type="radio" name="gender" value="Female">Femme
					</label>
					<label class="radio-inline">
						<input type="radio" name="gender" value="Male">Homme
					</label>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="birthday">Date de naissance:</label>
				<div class="col-sm-6">
					<input type="date" class="form-control" id="birthday" name="birthday">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="tel"><span style="color:red;">*</span> Numero Tel:</label>
				<div class="col-sm-6">
					<input type="tel" class="form-control" id="tel" placeholder="Entrer votre Numero de Tel" name="tel">
				</div>
				<span class="error"> Numero Tel est obligatoire  </span>
			</div>
			
			<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-6">
					<button type="submit" class="btn btn-primary btn-block" name="btn-signup" id="signup">Inscrire </button>
				</div>
			</div>
		</form>
		<br /><br /><br />
	</div>
	<footer class="container-fluid text-center">
		<a href="#signUpPage" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		</a>
		
	</footer>
</body>
</html>
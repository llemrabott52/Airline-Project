<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: homepage.html");
}

// if(isset($_POST['btn-login']))
// {
	
	$usernam=$_POST['nameadmin'];
	$pw=$_POST['pwdadmin'];
	$result=mysqli_query($conn,"SELECT * FROM users WHERE username='$usernam'");
	$ligne=mysqli_fetch_array($result);
	if($ligne['password']==$pw)
	{
		$_SESSION['user']=$ligne['username'];
		header("Location: Adminpage.php");
	}
	else
	{
	
	//echo "<script>alert('wrong username or wrong password ');</script>";

	echo '
    <head>
	<title>Airprice.com - airline tickets, cheap flights</title>
	<meta name="language" content="english" />
	<meta name="keywords" content="airprice, travel, cheap airfare, discount airfare" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta name="viewpoint" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="https://lh3.googleusercontent.com/-HtZivmahJYI/VUZKoVuFx3I/AAAAAAAAAcM/thmMtUUPjbA/Blue_square_A-3.PNG" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="forcompany.css">
	<link rel="stylesheet" href="customersignin.css">
	<link rel="stylesheet" href="AdminSignin.css">
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
						<a class="navbar-brand" href="cartshow.php"><span class="glyphicon glyphicon-shopping-cart"></span> Panier</a>
					</li>


					<li class="dropdown" id = "new">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user">  connecter/s\'inscrire&nbsp;</span><span class="caret"></span>
						</a>
						<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
						  <li><a href="signup.html">S\'inscrire</a></li>
						  
						  <li class="dropdown-submenu">
							<a tabindex="-1" href="#">se connecter</a>
							<ul class="dropdown-menu">
							  <li><a tabindex="-1" href="Adminsignin.html">en tant que Admin </a></li>
							  <li><a href="customersignin.html">en tant que Client</a></li>
							    </li>
						
					
							</ul>
						  </li>
						
						</ul>
					</li>
					  <li class="dropdown" id = "old">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" ><span class="glyphicon glyphicon-user" id="wuser">Bienvenue !</span>
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
		<h2>système de réservation de billets d\'avion</h2> 
		  
	</div>
	
	<div class="container" id="signAdin">
		<h2>Bienvenue aux administrateurs</h2>
		 

		<form action="Admin.php" method="POST">
		<div class="container" id="main">
			<h3>Votre nom d\'utilisateur:</h3>
			<input type="text" class="form-control" id="username" placeholder="Enter Your Username" name="nameadmin" required>
			<h3>Votre mot de passe:</h3>
			<input type="password" class="form-control" id="pwd" placeholder="Enter Your Password" name="pwdadmin" required>
			
		</div>
		<br />
		<div class="col-sm-offset-2 col-sm-6">
			<div class="checkbox">
				<label><input type="checkbox">Rappelle-moi mon identifiant à mon retour</label>
			</div>
		</div>
		
		<div class="col-sm-offset-2 col-sm-8">
			<button type="submit" class="btn btn-success btn-block" name="btn-login">SE CONNECTER</button>
		</div>
		</form>

	</div>
	<br /><br />
	<footer class="container-fluid text-center">
		<a href="#signUpPage" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		</a>
		 	
	</footer>
</body>';
			
		
	}
//}


mysqli_close($conn);
?>
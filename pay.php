<?php
// Start the session
session_start();

$user = $_SESSION['user'];




?>












<!DOCTYPE html>
<html>
<html lang="en">
<head>
  <title>Payer</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="https://lh3.googleusercontent.com/-HtZivmahJYI/VUZKoVuFx3I/AAAAAAAAAcM/thmMtUUPjbA/Blue_square_A-3.PNG" />
  <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="forcompany.css">
  <link rel="stylesheet" href="homepage.css">
  <link rel="stylesheet" href="AdminSignin.css">
  <script src="login.js"> </script>
  <script src="jump.js"> </script>
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
                    <li id = "cart">
                        <a class="navbar-brand" href="cartshow.php"><span class="glyphicon glyphicon-shopping-cart"></span> Panier</a>
                    </li>           
          <li class="dropdown" id = "new">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user">  connecter/s'inscrire&nbsp;</span><span class="caret"></span>
            </a>
            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="signup.html">S'inscrire</a></li>
              
              <li class="dropdown-submenu">
              <a tabindex="-1" href="#">se connecter</a>
              <ul class="dropdown-menu">
                <li><a tabindex="-1" href="Adminsignin.html">en tant que Admin </a></li>
                <li><a href="customersignin.html">en tant que Client </a></li>
                
            
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


<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">

    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Fin du paiement</h1>
      <h4> votre reservation à été réalisé avec succès </h4>
      <div><img src="smile.jpg" alt="smile" id="smile">
      </div>




<?php

include_once 'dbconnect2.php';

 
    $sql = mysqli_query($con,"UPDATE book
            SET paid = '1'
            WHERE username = '$user'");



mysqli_close($con);
?>




    </div>
    
  </div>
</div>

<footer class="container-fluid text-center">
        <a href="#signUpPage" title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
         
</footer>


</body>
</html>
<!DOCTYPE html>
<html>
<html lang="en">
<head>
  <title>chercher de vols</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="https://lh3.googleusercontent.com/-HtZivmahJYI/VUZKoVuFx3I/AAAAAAAAAcM/thmMtUUPjbA/Blue_square_A-3.PNG" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="forcompany.css">
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="AdminSignin.css">
    <script src="login.js"> </script>
  <link rel="stylesheet" type="text/css" href="Search.css">
  <script src="notavailable.js"></script>
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
                        <a class="navbar-brand" href="cartshow.php"><span class="glyphicon glyphicon-shopping-cart"></span>Panier</a>
                    </li>                     
                    <li class="dropdown" id = "new">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user">  connecter/s'inscrire&nbsp;</span><span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                          <li><a href="signup.html">S'inscrire</a></li>
                          
                          <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">connecter</a>
                            <ul class="dropdown-menu">
                              <li><a tabindex="-1" href="Adminsignin.html">en tant que Admin </a></li>
                              <li><a href="customersignin.html">en tant que Client </a></li>
                              
                        
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
        <h2>système de réservation de billets d'avion</h2>  
</div>


<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">

    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Chercher des resultats</h1>

<?php
include_once 'dbconnect2.php';



$selectdate = $_POST["selectdate"];


global $sql, $availableNumber;

    $sql = "SELECT * 
            FROM flight FL,  class C, airplane AP 
            WHERE (FL.number = C.number) AND (FL.airplane_id = AP.ID) 
            
            ORDER BY FL.number";


$result = mysqli_query($con,$sql);
$rowcount = mysqli_num_rows($result);


if($rowcount == 0){
    echo "<div class='alert alert-info'><strong> resultat de la recherche : </strong>".$rowcount." résultat </div>";
}
else{
echo "<div class='alert alert-info'><strong>resultat de la recherche : </strong>".$rowcount." resultat </div>";

echo "<table class='table table-bordered table-striped table-hover'>
      <thead>
      <tr>
        <th>Vol</th>
        <th>Avion</th>
        <th>Date</th>
        <th>Départ</th>
        <th>Temps de départ</th>
        <th>Arrivée</th>
        <th>Temps d'arrivée</th>
        <th>Classe</th>
        <th>Capacité</th>
        <th>Prix</th>
        <th>Places restants</th>
        <th>Reserve</th>
      </tr>
      </thead>";
while($row = mysqli_fetch_array($result)) {
    echo "<tbody><tr>";
    echo "<td>" . $row['number'] . "</td>";
    echo "<td>" . $row['company']." ".$row['type']. "</td>";
    echo "<td>" . $selectdate . "</td>";
    echo "<td>" . $row['departure'] . "</td>";
    echo "<td>" . $row['d_time'] . "</td>";
    echo "<td>" . $row['arrival'] . "</td>";
    echo "<td>" . $row['a_time'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['capacity'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    
   
        //calculate number of remain seats
        $seatreserved = "SELECT flightno, classtype, COUNT(*)
                    FROM book B
                    WHERE B.date = '".$selectdate."' AND B.flightno = '".$row['number']."'AND B.classtype ='".$row['name']."' AND paid=1
                    GROUP BY flightno, classtype";
        $reserved = mysqli_query($con, $seatreserved);   
        $reservedNumber = mysqli_fetch_array($reserved);
        
        $capacity = mysqli_query($con, "SELECT capacity FROM class C WHERE C.number='".$row['number']."' AND C.name= '".$row['name']."'");
        $capacityNumber = mysqli_fetch_array($capacity);


        if(mysqli_num_rows($reserved)>0){            
            $availableNumber = $capacityNumber['capacity'] - $reservedNumber['COUNT(*)'];
        }else{
            $availableNumber = $capacityNumber['capacity'];
        }
    
        echo "<td>".$availableNumber."</td>";
    
    if($availableNumber>0){
    echo '<td>
        <form action="shoppingcart.php" method="post">
        <input type="hidden" name="flightno" value="'.$row['number'].'">
        <input type="hidden" name="classtype" value="'.$row['name'].'">
        <input type="hidden" name="price" value="'.$row['price'].'">
        <input type="hidden" name="date" value="'.$selectdate.'">
        <input type="hidden" name="type" value="all">
        <button type="submit" class="btn btn-primary">Ajouter au panier</button>
        </form>
        </td>';
    }else{
        echo "<td><button type='button' class='btn btn-warning' onclick='myFunction()'>Indisponible</button></td>";
    }
    
    echo "</tr>";
}
echo " </tbody></table>";

}


//mysqli_free_result($result);

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
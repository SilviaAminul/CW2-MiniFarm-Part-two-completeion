<?php
session_start();
 if (isset($_SESSION['loggedInUserEmail'])) { 

} else {
  header('Location: /html/MiniFarm/login.html');
   // Otherwise redirect to login page
}


//Include libraries
require  $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->MiniFarm;

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">';
echo '<div class="container-fluid d-flex flex-row justify-content-between">';
echo '<div class="m-left d-inline-flex">';
echo ' <a class="navbar-brand" href="home.php"><img width="75" height="75" class="img-fluid" src="/Images1/logo.jpg"height></a>';
        echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
        echo ' <ul class="navbar-nav me-auto mb-2 mb-lg-0">';
        echo ' <li class="nav-item">';
        echo ' <a class="nav-link active" aria-current="page" href="home.php">Home</a>';
        echo ' </li>';
        echo ' <li class="nav-item">';
        echo ' </li>';
        echo ' <li class="nav-item dropdown">';
        echo ' <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
        echo '   Shop';
        echo '  </a>';
        echo ' <ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
        echo '    <li><a class="dropdown-item" href="fruits.php">Fruit</a></li>';
        echo '    <li>';
        echo '     <hr class="dropdown-divider">';
        echo '    </li>';
        echo '  <li><a class="dropdown-item" href="salad.php">Salad </a></li>';
        echo '  <li>';
        echo '   <hr class="dropdown-divider">';
        echo '   </li>';
        echo '   <li><a class="dropdown-item" href="greenveg.php">Green Veg</a></li>';
        echo ' <li><a class="dropdown-item" href="exoticveg.php">Exotic Veg </a></li>';
        echo '    <li><a class="dropdown-item" href="rootveg.php">Root Veg </a></li>';
        echo '</ul>';
        echo '  </li>';
        echo '  </ul>';
        echo '   </div>';
        echo ' </div>';
        echo ' <div style="width:70%" class="m-center">';

        echo '   <form method="get" action="search.php" class="d-flex">';
        echo ' <input class="form-control me-2" type="search" placeholder="Search" id="SearchInput"  name = "name1" aria-label="Search">';
        echo '  <button class="btn btn-outline-success" type="submit"  id="SearchButton"  href="search.php">Search</button>';
        echo '  </form>';
        echo ' </div>';
        echo '<div class="m-right">';
        echo '  <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>';
        echo '  <ul class="navbar-nav me-auto mb-2 mb-lg-0">';
        echo ' <li class="nav-item dropdown">';
        echo '  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"';
        echo '    aria-expanded="false">';
        echo '     Account';
        echo '   </a>';
        echo '   <ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
        echo '    <li><a class="dropdown-item" href="login.html">Login</a></li>';
        echo '    <li>';
        echo '   <hr class="dropdown-divider">';
            echo '   </li>';

            echo '       <li><a class="dropdown-item" href="register.html">Register</a></li>';
            echo '     </ul>';
            echo ' </li>';

            echo '  <li class="nav-item">';
            echo '      <a class="nav-link active" aria-current="page" href="cart.php">Cart</a>';
            echo '     </li>';
            echo '   </ul>';
            echo ' </div>';
            echo '</div>';

            echo '</div>';
            echo '</div>';
            echo '</nav>';



//Extract the data that was sent to the server
$search_string= filter_input(INPUT_GET, 'name1', FILTER_SANITIZE_STRING);
$direction=filter_input(INPUT_GET, 'direction', FILTER_SANITIZE_NUMBER_INT);

echo ' <section id="fruits">';

echo ' <div class="fruit_heading">';
echo '<h3>Search Results for ' . $search_string .'</h3>';
echo '<hr>';
 echo '<div class="fruit_container">';

if ($search_string != null) {
//Create a PHP array with our search criteria
$findCriteria = [
  '$text' => ['$search' => $search_string]];
$sortcriteria=[];
if (isset($_GET['direction'])) {
  $sortcriteria =[
    'sort' => ['price' => intval($direction)]
  ];
  
}


//Find all of the customers that match  this criteria
$cursor = $db->product->find($findCriteria , $sortcriteria);

//Output the results

foreach ($cursor as $prod){


 echo '<div class="fruit_box"> <img src="' . $prod ['img_url'] . '">';
 echo '<strong>'  . $prod['name'] . '</strong> ';
 echo '<span class="quantity">' . $prod['weight'] . '</span>';
 echo '<span class="avaialability">   In Stock : ' . $prod['availability'] . '</span>';

 echo '<span class="price"> £'  . $prod ['price'] . '</span>';
 echo '<a href="#" class=cart_button><i class="fa fa-shopping-cart "></i>Add to Cart</a>';
 echo "</div>";
 
}



}


echo "</div>"





?>




<!DOCTYPE html>

<html>

<head>
  <!-- the linking of css, bootstrap and fontawesome for the icons used-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
    integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
    integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/7b3395a88c.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="/css/style1.css">

</head>

<body>

<div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

  </a>
  <form method="post">
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a input type="submit" class="dropdown-item" name = "lo-hi" href="search.php?name1=<?= $prod['name'] ?>&direction=1">Price Low to High </a>
    <a  input type="submit" class="dropdown-item" name = "hi-lo" href="search.php?name1=<?= $prod['name'] ?>&direction=-1">Price High To Low</a>
  </div>
</div>
</form>





  <h2>Recommendations</h2>
        <div id="RecomendationDiv"></div>
        <script  type='module'>
            "use strict";

            //Import recommender class
            import {Recommender} from './recommender.js';

            //Create recommender object - it loads its state from local storage
            let recommender = new Recommender();
            
            /* Set up button to call search function. We have to do it here 
                because search() is not visible outside the module. */
            document.getElementById("SearchButton").onclick = search;
            
            //Display recommendation
            window.onload = showRecommendation;
            
            //Searches for products in database
            function search(){
                //Extract the search text
                let searchText = document.getElementById("SearchInput").value;
                
                //Add the search keyword to the recommender
                recommender.addKeyword(searchText);
                showRecommendation();
                
                //#FIXME# PERFORM SEARCH FOR PRODUCTS
            }
            
            //Display the recommendation in the document
            function showRecommendation(){
                document.getElementById("RecomendationDiv").innerHTML = recommender.getTopKeyword();
            }
        </script>




  


  <!-- search results with products  -->
  <section id="fruits">
    <div class="fruit_heading">
      <h3>You might Like </h3>
    

    </div>

    <div class="fruit_container">
      <div class="fruit_box">
        <img src="/images1/grapes.jpg" alt="grapes">
        <strong>Grapes</strong>
        <span class="quantity">1 kg</span>
        <span class="price">£1.00</span>
        <a href="#" class=cart_button><i class="fa fa-shopping-cart "></i>Add to Cart</a>
      </div>


      <div class="fruit_box">
        <img src="/images1/bananas.jpg" alt="bananas">
        <strong>Banana</strong>
        <span class="quantity">1 kg</span>
        <span class="price">£1.00</span>
        <a href="#" class=cart_button><i class="fa fa-shopping-cart "></i>Add to Cart</a>
      </div>

      <div class="fruit_box">
        <img src="/images1/blueberries.jpg" alt="grapes">
        <strong>blueberries</strong>
        <span class="quantity">1 kg</span>
        <span class="price">£1.00</span>
        <a href="#" class=cart_button><i class="fa fa-shopping-cart "></i>Add to Cart</a>
      </div>


   

    </div>
   

  <!-- footer -->
  <footer>
    <div class="footer_container">
      <div class="footer_logo">
        <a href="#">
          <span>Mini</span>Farms</a>

        <div class="footer_social">
          <a href="#"><i class="fa fa-facebook-f"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-youtube-play"></i></a>
        </div>
      </div>

      <div class="footer_links">
        <strong>About Us</strong>
        <ul>
          <li><a href="#">Policy</a> </li>
          <li><a href="#">Privacy</a> </li>
          <li><a href="#">FAQ</a> </li>

        </ul>
      </div>

      <div class="footer_links">
        <strong>Help</strong>
        <ul>
          <li><a href="#">Payments</a> </li>
          <li><a href="#">Cancellations</a></li>
          <li><a href="#">Shipping</a> </li>

        </ul>
      </div>

      <div class="footer_links">
        <strong>Contact Us</strong>
        <ul>
          <li><a href="#">Phone</a> </li>
          <li><a href="#">Email</a> </li>


        </ul>
      </div>
    </div>
  </footer>


</body>

</html>



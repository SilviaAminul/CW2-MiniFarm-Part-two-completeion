
<?php

//Include libraries
require  $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
session_start();
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->MiniFarm;

$orders = $db->order->find();

$custID = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

//Build PHP array with delete criteria 
$deleteCriteria = [
    "_id" => new MongoDB\BSON\ObjectID($custID)
];

//Delete the customer document
$deleteRes = $db->order->deleteOne($deleteCriteria);
    
//Echo result back to user
if($deleteRes->getDeletedCount() == 1){
    echo 'Customer deleted successfully.';
}
else{
   echo 'Error deleting customer';
}



if (isset($_SESSION['loggedInUserEmail'])) {
    // Logged in, do nothing
 } else {
   header('Location: /html/CMS/stafflogin.html'); // Otherwise redirect to login page
 }

?>


<!DOCTYPE html>
<html>

<!-- the linking of css, bootstrap and fontawesome for the icons used-->

<head>

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
    <link rel="stylesheet" href="/css/ishacms.css">
</head>

<!-- logo of the website, the header and navigation bar-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid d-flex flex-row justify-content-between">
        <div class="m-left d-inline-flex">
            <a class="navbar-brand" href="home.php"><img width="75" height="75" class="img-fluid"
                    src="/ishacms/logo.jpg" height alt="Mini Farm"></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="addproducts.html">Add Products</a></li>
                            <li><a class="dropdown-item" href="updateproducts.html">Edits Products </a></li>
                            <li><a class="dropdown-item" href="viewproduct.php">View Products </a></li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>


                            <li><a class="dropdown-item" href="vieworders.php"> View Orders </a></li>
                            <li><a class="dropdown-item" href="deleteorders.html">Delete Orders </a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div style="width:70%" class="m-center">


        </div>
        <div class="m-right">
            <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Account
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="stafflogout.php">Log out</a></li>


                    </ul>
        </div>
    </div>

    </div>
    </div>
</nav>

<!--View Products-->

<div>


  <table>
    <th>  Orders Id</th>
    <p>Refresh To see remaining orders, to delete orders copy order you wish to delete and paste it in the deleteorders</p>
</table>

    
  
      <?php 
        if($orders){
            foreach($orders as $order){ ?>
        
        
        <?=  $order['_id'] ?>
       
      
       
      <br>
        
        <?php }
        } ?>
      
    
            
          </div> 

         
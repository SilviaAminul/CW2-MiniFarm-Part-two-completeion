
<?php
session_start();
 if (isset($_SESSION['loggedInUserEmail'])) { 

} else {
  header('Location: /html/CMS/stafflogin.html');
   // Otherwise redirect to login page
}
?>

<?php

//Include libraries
require  $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->MiniFarm;

//Select a collection 
$collection = $db->product;

//Extract the data that was sent to the server
$name= filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
$img_url = filter_input(INPUT_POST, 'img_url', FILTER_SANITIZE_STRING);
$weight = filter_input(INPUT_POST, 'weight', FILTER_SANITIZE_STRING);
$price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
$availability = filter_input(INPUT_POST, 'availability', FILTER_SANITIZE_STRING);

if($name != "" && $description != "" && $img_url != "" && $weight != "" && $price != "" && $availability != "" ){//Check query parameters 

//Convert to PHP array
$dataArray = [
    "name" => $name, 
    "description" => $description, 
    "img_url" => $img_url,
    "weight" => $weight,
    "price" => $price,
    "availability" => $availability


 ];

//Add the new product to the database
$insertResult = $collection->insertOne($dataArray);
    
    
        //Output message confirming registration
        echo 'Thank you for registering ' . $name;
    }
    else{//A query string parameter cannot be found
        echo 'Registration data missing';
    }





?>


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

//Extract the customer details 
$name= filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
$img_url = filter_input(INPUT_POST, 'img_url', FILTER_SANITIZE_STRING);
$weight = filter_input(INPUT_POST, 'weight', FILTER_SANITIZE_STRING);
$price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
$availability = filter_input(INPUT_POST, 'availability', FILTER_SANITIZE_STRING);

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

//Criteria for finding document to replace

$replaceCriteria = [
    "_id" => new MongoDB\BSON\ObjectID($id)
];

if ($id != null) {

//Data to replace
$customerData = [
    "name" => $name,
    "description" => $description,
    "img_url" => $img_url,
    "weight" => $weight,
    "price" => $price,
    "availability" => $availability

];

//Replace customer data for this ID
$updateRes = $db->product->replaceOne($replaceCriteria, $customerData);
    
//Echo result back to user
if($updateRes->getModifiedCount() == 1)
    echo 'Product succesfully updated .';
else
    echo 'Customer replacement error.';
}
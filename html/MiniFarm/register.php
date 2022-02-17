



<?php
require  $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
$mongoClient = (new MongoDB\Client);
$db = $mongoClient->MiniFarm;
$collection = $db->customer;


    //Get name and address strings - need to filter input to reduce chances of SQL injection etc.
    $name= filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    
    if($name != "" && $email != "" && $password != "" && $phone != ""){//Check query parameters 
        //STORE REGISTRATION DATA IN MONGODB
        
        
$customerData = [
    "name" => $name,
    "email" => $email,
    "password" => $password,
    "phone" => $phone
];



    //Create a PHP array with our search criteria
    $findCriteria = [ "email" => $email ];

    //Find all of the customers that match  this criteria
    $resultArray = $db->customer->find($findCriteria)->toArray();

    //Check that there is exactly one customer
    if(count($resultArray) > 1){
        echo 'Database error: email address is already taken .';
        return;
    }



$insertresult = $collection->insertOne($customerData);
    
        //Output message confirming registration
        echo 'Thank you for registering ' . $name;
    }
    else{//A query string parameter cannot be found
        echo 'Registration data missing!';
    }





?>






    
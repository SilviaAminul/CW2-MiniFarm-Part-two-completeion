<?php
    //Start session management
    session_start();

        //Connect to MongoDB and select database
        require  $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';//Include libraries

        //Include libraries
            $mongoClient = (new MongoDB\Client);//Create instance of MongoDB client
            $db = $mongoClient->MiniFarm;
            

    //Get name and address strings - need to filter input to reduce chances of SQL injection etc.
    $email= filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);    


    //Create a PHP array with our search criteria
    $findCriteria = [ "email" => $email ];

    //Find all of the customers that match  this criteria
    $resultArray = $db->customer->find($findCriteria)->toArray();

    //Check that there is exactly one customer
    if(count($resultArray) == 0){
        echo 'Customer email not found';
        return;
    }
    
   
    //Get customer and check password
    $customer = $resultArray[0];
    if($customer['password'] != $password){
        echo 'Password incorrect.';
        return;
    }
 

    //Start session for this user
    $_SESSION['loggedInUserEmail'] = $email;
        
    

    echo 'ok';  
    

    
    //Inform web page that login is successful
    
   
	
    
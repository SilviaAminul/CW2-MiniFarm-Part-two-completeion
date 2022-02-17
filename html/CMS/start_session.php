<?php
    //Start session  management
    session_start();
    
    //Set a session variable
    $_SESSION["username"] = 'silvia ';

    //Output result
    echo 'Session started. username=' . $_SESSION["username"];
    
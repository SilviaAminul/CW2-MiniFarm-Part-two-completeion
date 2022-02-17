<?php
    //Start session management
    session_start();
    
    //Find out if session exists
    if( array_key_exists("email", $_SESSION) ){
        echo 'Session in progress. email=' . $_SESSION["email"];
    }
    else{
        echo 'Session not started';
    }
    ?>
    
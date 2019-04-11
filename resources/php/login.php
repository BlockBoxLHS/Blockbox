<?php

    $errorUsername = NULL;
    $errorPassword = NULL;
    
   include("sqlHandler.php");

    if(isset($_COOKIE["BlockKey"])) {
     
        header("Location: ../../index.php");
        exit();
        
    }

    $requestType = $_SERVER["REQUEST_METHOD"];
    
    if ($requestType == "POST") {

        $success = TRUE;

        $username = $_POST["Username"];
        $password = $_POST["Password"];
        
        if (empty($username)) {
            
            $errorUsername = "Username is required";
            $success = FALSE;
            
        } else {
            
            if (!preg_match("/^[a-zA-Z]*$/", $username)) {
                
                $errorUsername = "Username is invalid";
                $success = FALSE;
                
            } else {
                    
                $usernameQuery = checkForUsername(strtolower($username));

                if ($usernameQuery === FALSE) {
                    
                    $errorUsername = "This username doesn't exist";
                    
                    $success = FALSE;
                    
                }
                
            }
        }
        
        if (empty($password)) {
            
            $errorPassword = "Password is required";
            
            $success = FALSE;
            
        } else {
            
            $passwordQuery = checkForPassword(strtolower($username), $password);
            
            if ($passwordQuery === FALSE) {
             
                $errorPassword = "Password isn't correct";
                
                $success = FALSE;
                
            }
            
        }
        
        if ($success) {
            
            $key = uniqid();
            setcookie("BlockKey", $key, time() + (86400 * 30), "/");
            
            setCurrentKey($username, $key);
            
            header("Location: ../../index.php");
            exit();
            
        }
        
    }

?>